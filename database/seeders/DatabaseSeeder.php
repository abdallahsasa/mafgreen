<?php

namespace Database\Seeders;

use App\Models\ContactInquiry;
use App\Models\Equipment;
use App\Models\Post;
use App\Models\ProjectReference;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Admin User for Filament
        User::updateOrCreate(
            ['email' => 'admin@mafgreen.com'],
            [
                'name' => 'MAFGREEN Admin',
                'password' => Hash::make('password'),
            ]
        );

        // 2. Equipment Categories (31 Items)
        $equipmentItems = [
            ['code' => '01', 'title' => 'Greenhouse Structures', 'description' => 'The foundational metal or aluminum framework that forms the skeleton of the greenhouse, providing structural support for covering materials and withstanding weather conditions.'],
            ['code' => '02', 'title' => 'Greenhouse Films & Covering Materials', 'description' => 'UV-stabilized polyethylene or other plastic films used to cover the greenhouse structure, allowing optimal light transmission while protecting plants from rain, wind, and pests.'],
            ['code' => '03', 'title' => 'Polycarbonate Sheets', 'description' => 'Rigid, multi-walled transparent panels offering durability, thermal insulation, and diffused light for greenhouse walls and roofs.'],
            ['code' => '04', 'title' => 'Shade Nets', 'description' => 'Knitted or woven polyethylene nets that reduce sunlight intensity, lower temperatures, and protect plants from excessive heat and UV radiation.'],
            ['code' => '05', 'title' => 'Insect Nets', 'description' => 'Fine mesh screens installed on ventilation openings to prevent insects and pests from entering while maintaining airflow.'],
            ['code' => '06', 'title' => 'Cooling Pads', 'description' => 'Evaporative cooling pads used in fan-and-pad systems to reduce greenhouse temperature as water evaporates through incoming air.'],
            ['code' => '07', 'title' => 'Exhaust Fans', 'description' => 'High-volume industrial fans that expel hot and humid air and create negative pressure to draw in cooler outside air.'],
            ['code' => '08', 'title' => 'Circulation Fans', 'description' => 'Horizontal airflow fans that distribute air uniformly, reduce humidity pockets, and support stronger plant growth.'],
            ['code' => '09', 'title' => 'Ventilation Systems', 'description' => 'Automated or manual roof vents, side vents, fans, and controls that regulate air exchange, temperature, and humidity.'],
            ['code' => '10', 'title' => 'Irrigation Systems', 'description' => 'Complete watering setups including pipes, valves, controllers, and emitters for efficient and uniform water distribution.'],
            ['code' => '11', 'title' => 'Drip Irrigation Kits', 'description' => 'Precision systems with drippers, tubing, and connectors that deliver water and nutrients directly to the plant root zone.'],
            ['code' => '12', 'title' => 'Fogging & Misting Systems', 'description' => 'High-pressure systems that generate fine mist or fog to cool the air and increase humidity for optimal plant growth.'],
            ['code' => '13', 'title' => 'Fertigation Systems', 'description' => 'Equipment that injects liquid fertilizers and nutrients into irrigation water for precise and efficient plant feeding.'],
            ['code' => '14', 'title' => 'Water Pumps', 'description' => 'Centrifugal or submersible pumps used to move water from storage sources to irrigation and other greenhouse systems.'],
            ['code' => '15', 'title' => 'Water Filtration Systems', 'description' => 'Sand, screen, or disc filters that remove sediments and impurities to prevent irrigation emitters from clogging.'],
            ['code' => '16', 'title' => 'Water Storage Tanks', 'description' => 'Large-capacity metal, plastic, or fiberglass tanks for rainwater, treated water, or irrigation water storage.'],
            ['code' => '17', 'title' => 'Hydroponic Systems', 'description' => 'Soilless growing technologies such as NFT, DFT, and media beds that deliver nutrient-rich water directly to plant roots.'],
            ['code' => '18', 'title' => 'Growing Trays & Gutters', 'description' => 'Plastic trays, channels, and gutters used to hold growing media or support plants in hydroponic and soil-based systems.'],
            ['code' => '19', 'title' => 'Coco Peat & Growing Media', 'description' => 'Renewable growing substrates with strong water retention, aeration, and disease-resistance characteristics.'],
            ['code' => '20', 'title' => 'Seedling Trays', 'description' => 'Multi-cell plastic trays for germinating seeds and raising young seedlings before transplanting.'],
            ['code' => '21', 'title' => 'Climate Control Systems', 'description' => 'Integrated automated systems that monitor and regulate temperature, humidity, ventilation, and other environmental conditions.'],
            ['code' => '22', 'title' => 'Greenhouse Controllers & Sensors', 'description' => 'Central electronic controllers connected to sensors that automatically manage temperature, humidity, and CO2 levels.'],
            ['code' => '23', 'title' => 'Temperature & Humidity Sensors', 'description' => 'Digital sensors that continuously measure and display real-time air temperature and relative humidity.'],
            ['code' => '24', 'title' => 'CO2 Controllers', 'description' => 'Devices with sensors and regulators that maintain optimal carbon dioxide levels to support photosynthesis and plant growth.'],
            ['code' => '25', 'title' => 'Greenhouse Heaters', 'description' => 'Gas, diesel, or electric heating units with thermostats used to maintain target temperatures in cold conditions.'],
            ['code' => '26', 'title' => 'LED Grow Lights', 'description' => 'Energy-efficient fixtures providing full-spectrum or targeted wavelengths to supplement natural sunlight or enable indoor growing.'],
            ['code' => '27', 'title' => 'Trellising & Plant Support Systems', 'description' => 'Wire, pole, and netting systems used to support climbing plants and heavy fruiting crops.'],
            ['code' => '28', 'title' => 'Crop Hooks & Twines', 'description' => 'Plastic hooks and strong polypropylene twine used to train plants vertically, especially tomatoes, cucumbers, and peppers.'],
            ['code' => '29', 'title' => 'Plastic Clips & Greenhouse Accessories', 'description' => 'Clips, ties, grommets, and small fittings used for securing films, supporting plants, and greenhouse assembly.'],
            ['code' => '30', 'title' => 'Doors & Ventilation Accessories', 'description' => 'Hinged or sliding doors, vent windows, insect screens, and related hardware for access and additional ventilation.'],
            ['code' => '31', 'title' => 'Spare Parts & Maintenance Supplies', 'description' => 'Replacement bearings, belts, filters, nozzles, tools, and consumables for routine greenhouse maintenance and repairs.'],
        ];

        foreach ($equipmentItems as $index => $item) {
            Equipment::updateOrCreate(
                ['code' => $item['code']],
                [
                    'title' => $item['title'],
                    'description' => $item['description'],
                    'sort_order' => $index + 1,
                    'is_active' => true,
                ]
            );
        }

        // 3. Project References (26 items from the project table)
        $projects = [
            ['country' => 'Turkey', 'city' => 'Istanbul / Omerli', 'area' => '5,400 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Flower Greenhouse'],
            ['country' => 'Turkey', 'city' => 'Istanbul University', 'area' => '1,200 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Research Greenhouse'],
            ['country' => 'Turkey', 'city' => 'Antalya Kursunlu Village', 'area' => '13,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Tomato Greenhouse'],
            ['country' => 'Azerbaijan', 'city' => 'Mashazir', 'area' => '20,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Tomato Greenhouse'],
            ['country' => 'Azerbaijan', 'city' => 'Novxan', 'area' => '7,400 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Strawberry Greenhouse'],
            ['country' => 'Azerbaijan', 'city' => 'Bine', 'area' => '100,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Tomato Greenhouse'],
            ['country' => 'Turkey', 'city' => 'Istanbul Silivri Canta Village', 'area' => '7,500 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Mediterranean Greens'],
            ['country' => 'Azerbaijan', 'city' => 'Zire', 'area' => '20,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Tomato Greenhouse'],
            ['country' => 'Azerbaijan', 'city' => 'Novxani', 'area' => '25,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Tomato Greenhouse'],
            ['country' => 'Azerbaijan', 'city' => 'Zire', 'area' => '45,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Tomato Greenhouse'],
            ['country' => 'Azerbaijan', 'city' => 'Bine', 'area' => '180,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Tomato Greenhouse'],
            ['country' => 'Azerbaijan', 'city' => 'Zire', 'area' => '55,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Tomato Greenhouse'],
            ['country' => 'Azerbaijan', 'city' => 'Mehdiyeabat', 'area' => '20,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Tomato Greenhouse'],
            ['country' => 'Azerbaijan', 'city' => 'Mashtaga', 'area' => '15,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Tomato Greenhouse'],
            ['country' => 'Azerbaijan', 'city' => 'Binegedi', 'area' => '30,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Tomato Greenhouse'],
            ['country' => 'Azerbaijan', 'city' => 'Bine', 'area' => '220,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Tomato Greenhouse'],
            ['country' => 'Azerbaijan', 'city' => 'Hovsan', 'area' => '53,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Tomato Greenhouse'],
            ['country' => 'Azerbaijan', 'city' => 'Mehdiyeabat', 'area' => '40,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Tomato Greenhouse'],
            ['country' => 'Azerbaijan', 'city' => 'Kurdexani', 'area' => '20,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Tomato Greenhouse'],
            ['country' => 'Uzbekistan', 'city' => 'Samarkand', 'area' => '5,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Research Greenhouse'],
            ['country' => 'Turkmenistan', 'city' => 'Turkmenbasi', 'area' => '40,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Tomato Greenhouse'],
            ['country' => 'Uzbekistan', 'city' => 'Parsabad', 'area' => '20,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Tomato Greenhouse'],
            ['country' => 'Azerbaijan', 'city' => 'Bine', 'area' => '80,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Tomato Greenhouse'],
            ['country' => 'Russia', 'city' => 'Crimea', 'area' => '30,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Strawberry Greenhouse'],
            ['country' => 'Russia', 'city' => 'Chelyabinsk', 'area' => '10,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Cucumber Greenhouse'],
            ['country' => 'Russia', 'city' => 'Crimea', 'area' => '12,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Strawberry Greenhouse'],
            ['country' => 'Russia', 'city' => 'Minvodi', 'area' => '15,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Strawberry Greenhouse'],
            ['country' => 'Azerbaijan', 'city' => 'Kurdexani', 'area' => '5,500 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Pepper Greenhouse'],
            ['country' => 'Turkey', 'city' => 'Denizli', 'area' => '30,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Tomato Greenhouse'],
            ['country' => 'Turkey', 'city' => 'Aydin', 'area' => '24,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Tomato Greenhouse'],
            ['country' => 'Turkey', 'city' => 'Denizli', 'area' => '60,000 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Tomato Greenhouse'],
            ['country' => 'Turkey', 'city' => 'Denizli', 'area' => '1,200 m²', 'system' => 'Soilless Agriculture', 'cultivation' => 'Plant Robot Research'],
        ];

        foreach ($projects as $index => $project) {
            ProjectReference::updateOrCreate(
                [
                    'country' => $project['country'],
                    'city' => $project['city'],
                    'area' => $project['area'],
                    'cultivation' => $project['cultivation'],
                ],
                [
                    'system' => $project['system'],
                    'sort_order' => $index + 1,
                ]
            );
        }

        // 4. Blog Post (Strawberry Greenhouse Investment)
        $blogHtml = <<<'HTML'
