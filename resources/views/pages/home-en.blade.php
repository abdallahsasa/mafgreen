<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>MAFGREEN | Greenhouse Engineering & Construction</title>
    <meta name="description" content="MAFGREEN delivers corporate-grade greenhouse engineering and turnkey construction across the UAE. Over 25 years of experience in controlled-environment agriculture."/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon.png') }}">

    <!-- Open Graph / Social Preview -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="MAFGREEN | Greenhouse Engineering & Construction" />
    <meta property="og:description" content="Corporate-grade greenhouse engineering and turnkey delivery across the UAE. 25+ years of experience in controlled-environment agriculture." />
    <meta property="og:url" content="https://www.mafgreen.com/" />
    <meta property="og:image" content="{{ asset('assets/hero.jpg') }}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:site_name" content="MAFGREEN" />

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="MAFGREEN | Greenhouse Engineering & Construction" />
    <meta name="twitter:description" content="Corporate-grade greenhouse engineering and turnkey delivery across the UAE. 25+ years of experience." />
    <meta name="twitter:image" content="{{ asset('assets/hero.jpg') }}" />
</head>

<body class="bg-white text-slate-900">
<!-- Top Bar -->
<div class="bg-slate-950 text-white">
    <div class="max-w-6xl mx-auto px-4 py-2 flex flex-wrap items-center justify-between gap-2 text-sm">
        <div class="opacity-90">Greenhouse Engineering & Turnkey Construction • UAE</div>
        <div class="opacity-90">Email: <a class="underline underline-offset-2" href="mailto:info@mafgreen.com">info@mafgreen.com</a></div>
    </div>
</div>

<!-- Header -->
<header class="border-b bg-white/80 backdrop-blur sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
        <div class="flex items-center gap-2">
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/mafgreen-logo.png') }}" alt="MAFGREEN" class="h-14 w-auto" />
            </a>
        </div>

        <nav class="hidden md:flex items-center gap-6 text-sm text-slate-700">
            <a class="hover:text-emerald-800" href="#services">Services</a>
            <a class="hover:text-emerald-800" href="#solutions">Solutions</a>
            <a class="hover:text-emerald-800" href="{{ url('/equipment') }}">Equipment</a>
            <a class="hover:text-emerald-800" href="#why">Why Us</a>
            <a class="hover:text-emerald-800" href="#contact">Contact</a>
        </nav>
        <select id="langSwitcher" class="border rounded-lg px-3 py-2 text-sm" onchange="location = this.value;">
            <option value="/" selected>English</option>
            <option value="/ar">العربية</option>
        </select>
        <a href="#contact"
           class="hidden md:inline-flex px-4 py-2 rounded-xl bg-emerald-700 text-white font-semibold hover:bg-emerald-800">
            Request a Proposal
        </a>
    </div>
</header>

