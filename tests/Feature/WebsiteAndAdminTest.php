<?php

namespace Tests\Feature;

use App\Models\Equipment;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WebsiteAndAdminTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_english_homepage_loads_correctly(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('MAFGREEN Greenhouse Solutions');
        $response->assertSee('Corporate-Grade Greenhouse Engineering & Turnkey Delivery.', false);
        $response->assertSee('25+ Years');
        $response->assertSee('Project Reference List');
        $response->assertSee('Tomato Production Complex');
    }

    public function test_arabic_homepage_loads_correctly_with_rtl(): void
    {
        $response = $this->get('/ar');

        $response->assertStatus(200);
        $response->assertSee('dir="rtl"', false);
        $response->assertSee('حلول MAFGREEN للبيوت المحمية');
        $response->assertSee('هندسة بيوت محمية بمعايير احترافية وتنفيذ متكامل.');
        $response->assertSee('25+ سنة');
        $response->assertSee('قائمة المشاريع المرجعية');
    }

    public function test_equipment_catalog_page_loads_with_all_categories(): void
    {
        $response = $this->get('/equipment');

        $response->assertStatus(200);
        $response->assertSee('Greenhouse Equipment Catalog');
        $response->assertSee('Greenhouse Structures');
        $response->assertSee('Polycarbonate Sheets');
        $response->assertSee('Spare Parts & Maintenance Supplies');
        $response->assertSee('31');
        $response->assertSee('equipmentLightbox');
        $response->assertSee('View Gallery');
    }

    public function test_equipment_model_supports_feature_image_and_gallery(): void
    {
        $equipment = Equipment::create([
            'code' => '99',
            'title' => 'Advanced Climate Sensor',
            'description' => 'Precision temperature and humidity monitoring unit.',
            'feature_image' => 'equipment/sensor.jpg',
            'gallery' => ['equipment/gallery/sensor1.jpg', 'equipment/gallery/sensor2.jpg'],
            'sort_order' => 99,
            'is_active' => true,
        ]);

        $this->assertEquals('equipment/sensor.jpg', $equipment->feature_image);
        $this->assertEquals('equipment/sensor.jpg', $equipment->featured_image);
        $this->assertIsArray($equipment->gallery);
        $this->assertCount(2, $equipment->gallery);
        $this->assertStringContainsString('equipment/sensor.jpg', $equipment->feature_image_url);
        $this->assertCount(2, $equipment->gallery_urls);
        $this->assertStringContainsString('equipment/gallery/sensor1.jpg', $equipment->gallery_urls[0]);
    }

    public function test_blog_post_page_loads_with_author_and_content(): void
    {
        $response = $this->get('/blog/strawberry-greenhouse-investment');

        $response->assertStatus(200);
        $response->assertSee('Investing in the Future of Agriculture');
        $response->assertSee('Engineer Memduh Ozsarac');
        $response->assertSee('Founder of MAFGREEN');
    }

    public function test_contact_form_submission_stores_inquiry_in_database(): void
    {
        $inquiryData = [
            'full_name' => 'John Doe',
            'company' => 'Agri Corp Ltd',
            'email' => 'john@agricorp.com',
            'phone' => '+971 50 123 4567',
            'message' => 'We are looking to build a 50,000 m2 strawberry greenhouse.',
            'locale' => 'en',
        ];

        $response = $this->post('/contact', $inquiryData);

        $response->assertRedirect();
        $response->assertSessionHas('contact_success');

        $this->assertDatabaseHas('contact_inquiries', [
            'email' => 'john@agricorp.com',
            'company' => 'Agri Corp Ltd',
            'status' => 'new',
            'locale' => 'en',
        ]);
    }

    public function test_admin_login_page_renders(): void
    {
        $response = $this->get('/admin/login');

        $response->assertStatus(200);
        $response->assertSee('MAFGREEN Admin');
    }

    public function test_admin_can_access_filament_dashboard(): void
    {
        $admin = User::where('email', 'admin@mafgreen.com')->first();

        $response = $this->actingAs($admin)->get('/admin');

        $response->assertStatus(200);
        $response->assertSee('MAFGREEN Admin');
    }

    public function test_admin_can_access_all_filament_resources(): void
    {
        $admin = User::where('email', 'admin@mafgreen.com')->first();

        $equipmentResp = $this->actingAs($admin)->get('/admin/equipment');
        $equipmentResp->assertStatus(200);
        $equipmentResp->assertSee('Equipment');

        $postsResp = $this->actingAs($admin)->get('/admin/posts');
        $postsResp->assertStatus(200);
        $postsResp->assertSee('Posts');

        $projectsResp = $this->actingAs($admin)->get('/admin/project-references');
        $projectsResp->assertStatus(200);
        $projectsResp->assertSee('Project References');

        $inquiriesResp = $this->actingAs($admin)->get('/admin/contact-inquiries');
        $inquiriesResp->assertStatus(200);
        $inquiriesResp->assertSee('Contact Inquiries');
    }
}