<p class="text-lg leading-8 text-slate-700">
    Global agriculture is undergoing one of the most important transformations in modern history.
</p>

<p class="text-lg leading-8 text-slate-700 mt-5">
    Rising concerns around food security, climate change, water scarcity, and sustainable production are driving investors and major holding companies toward a new generation of agricultural infrastructure: controlled-environment agriculture (CEA).
</p>

<p class="text-lg leading-8 text-slate-700 mt-5">
    Among the fastest-growing sectors in this transformation is high-tech greenhouse strawberry production.
</p>

<p class="text-lg leading-8 text-slate-700 mt-5">
    Driven by increasing global demand for premium-quality, traceable, and sustainably grown produce, greenhouse strawberry farming is rapidly becoming a strategic investment opportunity for institutional investors, hospitality groups, agricultural funds, and forward-looking holding companies.
</p>

<hr class="my-12">

<h2 class="text-3xl font-bold text-slate-900">The Shift Away from Conventional Agriculture</h2>

<p class="mt-5 text-slate-700 leading-8">
    Traditional open-field farming continues to face increasing pressure from multiple challenges:
</p>

<ul class="mt-5 space-y-3 text-slate-700 list-disc pl-6">
    <li>Climate instability</li>
    <li>Water inefficiency</li>
    <li>Seasonal production limitations</li>
    <li>Soil degradation</li>
    <li>Supply chain volatility</li>
    <li>Food safety concerns</li>
    <li>Rising operational costs</li>
