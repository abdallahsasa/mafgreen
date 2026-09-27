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

        <div class="mt-10 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($equipment as $item)
            @php
                $featureUrl = $item->feature_image_url;
                $galleryUrls = $item->gallery_urls;
                $allImages = array_values(array_unique(array_filter(array_merge(
                    $featureUrl ? [$featureUrl] : [],
                    $galleryUrls
                ))));
            @endphp
            <article class="group flex flex-col rounded-2xl border border-slate-200 bg-white overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <!-- Feature Image Container -->
                <div class="relative w-full h-52 bg-slate-900 overflow-hidden cursor-pointer"
                     @if(count($allImages) > 0)
                     onclick='openLightbox(@json($allImages), @json($item->title), 0)'
                     title="Click to view photo gallery"
                     @endif>
                    @if($featureUrl)
                        <img src="{{ $featureUrl }}"
                             alt="{{ $item->title }}"
                             loading="lazy"
                             class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-out" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-transparent to-black/20"></div>
                    @else
                        <div class="w-full h-full flex flex-col items-center justify-center bg-gradient-to-br from-emerald-950 to-slate-900 text-white/40">
                            <svg class="w-12 h-12 mb-2 text-emerald-400/40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-xs uppercase tracking-wider font-semibold text-emerald-300/60">MAFGREEN Equipment</span>
                        </div>
                    @endif

                    <!-- Code Badge -->
                    <div class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-emerald-600/95 text-white text-xs font-bold shadow backdrop-blur-sm tracking-wider">
                        {{ $item->code ?? sprintf('%02d', $loop->iteration) }}
                    </div>

                    <!-- Gallery Count Badge -->
                    @if(count($allImages) > 1)
                    <div class="absolute bottom-3 right-3 inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-black/65 hover:bg-black/85 text-white text-xs font-medium backdrop-blur-md transition-colors">
                        <svg class="w-3.5 h-3.5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span>{{ count($allImages) }} Photos</span>
                    </div>
                    @endif
                </div>

                <!-- Card Body -->
                <div class="p-6 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 group-hover:text-emerald-700 transition-colors">
                            {{ $item->title }}
                        </h3>
                        <p class="mt-2.5 text-sm text-slate-600 leading-relaxed">
                            {{ $item->description }}
                        </p>
                    </div>

                    <!-- Gallery Preview & Action -->
                    @if(count($allImages) > 0)
                    <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between gap-2">
                        <div class="flex items-center gap-1.5 overflow-hidden">
                            @foreach(array_slice($allImages, 0, 4) as $idx => $thumb)
                            <button type="button"
                                    onclick='openLightbox(@json($allImages), @json($item->title), {{ $idx }})'
                                    class="relative w-10 h-10 rounded-lg overflow-hidden border border-slate-200 hover:border-emerald-600 transition flex-shrink-0 group/thumb"
                                    title="View image {{ $idx + 1 }}">
                                <img src="{{ $thumb }}" alt="Thumbnail {{ $idx + 1 }}" class="w-full h-full object-cover group-hover/thumb:scale-110 transition duration-200" />
                                @if($idx === 3 && count($allImages) > 4)
                                    <div class="absolute inset-0 bg-black/60 flex items-center justify-center text-[10px] font-bold text-white">
                                        +{{ count($allImages) - 3 }}
                                    </div>
                                @endif
                            </button>
                            @endforeach
                        </div>

                        <button type="button"
                                onclick='openLightbox(@json($allImages), @json($item->title), 0)'
                                class="inline-flex items-center gap-1 text-xs font-semibold text-emerald-700 hover:text-emerald-800 transition">
                            <span>View Gallery</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                    @endif
                </div>
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