<!-- Hero with Background Image -->
<section class="relative overflow-hidden">
    <!-- Background Image -->
    <img
        src="{{ asset('assets/hero.jpg') }}"
        alt="MAFGREEN greenhouse engineering"
        class="absolute inset-0 w-full h-full object-cover"
    />
    <!-- Overlay -->
    <div class="absolute inset-0 bg-slate-950/55"></div>

    <div class="relative max-w-6xl mx-auto px-4 py-16 grid lg:grid-cols-2 gap-10 items-center">
        <div class="text-white">
            <p class="text-emerald-200 font-semibold">MAFGREEN Greenhouse Solutions</p>
            <h1 class="mt-3 text-4xl lg:text-5xl font-bold leading-tight">
                Corporate-Grade Greenhouse Engineering & Turnkey Delivery.
            </h1>
            <p class="mt-5 text-lg text-white/85">
                MAFGREEN designs and builds greenhouse systems engineered for reliable year-round production.
                With over <span class="font-semibold text-white">25 years</span> of field experience, we deliver
                durable structures, integrated climate systems, and operational readiness.
            </p>

            <div class="mt-7 flex flex-wrap gap-3">
                <a href="#contact" class="px-5 py-3 rounded-xl bg-emerald-600 text-white font-semibold hover:bg-emerald-700">
                    Request a Proposal
                </a>
                <a href="#services" class="px-5 py-3 rounded-xl border border-white/30 text-white font-semibold hover:border-white/60">
                    View Services
                </a>
            </div>

            <div class="mt-8 grid sm:grid-cols-3 gap-4 text-sm">
                <div class="p-4 rounded-xl bg-white/10 border border-white/15 backdrop-blur">
                    <div class="font-semibold">25+ Years</div>
                    <div class="text-white/80">Industry Experience</div>
                </div>
                <div class="p-4 rounded-xl bg-white/10 border border-white/15 backdrop-blur">
                    <div class="font-semibold">Turnkey Delivery</div>
                    <div class="text-white/80">From design to handover</div>
                </div>
                <div class="p-4 rounded-xl bg-white/10 border border-white/15 backdrop-blur">
                    <div class="font-semibold">UAE Focus</div>
                    <div class="text-white/80">Built for Gulf climate</div>
                </div>
            </div>
        </div>

        <!-- Corporate Visual Block -->
        <div class="rounded-3xl border border-white/15 bg-white/10 backdrop-blur p-8 text-white">
            <div class="text-xs uppercase tracking-wide text-white/70">Controlled Environment Agriculture</div>
            <div class="mt-3 text-2xl font-bold">Engineering • Construction • Integration</div>
            <p class="mt-2 text-white/80">
                Designed for operational efficiency, predictable yields, and long-term durability.
            </p>

            <div class="mt-6 grid grid-cols-2 gap-4 text-sm">
                <div class="p-4 rounded-xl bg-white/10 border border-white/15">
                    <div class="font-semibold">Structural Systems</div>
                    <div class="text-white/75">Venlo / Gothic / Poly</div>
                </div>
                <div class="p-4 rounded-xl bg-white/10 border border-white/15">
                    <div class="font-semibold">Climate Systems</div>
                    <div class="text-white/75">Cooling, ventilation, control</div>
                </div>
                <div class="p-4 rounded-xl bg-white/10 border border-white/15">
                    <div class="font-semibold">Water Systems</div>
                    <div class="text-white/75">Filtration, RO, fertigation</div>
                </div>
                <div class="p-4 rounded-xl bg-white/10 border border-white/15">
                    <div class="font-semibold">Automation</div>
                    <div class="text-white/75">Sensors, monitoring, optimization</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Capabilities Gallery Strip -->
<section class="bg-white border-b">
    <div class="max-w-6xl mx-auto px-4 py-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="rounded-2xl overflow-hidden border bg-slate-50">
                <img src="{{ asset('assets/2.jpg') }}" class="w-full h-40 object-cover" alt="Greenhouse structure" />
            </div>
            <div class="rounded-2xl overflow-hidden border bg-slate-50">
                <img src="{{ asset('assets/3.jpg') }}" class="w-full h-40 object-cover" alt="Climate systems" />
            </div>
            <div class="rounded-2xl overflow-hidden border bg-slate-50">
                <img src="{{ asset('assets/4.jpg') }}" class="w-full h-40 object-cover" alt="Irrigation and fertigation" />
            </div>
            <div class="rounded-2xl overflow-hidden border bg-slate-50">
                <img src="{{ asset('assets/5.jpg') }}" class="w-full h-40 object-cover" alt="Automation and monitoring" />
            </div>
        </div>
    </div>
</section>