</ul>

<p class="mt-6 text-slate-700 leading-8">
    At the same time, consumers are becoming more conscious about the quality, safety, and origin of the food they consume.
</p>

<p class="mt-5 text-slate-700 leading-8">
    This global shift is accelerating demand for advanced agricultural systems capable of delivering consistent production with greater operational control and sustainability.
</p>

<hr class="my-12">

<h2 class="text-3xl font-bold text-slate-900">Why Greenhouse Strawberry Production Is Gaining Global Momentum</h2>

<p class="mt-5 text-slate-700 leading-8">
    Modern greenhouse agriculture provides a highly controlled production environment designed to maximize efficiency, quality, and year-round output.
</p>

<p class="mt-5 text-slate-700 leading-8">
    Advanced greenhouse systems integrate:
</p>

<ul class="mt-5 space-y-3 text-slate-700 list-disc pl-6">
    <li>Hydroponic cultivation technologies</li>
    <li>Precision irrigation systems</li>
    <li>Climate optimization</li>
    <li>Integrated Pest Management (IPM)</li>
    <li>Biological crop protection</li>
    <li>Water recycling technologies</li>
    <li>Data-driven environmental monitoring</li>
</ul>

<p class="mt-6 text-slate-700 leading-8">
    These technologies allow greenhouse operators to significantly reduce resource waste while improving productivity and crop consistency.
</p>

<p class="mt-5 text-slate-700 leading-8">
    For premium strawberry production specifically, greenhouse systems provide:
