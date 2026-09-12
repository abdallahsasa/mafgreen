<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>{{ $post->title }} | MAFGREEN</title>
    <meta name="description" content="{{ $post->summary ?? $post->subtitle ?? 'MAFGREEN Insights' }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon.png') }}">
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
        <a href="{{ url('/') }}" class="flex items-center gap-2">
            <img src="{{ asset('assets/mafgreen-logo.png') }}" alt="MAFGREEN" class="h-14 w-auto" />
        </a>

        <nav class="hidden md:flex items-center gap-6 text-sm text-slate-700">
            <a class="hover:text-emerald-800" href="{{ url('/#services') }}">Services</a>
            <a class="hover:text-emerald-800" href="{{ url('/#solutions') }}">Solutions</a>
            <a class="hover:text-emerald-800" href="{{ url('/equipment') }}">Equipment</a>
            <a class="hover:text-emerald-800" href="{{ url('/#projects') }}">Projects</a>
            <a class="hover:text-emerald-800" href="{{ url('/#contact') }}">Contact</a>
        </nav>

        <a href="{{ url('/#contact') }}"
           class="hidden md:inline-flex px-4 py-2 rounded-xl bg-emerald-700 text-white font-semibold hover:bg-emerald-800">
            Request a Proposal
        </a>
    </div>
</header>

<!-- Hero -->
<div class="max-w-6xl mx-auto px-4 pt-10">
    <img
        src="{{ asset($post->image ?? 'assets/strawberry-greenhouse.jpg') }}"
        alt="{{ $post->title }}"
        class="w-full rounded-3xl border object-cover max-h-[480px]"
    >

    <div class="max-w-4xl mx-auto py-12">
        <p class="text-emerald-700 font-semibold">
            {{ $post->category ?? 'MAFGREEN Insights' }}
        </p>

        <h1 class="mt-4 text-5xl font-bold leading-tight">
            {{ $post->title }}
        </h1>

        @if($post->subtitle)
        <p class="mt-4 text-xl text-slate-600">
            {{ $post->subtitle }}
        </p>
        @endif

        @if($post->summary)
        <p class="mt-4 text-slate-500">
            {{ $post->summary }}
        </p>
        @endif
    </div>
</div>

<!-- Blog Content -->
<main class="max-w-4xl mx-auto px-4 py-16">

    <article class="prose prose-slate max-w-none">
        {!! $post->content !!}
    </article>

    <!-- Author -->
    @if($post->author_name)
    <section class="mt-16 p-8 rounded-3xl border bg-slate-50">
        <p class="text-sm uppercase tracking-wider text-slate-500">About the Author</p>

        <h3 class="mt-3 text-2xl font-bold text-slate-900">
            {{ $post->author_name }}
        </h3>

        @if($post->author_title)
        <p class="mt-2 text-emerald-800 font-semibold">
            {{ $post->author_title }}
        </p>
        @endif

        @if($post->author_bio)
        <p class="mt-5 text-slate-700 leading-8 whitespace-pre-line">
            {{ $post->author_bio }}
        </p>
        @endif
    </section>
    @endif

    <!-- CTA -->
    <section class="mt-16 rounded-3xl bg-emerald-800 text-white p-8 text-center">
        <h2 class="text-3xl font-bold">Planning a High-Tech Greenhouse Project?</h2>
        <p class="mt-4 text-white/85 max-w-2xl mx-auto">
            MAFGREEN provides greenhouse engineering, construction, and integrated system solutions for investors, growers, and agricultural operators.
        </p>
        <a href="{{ url('/#contact') }}"
           class="mt-6 inline-flex px-6 py-3 rounded-xl bg-white text-emerald-800 font-semibold hover:bg-slate-100">
            Request a Proposal
        </a>
    </section>

</main>

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