<!-- Overview -->
<section class="border-y bg-white">
    <div class="max-w-6xl mx-auto px-4 py-14 grid lg:grid-cols-3 gap-8 items-start">
        <div class="lg:col-span-1">
            <h2 class="text-2xl font-bold">Company Overview</h2>
            <p class="mt-3 text-slate-600">
                We support commercial growers, investors, and operators with greenhouse projects that are designed
                to perform under real operating conditions.
            </p>
        </div>

        <div class="lg:col-span-2 grid sm:grid-cols-2 gap-5">
            <div class="p-6 rounded-2xl border bg-slate-50">
                <div class="font-semibold">Scope</div>
                <p class="mt-2 text-sm text-slate-600">Design, supply, construction, system integration, and commissioning.</p>
            </div>
            <div class="p-6 rounded-2xl border bg-slate-50">
                <div class="font-semibold">Approach</div>
                <p class="mt-2 text-sm text-slate-600">Engineering-led delivery with a focus on reliability and lifecycle value.</p>
            </div>
            <div class="p-6 rounded-2xl border bg-slate-50">
                <div class="font-semibold">Capability</div>
                <p class="mt-2 text-sm text-slate-600">From cost-efficient greenhouses to advanced climate-controlled systems.</p>
            </div>
            <div class="p-6 rounded-2xl border bg-slate-50">
                <div class="font-semibold">Operations</div>
                <p class="mt-2 text-sm text-slate-600">Built for predictable performance, maintenance access, and scalability.</p>
            </div>
        </div>

        <!-- Overview Image (wide) -->
        <div class="lg:col-span-3 mt-8">
            <div class="rounded-3xl overflow-hidden border bg-slate-50">
                <img src="{{ asset('assets/6.jpg') }}" alt="Greenhouse operations" class="w-full h-64 md:h-80 object-cover" />
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section id="services" class="bg-slate-50">
    <div class="max-w-6xl mx-auto px-4 py-14">
        <h2 class="text-3xl font-bold">Core Services</h2>
        <p class="mt-3 text-slate-600 max-w-2xl">
            End-to-end services for greenhouse projects, delivered with engineering discipline and professional documentation.
        </p>

        <div class="mt-10 grid md:grid-cols-2 lg:grid-cols-3 gap-5">
            <div class="rounded-2xl bg-white border overflow-hidden">
                <img src="{{ asset('assets/7.jpg') }}" class="w-full h-40 object-cover" alt="Concept and feasibility" />
                <div class="p-6">
                    <div class="font-semibold">Concept & Feasibility</div>
                    <p class="mt-2 text-slate-600 text-sm">Area planning, production targets, technology selection.</p>
                </div>
            </div>
            <div class="rounded-2xl bg-white border overflow-hidden">
                <img src="{{ asset('assets/8.jpg') }}" class="w-full h-40 object-cover" alt="Greenhouse structures" />
                <div class="p-6">
                    <div class="font-semibold">Greenhouse Structures</div>
                    <p class="mt-2 text-slate-600 text-sm">Venlo glass, gothic, poly structures, cladding and foundations.</p>
                </div>
            </div>
            <div class="rounded-2xl bg-white border overflow-hidden">
                <img src="{{ asset('assets/9.jpg') }}" class="w-full h-40 object-cover" alt="Climate and ventilation" />
                <div class="p-6">
                    <div class="font-semibold">Climate & Ventilation</div>
                    <p class="mt-2 text-slate-600 text-sm">Cooling, heating, ventilation, screens, integrated control logic.</p>
                </div>
            </div>
            <div class="p-6 rounded-2xl bg-white border">
                <div class="font-semibold">Irrigation & Fertigation</div>
                <p class="mt-2 text-slate-600 text-sm">Dosing systems, filtration, RO solutions, distribution networks.</p>
            </div>
            <div class="p-6 rounded-2xl bg-white border">
                <div class="font-semibold">Automation & Monitoring</div>
                <p class="mt-2 text-slate-600 text-sm">Sensors, automation panels, monitoring dashboards, optimization.</p>
            </div>
            <div class="p-6 rounded-2xl bg-white border">
                <div class="font-semibold">Commissioning & Handover</div>
                <p class="mt-2 text-slate-600 text-sm">Testing, documentation, operator training, performance checks.</p>
            </div>
        </div>
    </div>
</section>

<!-- Greenhouse Production -->
<section class="bg-white border-y">
    <div class="max-w-6xl mx-auto px-4 py-14">
        <h2 class="text-3xl font-bold">Greenhouse Production</h2>
        <p class="mt-3 text-slate-600 max-w-2xl">
            A visual overview of greenhouse systems across different cultivation types,
            including tomato, strawberry, and flower production.
        </p>

        <div class="mt-10 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Tomato -->
            <div>
                <h3 class="font-semibold mb-3">Tomato Greenhouse</h3>
                <div class="rounded-2xl overflow-hidden border">
                    <div class="relative w-full" style="padding-top:56.25%;">
                        <iframe 
                            class="absolute inset-0 w-full h-full"
                            src="https://www.youtube.com/embed/t0PWI-Pix-c"
                            title="Tomato Greenhouse"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>

            <!-- Strawberry -->
            <div>
                <h3 class="font-semibold mb-3">Strawberry Greenhouse</h3>
                <div class="rounded-2xl overflow-hidden border">
                    <div class="relative w-full" style="padding-top:56.25%;">
                        <iframe 
                            class="absolute inset-0 w-full h-full"
                            src="https://www.youtube.com/embed/H32JUGxU5I8"
                            title="Strawberry Greenhouse"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>

            <!-- Flowers -->
            <div>
                <h3 class="font-semibold mb-3">Flower Greenhouse</h3>
                <div class="rounded-2xl overflow-hidden border">
                    <div class="relative w-full" style="padding-top:56.25%;">
                        <iframe 
                            class="absolute inset-0 w-full h-full"
                            src="https://www.youtube.com/embed/aRu2Vo8H8CQ"
                            title="Flower Greenhouse"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Solutions / Sectors -->
