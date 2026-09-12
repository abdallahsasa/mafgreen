<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Greenhouse Equipment Catalog | MAFGREEN</title>
    <meta name="description" content="Explore 31 greenhouse equipment categories covering structures, irrigation, climate control, hydroponics, automation, and maintenance supplies." />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon.png') }}">
</head>
<body class="bg-white text-slate-900">

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
            <a class="hover:text-emerald-800" href="{{ url('/#services') }}">Services</a>
            <a class="hover:text-emerald-800" href="{{ url('/#solutions') }}">Solutions</a>
            <a class="font-semibold text-emerald-800" href="{{ url('/equipment') }}">Equipment</a>
            <a class="hover:text-emerald-800" href="{{ url('/#why') }}">Why Us</a>
            <a class="hover:text-emerald-800" href="{{ url('/#contact') }}">Contact</a>
        </nav>
        <select id="langSwitcher" class="border rounded-lg px-3 py-2 text-sm" onchange="location = this.value;">
            <option value="/">English</option>
            <option value="/ar">العربية</option>
        </select>
        <a href="{{ url('/#contact') }}"
           class="hidden md:inline-flex px-4 py-2 rounded-xl bg-emerald-700 text-white font-semibold hover:bg-emerald-800">
            Request a Proposal
        </a>
    </div>
</header>

<section class="relative overflow-hidden bg-slate-950">
    <img src="{{ asset('assets/catalog-pages/page-1.png') }}" alt="Greenhouse equipment catalog" class="absolute inset-0 w-full h-full object-cover opacity-25" />
    <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/90 to-slate-950/60"></div>
    <div class="relative max-w-6xl mx-auto px-4 py-20 lg:py-28">
        <div class="max-w-3xl text-white">
            <p class="text-emerald-300 font-semibold">MAFGREEN Equipment Solutions</p>
            <h1 class="mt-4 text-4xl lg:text-6xl font-bold leading-tight">Greenhouse Equipment Catalog</h1>
            <p class="mt-5 text-lg text-white/80 leading-8">
                A professional overview of {{ $equipment->count() }} greenhouse equipment categories covering structures, climate systems,
                irrigation, hydroponics, automation, growing accessories, and maintenance supplies.
            </p>
            <div class="mt-8 flex flex-wrap gap-3">
                <a href="#equipment" class="px-5 py-3 rounded-xl bg-emerald-600 text-white font-semibold hover:bg-emerald-700">Explore Equipment</a>
                <a href="{{ asset('assets/greenhouse-equipment-catalog.pdf') }}" download class="px-5 py-3 rounded-xl border border-white/30 text-white font-semibold hover:border-white/60">Download Catalog (PDF)</a>
            </div>
        </div>
    </div>
</section>

<section class="bg-white border-b">
    <div class="max-w-6xl mx-auto px-4 py-12 grid md:grid-cols-3 gap-5">
        <div class="p-6 rounded-2xl border bg-slate-50">
            <div class="text-3xl font-bold text-emerald-700">{{ $equipment->count() }}</div>
            <p class="mt-1 text-sm text-slate-600">Equipment Categories</p>
        </div>
    
        <div class="p-6 rounded-2xl border bg-slate-50">
            <div class="text-3xl font-bold text-emerald-700">End-to-End</div>
            <p class="mt-1 text-sm text-slate-600">From structure to maintenance</p>
        </div>

        <div class="p-6 rounded-2xl border bg-slate-50">
            <div class="text-3xl font-bold text-emerald-700">Direct Supply</div>
            <p class="mt-1 text-sm text-slate-600">Complete turnkey equipment sourcing</p>
        </div>
    </div>
</section>

<section id="equipment" class="bg-slate-50">
    <div class="max-w-6xl mx-auto px-4 py-16">
        <div class="max-w-3xl">
            <h2 class="text-3xl font-bold">Equipment Categories</h2>
            <p class="mt-3 text-slate-600 leading-7">Browse the main systems and components used in modern greenhouse projects.</p>
        </div>

        <div class="mt-10 grid md:grid-cols-2 lg:grid-cols-3 gap-5">
            @forelse($equipment as $item)
            <article class="p-6 rounded-2xl border bg-white hover:shadow-md transition-shadow">
                <div class="text-sm font-bold text-emerald-700">{{ $item->code ?? sprintf('%02d', $loop->iteration) }}</div>
                <h3 class="mt-2 text-lg font-semibold">{{ $item->title }}</h3>
                <p class="mt-3 text-sm text-slate-600 leading-6">{{ $item->description }}</p>
            </article>
            @empty
            <p class="text-slate-500">No equipment categories available.</p>
            @endforelse
        </div>
    </div>
</section>

<section class="bg-slate-50">
    <div class="max-w-4xl mx-auto px-4 py-16 text-center">
        <h2 class="text-3xl font-bold">Need Specifications or a Custom Equipment Package?</h2>
        <p class="mt-4 text-slate-600 leading-7">Contact MAFGREEN for detailed specifications, project-specific equipment selection, pricing, and custom greenhouse system integration.</p>
        <a href="{{ url('/#contact') }}" class="mt-7 inline-flex px-6 py-3 rounded-xl bg-emerald-700 text-white font-semibold hover:bg-emerald-800">Contact MAFGREEN</a>
    </div>
</section>

<footer class="bg-slate-950 text-white">
    <div class="max-w-6xl mx-auto px-4 py-8 text-sm flex flex-col sm:flex-row justify-between gap-2">
        <div>© <span id="y"></span> MAFGREEN. All rights reserved.</div>
        <div class="opacity-80">Greenhouse Engineering • Equipment • Turnkey Construction</div>
    </div>
</footer>

<script>
    document.getElementById('y').textContent = new Date().getFullYear();
</script>
</body>
</html>