<!-- Interactive Lightbox Modal -->
<div id="equipmentLightbox"
     class="fixed inset-0 z-50 hidden items-center justify-center bg-slate-950/90 backdrop-blur-md p-4 transition-opacity duration-300"
     role="dialog"
     aria-modal="true"
     aria-label="Image gallery lightbox">
    <div class="relative w-full max-w-5xl max-h-[95vh] flex flex-col items-center">
        <!-- Header Bar -->
        <div class="w-full flex items-center justify-between pb-3 text-white">
            <div>
                <h4 id="lightboxTitle" class="text-base sm:text-lg font-semibold text-white"></h4>
                <p id="lightboxCounter" class="text-xs text-emerald-400 mt-0.5 font-medium"></p>
            </div>
            <button type="button"
                    onclick="closeLightbox()"
                    class="p-2 rounded-xl bg-white/10 hover:bg-white/20 text-white transition focus:outline-none"
                    aria-label="Close modal">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Main Image Area -->
        <div class="relative w-full flex items-center justify-center overflow-hidden rounded-2xl bg-black/60 min-h-[320px] max-h-[72vh]">
            <img id="lightboxImage" src="" alt="Gallery Preview" class="max-w-full max-h-[72vh] object-contain rounded-xl shadow-2xl transition-all duration-200" />

            <!-- Prev Button -->
            <button id="lightboxPrev"
                    type="button"
                    onclick="prevImage()"
                    class="absolute left-3 top-1/2 -translate-y-1/2 p-3 rounded-full bg-black/60 hover:bg-emerald-600 text-white transition focus:outline-none backdrop-blur-sm shadow-lg"
                    aria-label="Previous image">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            <!-- Next Button -->
            <button id="lightboxNext"
                    type="button"
                    onclick="nextImage()"
                    class="absolute right-3 top-1/2 -translate-y-1/2 p-3 rounded-full bg-black/60 hover:bg-emerald-600 text-white transition focus:outline-none backdrop-blur-sm shadow-lg"
                    aria-label="Next image">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>

        <!-- Thumbnails Strip -->
        <div id="lightboxThumbs" class="w-full flex items-center justify-center gap-2 mt-4 overflow-x-auto py-1 max-w-full">
        </div>
    </div>
</div>

<script>
    document.getElementById('y').textContent = new Date().getFullYear();

    let currentImages = [];
    let currentIndex = 0;
    let currentTitle = '';

    const lightbox = document.getElementById('equipmentLightbox');
    const lightboxImage = document.getElementById('lightboxImage');
    const lightboxTitle = document.getElementById('lightboxTitle');
    const lightboxCounter = document.getElementById('lightboxCounter');
    const lightboxThumbs = document.getElementById('lightboxThumbs');
    const lightboxPrev = document.getElementById('lightboxPrev');
    const lightboxNext = document.getElementById('lightboxNext');

    function openLightbox(images, title, startIndex = 0) {
        if (!images || images.length === 0) return;
        currentImages = images;
        currentTitle = title;
        currentIndex = startIndex >= 0 && startIndex < images.length ? startIndex : 0;

        lightboxTitle.textContent = currentTitle;
        lightbox.classList.remove('hidden');
        lightbox.classList.add('flex');
        document.body.classList.add('overflow-hidden');

        updateLightbox();
    }

    function closeLightbox() {
        lightbox.classList.add('hidden');
        lightbox.classList.remove('flex');
        document.body.classList.remove('overflow-hidden');
    }

    function updateLightbox() {
        if (!currentImages.length) return;
        lightboxImage.src = currentImages[currentIndex];
        lightboxCounter.textContent = `Photo ${currentIndex + 1} of ${currentImages.length}`;

        lightboxPrev.style.display = currentImages.length > 1 ? 'block' : 'none';
        lightboxNext.style.display = currentImages.length > 1 ? 'block' : 'none';

        // Render thumbs
        lightboxThumbs.innerHTML = '';
        if (currentImages.length > 1) {
            currentImages.forEach((src, idx) => {
                const thumbBtn = document.createElement('button');
                thumbBtn.type = 'button';
                thumbBtn.className = `w-12 h-12 rounded-lg overflow-hidden border-2 transition-all flex-shrink-0 ${
                    idx === currentIndex ? 'border-emerald-400 scale-105' : 'border-white/20 opacity-60 hover:opacity-100'
                }`;
                thumbBtn.innerHTML = `<img src="${src}" alt="thumb" class="w-full h-full object-cover">`;
                thumbBtn.onclick = () => {
                    currentIndex = idx;
                    updateLightbox();
                };
                lightboxThumbs.appendChild(thumbBtn);
            });
        }
    }

    function prevImage() {
        if (currentImages.length <= 1) return;
        currentIndex = (currentIndex - 1 + currentImages.length) % currentImages.length;
        updateLightbox();
    }

    function nextImage() {
        if (currentImages.length <= 1) return;
        currentIndex = (currentIndex + 1) % currentImages.length;
        updateLightbox();
    }

    // Backdrop click close
    lightbox.addEventListener('click', function(e) {
        if (e.target === lightbox) {
            closeLightbox();
        }
    });

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (lightbox.classList.contains('hidden')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowLeft') prevImage();
        if (e.key === 'ArrowRight') nextImage();
    });
</script>
</body>
</html>