<section id="solutions" class="bg-white border-y">
    <div class="max-w-6xl mx-auto px-4 py-14">
        <h2 class="text-3xl font-bold">Solutions</h2>
        <p class="mt-3 text-slate-600 max-w-2xl">
            Greenhouse systems tailored to your operational model and production requirements.
        </p>

        <div class="mt-10 grid lg:grid-cols-3 gap-5 text-sm">
            <div class="rounded-2xl border overflow-hidden bg-white">
                <img src="{{ asset('assets/10.jpg') }}" class="w-full h-40 object-cover" alt="Commercial production" />
                <div class="p-6">
                    <div class="font-semibold">Commercial Production</div>
                    <p class="mt-2 text-slate-600">High-throughput farms optimized for stability and cost per kg.</p>
                </div>
            </div>

            <div class="rounded-2xl border overflow-hidden bg-white">
                <img src="{{ asset('assets/11.jpg') }}" class="w-full h-40 object-cover" alt="Hi-tech controlled systems" />
                <div class="p-6">
                    <div class="font-semibold">Hi-Tech Controlled Systems</div>
                    <p class="mt-2 text-slate-600">Automation-forward designs for premium quality and predictable yields.</p>
                </div>
            </div>

            <div class="rounded-2xl border overflow-hidden bg-white">
                <img src="{{ asset('assets/12.jpg') }}" class="w-full h-40 object-cover" alt="Nursery and propagation" />
                <div class="p-6">
                    <div class="font-semibold">Nursery & Propagation</div>
                    <p class="mt-2 text-slate-600">Controlled zones designed for plant health and uniform output.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Summary -->
<section id="projects" class="bg-white border-y">
    <div class="max-w-6xl mx-auto px-4 py-14">
        <h2 class="text-3xl font-bold">Project References</h2>
        <p class="mt-3 text-slate-600 max-w-2xl">
            MAFGREEN greenhouse systems have been implemented across multiple countries,
            supporting commercial vegetable production, research facilities, and
            large-scale controlled-environment agriculture.
        </p>

        <div class="mt-10 grid md:grid-cols-3 gap-6">
            <div class="p-6 rounded-2xl border bg-slate-50 text-center">
                <div class="text-3xl font-bold text-emerald-700">20+</div>
                <p class="text-sm text-slate-600 mt-1">Greenhouse Projects</p>
            </div>
            <div class="p-6 rounded-2xl border bg-slate-50 text-center">
                <div class="text-3xl font-bold text-emerald-700">900,000+ m²</div>
                <p class="text-sm text-slate-600 mt-1">Installed Greenhouse Area</p>
            </div>
            <div class="p-6 rounded-2xl border bg-slate-50 text-center">
                <div class="text-3xl font-bold text-emerald-700">6 Countries</div>
                <p class="text-sm text-slate-600 mt-1">International Projects</p>
            </div>
        </div>
    </div>
</section>