</p>

<ul class="mt-5 space-y-3 text-slate-700 list-disc pl-6">
    <li>Higher product quality</li>
    <li>Longer production seasons</li>
    <li>Improved food safety standards</li>
    <li>Reduced environmental impact</li>
    <li>Better supply consistency for premium markets</li>
</ul>

<hr class="my-12">

<h2 class="text-3xl font-bold text-slate-900">A Strategic Opportunity for Investors</h2>

<p class="mt-5 text-slate-700 leading-8">
    Greenhouse agriculture is no longer viewed solely as farming.
</p>

<p class="mt-5 text-slate-700 leading-8">
    It is increasingly recognized as strategic infrastructure.
</p>

<p class="mt-5 text-slate-700 leading-8">
    Major investors worldwide are allocating capital into controlled-environment agriculture due to its alignment with long-term global priorities, including:
</p>

<ul class="mt-5 space-y-3 text-slate-700 list-disc pl-6">
    <li>Food security</li>
    <li>ESG investment strategies</li>
    <li>Sustainable water usage</li>
    <li>Technology-driven operations</li>
    <li>Import substitution</li>
    <li>Premium export opportunities</li>
</ul>

<p class="mt-6 text-slate-700 leading-8">
    In regions such as the Gulf and Middle East, high-tech greenhouse systems also offer a strategic solution for reducing dependence on imported fresh produce while improving local agricultural resilience.
</p>

<hr class="my-12">

<h2 class="text-3xl font-bold text-slate-900">Strong Demand Across Premium Markets</h2>

<p class="mt-5 text-slate-700 leading-8">
    Demand for premium greenhouse-grown strawberries continues to expand across multiple sectors, including:
</p>

<ul class="mt-5 space-y-3 text-slate-700 list-disc pl-6">
    <li>Luxury hospitality groups</li>
    <li>Premium retail chains</li>
    <li>Airline catering</li>
    <li>Export distributors</li>
    <li>Health-conscious consumers</li>
    <li>High-end food service industries</li>
</ul>

<p class="mt-6 text-slate-700 leading-8">
    Modern consumers are increasingly willing to pay premium prices for:
</p>

<ul class="mt-5 space-y-3 text-slate-700 list-disc pl-6">
    <li>Cleaner food production</li>
    <li>Traceability</li>
    <li>Sustainable farming practices</li>
    <li>Consistent premium quality</li>
</ul>

<p class="mt-6 text-slate-700 leading-8">
    This creates strong long-term market potential for scalable greenhouse investment projects.
</p>

<hr class="my-12">

<h2 class="text-3xl font-bold text-slate-900">Engineering the Future of Sustainable Agriculture</h2>

<p class="mt-5 text-slate-700 leading-8">
    At the intersection of engineering, innovation, and sustainability, controlled-environment agriculture is redefining the future of food production.
</p>

<p class="mt-5 text-slate-700 leading-8">
    By combining advanced greenhouse systems with intelligent environmental management, the next generation of agricultural projects can deliver:
</p>

<ul class="mt-5 space-y-3 text-slate-700 list-disc pl-6">
    <li>Higher efficiency</li>
    <li>Greater resource optimization</li>
    <li>Reduced operational risk</li>
    <li>Premium product positioning</li>
    <li>Sustainable long-term growth</li>
</ul>

<p class="mt-6 text-slate-700 leading-8">
    The future of agriculture is no longer dependent on unpredictable environmental conditions.
</p>

<p class="mt-5 text-xl font-semibold text-emerald-800 leading-8">
    The future of agriculture is controlled, scalable, and technology-driven.
</p>
HTML;

        Post::updateOrCreate(
            ['slug' => 'strawberry-greenhouse-investment'],
            [
                'title' => 'Investing in the Future of Agriculture',
                'subtitle' => 'High-Tech Greenhouse Strawberry Production',
                'category' => 'Investment Insight',
                'summary' => 'A Premium Opportunity. A Sustainable Future. High-tech greenhouse strawberry production as a premium and sustainable agricultural investment opportunity.',
                'image' => 'assets/strawberry-greenhouse.jpg',
                'author_name' => 'Engineer Memduh Ozsarac',
                'author_title' => 'Founder of MAFGREEN',
                'author_bio' => 'Agricultural Engineer | Greenhouse Systems Consultant | Sustainable Agriculture Advocate. Engineer Memduh Ozsarac specializes in advanced greenhouse systems, controlled-environment agriculture, and sustainable food production strategies designed for arid and high-temperature regions. Through MAFGREEN, his vision focuses on building next-generation greenhouse solutions that combine engineering excellence, operational efficiency, and sustainable agricultural innovation.',
                'content' => $blogHtml,
                'is_published' => true,
                'published_at' => now(),
            ]
        );
    }
}