<!-- Selected Projects Cards -->
<section class="bg-slate-50">
    <div class="max-w-6xl mx-auto px-4 py-14">
        <h2 class="text-3xl font-bold">Selected Greenhouse Projects</h2>

        <div class="mt-10 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="p-6 rounded-2xl bg-white border">
                <h3 class="font-semibold text-lg">Tomato Production Complex</h3>
                <p class="text-sm text-slate-600 mt-1">Bine, Azerbaijan</p>
                <ul class="mt-3 text-sm text-slate-600 space-y-1">
                    <li><strong>Area:</strong> 220,000 m²</li>
                    <li><strong>System:</strong> Soilless Agriculture</li>
                    <li><strong>Cultivation:</strong> Tomato</li>
                </ul>
            </div>

            <div class="p-6 rounded-2xl bg-white border">
                <h3 class="font-semibold text-lg">Tomato Greenhouse Facility</h3>
                <p class="text-sm text-slate-600 mt-1">Bine, Azerbaijan</p>
                <ul class="mt-3 text-sm text-slate-600 space-y-1">
                    <li><strong>Area:</strong> 180,000 m²</li>
                    <li><strong>System:</strong> Soilless Agriculture</li>
                    <li><strong>Cultivation:</strong> Tomato</li>
                </ul>
            </div>

            <div class="p-6 rounded-2xl bg-white border">
                <h3 class="font-semibold text-lg">Commercial Tomato Greenhouse</h3>
                <p class="text-sm text-slate-600 mt-1">Denizli, Turkey</p>
                <ul class="mt-3 text-sm text-slate-600 space-y-1">
                    <li><strong>Area:</strong> 60,000 m²</li>
                    <li><strong>System:</strong> Soilless Agriculture</li>
                    <li><strong>Cultivation:</strong> Tomato</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Project References Table -->
<section class="bg-white">
    <div class="max-w-6xl mx-auto px-4 py-14">
        <h2 class="text-3xl font-bold">Project Reference List</h2>
        <p class="text-sm text-slate-600 mt-4">
            MAFGREEN greenhouse systems have been implemented across
            <strong>Turkey, Azerbaijan, Russia, Uzbekistan, and Turkmenistan</strong>,
            covering commercial vegetable production, research facilities, and advanced soilless agriculture projects.
        </p>
        <div class="mt-8 overflow-x-auto">
            <table class="w-full border text-sm">
                <thead class="bg-slate-100">
                <tr>
                    <th class="p-3 text-left">Country</th>
                    <th class="p-3 text-left">City</th>
                    <th class="p-3 text-left">Area</th>
                    <th class="p-3 text-left">System</th>
                    <th class="p-3 text-left">Cultivation</th>
                </tr>
                </thead>
                <tbody class="divide-y">
                @forelse($projects as $project)
                <tr>
                    <td class="p-3">{{ $project->country }}</td>
                    <td class="p-3">{{ $project->city }}</td>
                    <td class="p-3">{{ $project->area }}</td>
                    <td class="p-3">{{ $project->system }}</td>
                    <td class="p-3">{{ $project->cultivation }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="p-4 text-center text-slate-500">No project references recorded.</td>
                </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Why Section -->
<section id="why" class="bg-slate-50">
    <div class="max-w-6xl mx-auto px-4 py-14">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
            <div>
                <h2 class="text-3xl font-bold">Why MAFGREEN</h2>
                <p class="mt-3 text-slate-600 max-w-2xl">
                    Built for professional stakeholders who expect performance, documentation, and accountability.
                </p>
            </div>

            <!-- Section Image -->
            <div class="w-full md:w-80">
                <div class="rounded-3xl overflow-hidden border bg-white">
                    <img src="{{ asset('assets/13.jpg') }}" alt="Greenhouse engineering" class="w-full h-40 object-cover" />
                </div>
            </div>
        </div>

        <!-- Why Cards -->
        <div class="mt-10 grid md:grid-cols-2 gap-5">
            <div class="p-7 rounded-3xl bg-white border">
                <div class="font-semibold">Engineering-Led Delivery</div>
                <p class="mt-2 text-slate-600 text-sm">
                    We prioritize system performance, lifecycle durability, and operational readiness, not marketing slides.
                </p>
            </div>

            <div class="p-7 rounded-3xl bg-white border">
                <div class="font-semibold">Professional Documentation</div>
                <p class="mt-2 text-slate-600 text-sm">
                    Clear specifications, bill of materials, and commissioning documentation aligned with corporate expectations.
                </p>
            </div>

            <div class="p-7 rounded-3xl bg-white border">
                <div class="font-semibold">Integrated Systems Approach</div>
                <p class="mt-2 text-slate-600 text-sm">
                    Structure, climate, irrigation, automation. Designed to work together, not fight each other.
                </p>
            </div>

            <div class="p-7 rounded-3xl bg-white border">
                <div class="font-semibold">UAE Operating Reality</div>
                <p class="mt-2 text-slate-600 text-sm">
                    Built for heat, dust, and demanding operating conditions with maintainability in mind.
                </p>
            </div>
        </div>

        <div class="mt-14 text-center">
            <p class="text-sm text-slate-500 uppercase tracking-wider">
                Powered by
            </p>

            <div class="mt-6 flex justify-center items-center">
                <div class="p-6 rounded-2xl bg-white border">
                    <img
                        src="{{ asset('assets/tmg-logo.png') }}"
                        alt="TMG Greenhouse"
                        class="h-16 object-contain">
                </div>
            </div>

            <p class="mt-4 text-sm text-slate-600 max-w-xl mx-auto">
                MAFGREEN operates under the expertise and support of
                <strong>TMG Greenhouse</strong>, bringing decades of experience
                in greenhouse technology, agricultural systems, and
                controlled environment farming.
            </p>
        </div>
    </div>
</section>

<!-- Blog / Insights Section -->
<section id="blog" class="bg-slate-50 border-y">
    <div class="max-w-6xl mx-auto px-4 py-14">
        <h2 class="text-3xl font-bold">Insights</h2>
        <p class="mt-3 text-slate-600 max-w-2xl">
            Articles and perspectives on greenhouse engineering, sustainable agriculture, and controlled-environment farming.
        </p>

        <div class="mt-10 rounded-3xl overflow-hidden border bg-white grid md:grid-cols-2">
            <img src="{{ asset($latestPost->image ?? 'assets/strawberry-greenhouse.jpg') }}"
                 alt="High-tech greenhouse strawberry production"
                 class="w-full h-72 object-cover">

            <div class="p-8">
                <p class="text-sm font-semibold text-emerald-700">{{ $latestPost->category ?? 'Investment Insight' }}</p>
                <h3 class="mt-3 text-2xl font-bold">
                    {{ $latestPost->title ?? 'Investing in the Future of Agriculture' }}
                </h3>
                <p class="mt-4 text-slate-600">
                    {{ $latestPost->summary ?? 'High-tech greenhouse strawberry production as a premium and sustainable opportunity for investors.' }}
                </p>
                <a href="{{ url('/blog/' . ($latestPost->slug ?? 'strawberry-greenhouse-investment')) }}"
                   class="mt-6 inline-flex px-5 py-3 rounded-xl bg-emerald-700 text-white font-semibold hover:bg-emerald-800">
                    Read Article
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Equipment Section -->
<section id="equipment" class="bg-slate-50 border-y">
    <div class="max-w-6xl mx-auto px-4 py-14">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
            <div class="max-w-2xl">
                <p class="text-emerald-700 font-semibold">Greenhouse Equipment</p>
                <h2 class="mt-2 text-3xl font-bold">Complete Equipment Solutions</h2>
                <p class="mt-3 text-slate-600">
                    Explore 31 equipment categories covering greenhouse structures, irrigation,
                    climate control, hydroponics, automation, growing systems, and maintenance supplies.
                </p>
            </div>
            <a href="{{ url('/equipment') }}" class="inline-flex px-5 py-3 rounded-xl bg-emerald-700 text-white font-semibold hover:bg-emerald-800">
                View Equipment Catalog
            </a>
        </div>

        <div class="mt-10 grid md:grid-cols-3 gap-5">
            <div class="rounded-2xl overflow-hidden border bg-white">
                <img src="{{ asset('assets/catalog-pages/page-1.png') }}" alt="Greenhouse equipment catalog" class="w-full h-56 object-cover object-top">
                <div class="p-5"><div class="font-semibold">Structures & Covering</div><p class="mt-2 text-sm text-slate-600">Structures, films, polycarbonate, shade nets, insect nets, and cooling pads.</p></div>
            </div>
            <div class="rounded-2xl overflow-hidden border bg-white">
                <img src="{{ asset('assets/catalog-pages/page-3.png') }}" alt="Irrigation and growing equipment" class="w-full h-56 object-cover object-top">
                <div class="p-5"><div class="font-semibold">Irrigation & Growing Systems</div><p class="mt-2 text-sm text-slate-600">Water systems, hydroponics, trays, gutters, media, and seedling solutions.</p></div>
            </div>
            <div class="rounded-2xl overflow-hidden border bg-white">
                <img src="{{ asset('assets/catalog-pages/page-4.png') }}" alt="Climate control and automation" class="w-full h-56 object-cover object-top">
                <div class="p-5"><div class="font-semibold">Climate & Automation</div><p class="mt-2 text-sm text-slate-600">Controllers, sensors, heating, lighting, and plant-support systems.</p></div>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="bg-white border-t">
    <div class="max-w-6xl mx-auto px-4 py-14 grid lg:grid-cols-2 gap-10">
        <div>
            <h2 class="text-3xl font-bold">Contact</h2>
            <p class="mt-3 text-slate-600">
                For inquiries, proposals, or partnership discussions, contact us through email or phone.
            </p>

            <div class="mt-6 space-y-3 text-sm">
                <div class="p-4 rounded-2xl border">
                    <div class="text-slate-600">Email</div>
                    <a class="font-semibold text-emerald-800 hover:underline" href="mailto:info@mafgreen.com">
                        info@mafgreen.com
                    </a>
                </div>
                <div class="p-4 rounded-2xl border">
                    <div class="text-slate-600">Phone</div>
                    <a class="font-semibold text-emerald-800 hover:underline" href="tel:+971527999065">
                        +971 52 799 9065
                    </a>
                </div>
                <div class="p-4 rounded-2xl border">
                    <div class="text-slate-600">Location</div>
                    <div class="font-semibold">United Arab Emirates</div>
                </div>
            </div>
        </div>

        <div>
            @if(session('contact_success'))
            <div class="mb-6 p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm font-medium">
                {{ session('contact_success') }}
            </div>
            @endif

            @if($errors->any())
            <div class="mb-6 p-4 rounded-2xl bg-red-50 border border-red-200 text-red-700 text-sm">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST" class="p-7 rounded-3xl border bg-slate-50">
                @csrf
                <input type="hidden" name="locale" value="en">
                <div class="grid sm:grid-cols-2 gap-4">
                    <div>
                        <label class="text-sm text-slate-600">Full Name *</label>
                        <input name="full_name" required value="{{ old('full_name') }}" class="mt-1 w-full rounded-xl border px-4 py-3 bg-white" placeholder="Your name"/>
                    </div>
                    <div>
                        <label class="text-sm text-slate-600">Company</label>
                        <input name="company" value="{{ old('company') }}" class="mt-1 w-full rounded-xl border px-4 py-3 bg-white" placeholder="Company name"/>
                    </div>
                    <div>
                        <label class="text-sm text-slate-600">Email *</label>
                        <input name="email" type="email" required value="{{ old('email') }}" class="mt-1 w-full rounded-xl border px-4 py-3 bg-white" placeholder="name@company.com"/>
                    </div>
                    <div>
                        <label class="text-sm text-slate-600">Phone</label>
                        <input name="phone" value="{{ old('phone') }}" class="mt-1 w-full rounded-xl border px-4 py-3 bg-white" placeholder="+971 ..."/>
                    </div>
                </div>

                <div class="mt-4">
                    <label class="text-sm text-slate-600">Inquiry *</label>
                    <textarea name="message" required class="mt-1 w-full rounded-xl border px-4 py-3 bg-white h-28"
                              placeholder="Briefly describe your project requirements and timeline.">{{ old('message') }}</textarea>
                </div>

                <button type="submit" class="mt-5 w-full px-5 py-3 rounded-xl bg-emerald-700 text-white font-semibold hover:bg-emerald-800 transition">
                    Submit Inquiry
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-slate-950 text-white">
    <div class="max-w-6xl mx-auto px-4 py-8 text-sm flex flex-col sm:flex-row justify-between gap-2">
        <div>© <span id="y"></span> MAFGREEN. All rights reserved.</div>
        <div class="opacity-80">Greenhouse Engineering • Turnkey Construction • UAE</div>
    </div>
</footer>

<script>
    document.getElementById('y').textContent = new Date().getFullYear();
</script>
</body>
</html>
