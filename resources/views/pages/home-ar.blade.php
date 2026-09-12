<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>MAFGREEN | هندسة وإنشاء البيوت المحمية</title>
    <meta name="description" content="تقدم MAFGREEN خدمات هندسة البيوت المحمية والتنفيذ المتكامل في الإمارات العربية المتحدة، بخبرة تتجاوز 25 عامًا في الزراعة داخل البيئات المحمية."/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon.png') }}">

    <!-- Open Graph / Social Preview -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="MAFGREEN | هندسة وإنشاء البيوت المحمية" />
    <meta property="og:description" content="حلول احترافية لهندسة البيوت المحمية والتنفيذ المتكامل في الإمارات. أكثر من 25 عامًا من الخبرة في الزراعة داخل البيئات المحمية." />
    <meta property="og:url" content="https://www.mafgreen.com/ar/" />
    <meta property="og:image" content="{{ asset('assets/hero.jpg') }}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:site_name" content="MAFGREEN" />

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="MAFGREEN | هندسة وإنشاء البيوت المحمية" />
    <meta name="twitter:description" content="حلول احترافية لهندسة البيوت المحمية والتنفيذ المتكامل في الإمارات. أكثر من 25 عامًا من الخبرة." />
    <meta name="twitter:image" content="{{ asset('assets/hero.jpg') }}" />
</head>

<body class="bg-white text-slate-900 text-right">
<!-- Top Bar -->
<div class="bg-slate-950 text-white">
    <div class="max-w-6xl mx-auto px-4 py-2 flex flex-wrap items-center justify-between gap-2 text-sm">
        <div class="opacity-90">هندسة البيوت المحمية والتنفيذ المتكامل • الإمارات</div>
        <div class="opacity-90">البريد الإلكتروني: <a class="underline underline-offset-2" href="mailto:info@mafgreen.com">info@mafgreen.com</a></div>
    </div>
</div>

<!-- Header -->
<header class="border-b bg-white/80 backdrop-blur sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
        <div class="flex items-center gap-2">
            <a href="{{ url('/ar') }}">
                <img src="{{ asset('assets/mafgreen-logo.png') }}" alt="MAFGREEN" class="h-14 w-auto" />
            </a>
        </div>

        <nav class="hidden md:flex items-center gap-6 text-sm text-slate-700">
            <a class="hover:text-emerald-800" href="#services">الخدمات</a>
            <a class="hover:text-emerald-800" href="#solutions">الحلول</a>
            <a class="hover:text-emerald-800" href="{{ url('/equipment') }}">المعدات</a>
            <a class="hover:text-emerald-800" href="#why">لماذا نحن</a>
            <a class="hover:text-emerald-800" href="#contact">تواصل معنا</a>
        </nav>

        <select id="langSwitcher" class="border rounded-lg px-3 py-2 text-sm" onchange="location = this.value;">
            <option value="/">English</option>
            <option value="/ar" selected>العربية</option>
        </select>

        <a href="#contact"
           class="hidden md:inline-flex px-4 py-2 rounded-xl bg-emerald-700 text-white font-semibold hover:bg-emerald-800">
            اطلب عرضًا
        </a>
    </div>
</header>

<!-- Hero with Background Image -->
<section class="relative overflow-hidden">
    <!-- Background Image -->
    <img
        src="{{ asset('assets/hero.jpg') }}"
        alt="هندسة البيوت المحمية من MAFGREEN"
        class="absolute inset-0 w-full h-full object-cover"
    />
    <!-- Overlay -->
    <div class="absolute inset-0 bg-slate-950/55"></div>

    <div class="relative max-w-6xl mx-auto px-4 py-16 grid lg:grid-cols-2 gap-10 items-center">
        <div class="text-white">
            <p class="text-emerald-200 font-semibold">حلول MAFGREEN للبيوت المحمية</p>
            <h1 class="mt-3 text-4xl lg:text-5xl font-bold leading-tight">
                هندسة بيوت محمية بمعايير احترافية وتنفيذ متكامل.
            </h1>
            <p class="mt-5 text-lg text-white/85">
                تقوم MAFGREEN بتصميم وبناء أنظمة البيوت المحمية المصممة لتحقيق إنتاج موثوق على مدار العام.
                وبخبرة ميدانية تزيد عن <span class="font-semibold text-white">25 عامًا</span>، نقدم
                هياكل متينة، وأنظمة مناخية متكاملة، وجاهزية تشغيلية كاملة.
            </p>

            <div class="mt-7 flex flex-wrap gap-3">
                <a href="#contact" class="px-5 py-3 rounded-xl bg-emerald-600 text-white font-semibold hover:bg-emerald-700">
                    اطلب عرضًا
                </a>
                <a href="#services" class="px-5 py-3 rounded-xl border border-white/30 text-white font-semibold hover:border-white/60">
                    عرض الخدمات
                </a>
            </div>

            <div class="mt-8 grid sm:grid-cols-3 gap-4 text-sm">
                <div class="p-4 rounded-xl bg-white/10 border border-white/15 backdrop-blur">
                    <div class="font-semibold">25+ سنة</div>
                    <div class="text-white/80">خبرة في المجال</div>
                </div>
                <div class="p-4 rounded-xl bg-white/10 border border-white/15 backdrop-blur">
                    <div class="font-semibold">تنفيذ متكامل</div>
                    <div class="text-white/80">من التصميم حتى التسليم</div>
                </div>
                <div class="p-4 rounded-xl bg-white/10 border border-white/15 backdrop-blur">
                    <div class="font-semibold">ملائم لبيئة الإمارات</div>
                    <div class="text-white/80">مصمم لمناخ الخليج</div>
                </div>
            </div>
        </div>

        <!-- Corporate Visual Block -->
        <div class="rounded-3xl border border-white/15 bg-white/10 backdrop-blur p-8 text-white">
            <div class="text-xs uppercase tracking-wide text-white/70">الزراعة داخل البيئات المحمية</div>
            <div class="mt-3 text-2xl font-bold">الهندسة • الإنشاء • التكامل</div>
            <p class="mt-2 text-white/80">
                مصممة لتحقيق الكفاءة التشغيلية، ومستويات إنتاج مستقرة، واستدامة طويلة الأمد.
            </p>

            <div class="mt-6 grid grid-cols-2 gap-4 text-sm">
                <div class="p-4 rounded-xl bg-white/10 border border-white/15">
                    <div class="font-semibold">الأنظمة الإنشائية</div>
                    <div class="text-white/75">فينلو / القوس القوطي / البولي إيثيلين</div>
                </div>
                <div class="p-4 rounded-xl bg-white/10 border border-white/15">
                    <div class="font-semibold">أنظمة التحكم بالمناخ</div>
                    <div class="text-white/75">التبريد، التهوية، أنظمة التحكم</div>
                </div>
                <div class="p-4 rounded-xl bg-white/10 border border-white/15">
                    <div class="font-semibold">أنظمة المياه</div>
                    <div class="text-white/75">الترشيح، التناضح العكسي، التسميد مع الري</div>
                </div>
                <div class="p-4 rounded-xl bg-white/10 border border-white/15">
                    <div class="font-semibold">الأتمتة</div>
                    <div class="text-white/75">المستشعرات، المراقبة، تحسين الأداء</div>
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
                <img src="{{ asset('assets/2.jpg') }}" class="w-full h-40 object-cover" alt="هياكل البيوت المحمية" />
            </div>
            <div class="rounded-2xl overflow-hidden border bg-slate-50">
                <img src="{{ asset('assets/3.jpg') }}" class="w-full h-40 object-cover" alt="الأنظمة المناخية" />
            </div>
            <div class="rounded-2xl overflow-hidden border bg-slate-50">
                <img src="{{ asset('assets/4.jpg') }}" class="w-full h-40 object-cover" alt="الري والتسميد" />
            </div>
            <div class="rounded-2xl overflow-hidden border bg-slate-50">
                <img src="{{ asset('assets/5.jpg') }}" class="w-full h-40 object-cover" alt="الأتمتة والمراقبة" />
            </div>
        </div>
    </div>
</section>

<!-- Overview -->
<section class="border-y bg-white">
    <div class="max-w-6xl mx-auto px-4 py-14 grid lg:grid-cols-3 gap-8 items-start">
        <div class="lg:col-span-1">
            <h2 class="text-2xl font-bold">نبذة عن الشركة</h2>
            <p class="mt-3 text-slate-600">
                ندعم المزارع التجارية والمستثمرين والمشغلين بمشاريع بيوت محمية مصممة للعمل بكفاءة في ظروف التشغيل الفعلية.
            </p>
        </div>

        <div class="lg:col-span-2 grid sm:grid-cols-2 gap-5">
            <div class="p-6 rounded-2xl border bg-slate-50">
                <div class="font-semibold">نطاق العمل</div>
                <p class="mt-2 text-sm text-slate-600">التصميم، التوريد، الإنشاء، تكامل الأنظمة، والتشغيل الأولي.</p>
            </div>
            <div class="p-6 rounded-2xl border bg-slate-50">
                <div class="font-semibold">منهجية العمل</div>
                <p class="mt-2 text-sm text-slate-600">تنفيذ قائم على الأسس الهندسية مع التركيز على الموثوقية والقيمة طويلة الأمد.</p>
            </div>
            <div class="p-6 rounded-2xl border bg-slate-50">
                <div class="font-semibold">القدرات</div>
                <p class="mt-2 text-sm text-slate-600">من البيوت المحمية الاقتصادية إلى الأنظمة المتقدمة ذات التحكم المناخي الكامل.</p>
            </div>
            <div class="p-6 rounded-2xl border bg-slate-50">
                <div class="font-semibold">التشغيل</div>
                <p class="mt-2 text-sm text-slate-600">مصممة لتحقيق أداء متوقع وسهولة في الصيانة وقابلية للتوسع مستقبلاً.</p>
            </div>
        </div>

        <!-- Overview Image (wide) -->
        <div class="lg:col-span-3 mt-8">
            <div class="rounded-3xl overflow-hidden border bg-slate-50">
                <img src="{{ asset('assets/6.jpg') }}" alt="عمليات البيوت المحمية" class="w-full h-64 md:h-80 object-cover" />
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section id="services" class="bg-slate-50">
    <div class="max-w-6xl mx-auto px-4 py-14">
        <h2 class="text-3xl font-bold">الخدمات الأساسية</h2>
        <p class="mt-3 text-slate-600 max-w-2xl">
            خدمات متكاملة لمشاريع البيوت المحمية تُقدَّم بانضباط هندسي وتوثيق احترافي.
        </p>

        <div class="mt-10 grid md:grid-cols-2 lg:grid-cols-3 gap-5">
            <div class="rounded-2xl bg-white border overflow-hidden">
                <img src="{{ asset('assets/7.jpg') }}" class="w-full h-40 object-cover" alt="المفهوم ودراسات الجدوى" />
                <div class="p-6">
                    <div class="font-semibold">المفهوم ودراسة الجدوى</div>
                    <p class="mt-2 text-slate-600 text-sm">تخطيط المساحات، أهداف الإنتاج، واختيار التقنيات المناسبة.</p>
                </div>
            </div>
            <div class="rounded-2xl bg-white border overflow-hidden">
                <img src="{{ asset('assets/8.jpg') }}" class="w-full h-40 object-cover" alt="هياكل البيوت المحمية" />
                <div class="p-6">
                    <div class="font-semibold">هياكل البيوت المحمية</div>
                    <p class="mt-2 text-slate-600 text-sm">هياكل فينلو الزجاجية، القوس القوطي، البيوت البلاستيكية، والأغطية والأساسات.</p>
                </div>
            </div>
            <div class="rounded-2xl bg-white border overflow-hidden">
                <img src="{{ asset('assets/9.jpg') }}" class="w-full h-40 object-cover" alt="المناخ والتهوية" />
                <div class="p-6">
                    <div class="font-semibold">المناخ والتهوية</div>
                    <p class="mt-2 text-slate-600 text-sm">التبريد، التدفئة، التهوية، الستائر، ومنطق التحكم المتكامل.</p>
                </div>
            </div>
            <div class="p-6 rounded-2xl bg-white border">
                <div class="font-semibold">الري والتسميد</div>
                <p class="mt-2 text-slate-600 text-sm">أنظمة الجرعات، الترشيح، محطات التناضح العكسي، وشبكات التوزيع.</p>
            </div>
            <div class="p-6 rounded-2xl bg-white border">
                <div class="font-semibold">الأتمتة والمراقبة</div>
                <p class="mt-2 text-slate-600 text-sm">المستشعرات، لوحات التحكم، لوحات المراقبة، وتحسين العمليات.</p>
            </div>
            <div class="p-6 rounded-2xl bg-white border">
                <div class="font-semibold">التشغيل والتسليم</div>
                <p class="mt-2 text-slate-600 text-sm">الاختبارات، التوثيق الفني، تدريب المشغلين، وفحوصات الأداء.</p>
            </div>
        </div>
    </div>
</section>

<!-- Greenhouse Production -->
<section class="bg-white border-y">
    <div class="max-w-6xl mx-auto px-4 py-14">
        <h2 class="text-3xl font-bold">إنتاج البيوت المحمية</h2>
        <p class="mt-3 text-slate-600 max-w-2xl">
            نظرة مرئية على أنظمة البيوت المحمية عبر أنواع مختلفة من المحاصيل،
            بما في ذلك إنتاج الطماطم والفراولة والزهور.
        </p>

        <div class="mt-10 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Tomato -->
            <div>
                <h3 class="font-semibold mb-3">بيوت محمية للطماطم</h3>
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
                <h3 class="font-semibold mb-3">بيوت محمية للفراولة</h3>
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
                <h3 class="font-semibold mb-3">بيوت محمية للزهور</h3>
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
        <h2 class="text-3xl font-bold">الحلول</h2>
        <p class="mt-3 text-slate-600 max-w-2xl">
            أنظمة بيوت محمية مصممة وفقًا لطبيعة أعمالكم ومتطلبات الإنتاج الخاصة بكم.
        </p>

        <div class="mt-10 grid lg:grid-cols-3 gap-5 text-sm">
            <div class="rounded-2xl border overflow-hidden bg-white">
                <img src="{{ asset('assets/10.jpg') }}" class="w-full h-40 object-cover" alt="الإنتاج التجاري" />
                <div class="p-6">
                    <div class="font-semibold">الإنتاج التجاري</div>
                    <p class="mt-2 text-slate-600">مزارع إنتاجية عالية الكفاءة مصممة لتحقيق الاستقرار وخفض تكلفة الكيلوغرام.</p>
                </div>
            </div>
            <div class="rounded-2xl border overflow-hidden bg-white">
                <img src="{{ asset('assets/11.jpg') }}" class="w-full h-40 object-cover" alt="أنظمة متطورة محكمة المناخ" />
                <div class="p-6">
                    <div class="font-semibold">أنظمة متطورة محكمة المناخ</div>
                    <p class="mt-2 text-slate-600">تصاميم تعتمد على الأتمتة لتحقيق جودة فائقة وإنتاج مستمر ومضمون.</p>
                </div>
            </div>
            <div class="rounded-2xl border overflow-hidden bg-white">
                <img src="{{ asset('assets/12.jpg') }}" class="w-full h-40 object-cover" alt="المشاتل والإكثار" />
                <div class="p-6">
                    <div class="font-semibold">المشاتل والإكثار</div>
                    <p class="mt-2 text-slate-600">بيئات مخصصة لتحسين صحة الشتلات وضمان تجانس وجودة المخرجات.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Summary -->
<section id="projects" class="bg-white border-y">
    <div class="max-w-6xl mx-auto px-4 py-14">
        <h2 class="text-3xl font-bold">سجل المشاريع</h2>
        <p class="mt-3 text-slate-600 max-w-2xl">
            تم تنفيذ أنظمة MAFGREEN للبيوت المحمية في عدة دول،
            لدعم إنتاج الخضروات التجاري، والمرافق البحثية، ومشاريع
            الزراعة المحمية واسعة النطاق.
        </p>

        <div class="mt-10 grid md:grid-cols-3 gap-6">
            <div class="p-6 rounded-2xl border bg-slate-50 text-center">
                <div class="text-3xl font-bold text-emerald-700">20+</div>
                <p class="text-sm text-slate-600 mt-1">مشروع بيوت محمية</p>
            </div>
            <div class="p-6 rounded-2xl border bg-slate-50 text-center">
                <div class="text-3xl font-bold text-emerald-700">900,000+ م²</div>
                <p class="text-sm text-slate-600 mt-1">مساحة منشأة</p>
            </div>
            <div class="p-6 rounded-2xl border bg-slate-50 text-center">
                <div class="text-3xl font-bold text-emerald-700">6 دول</div>
                <p class="text-sm text-slate-600 mt-1">مشاريع دولية</p>
            </div>
        </div>
    </div>
</section>

<!-- Selected Projects Cards -->
<section class="bg-slate-50">
    <div class="max-w-6xl mx-auto px-4 py-14">
        <h2 class="text-3xl font-bold">مشاريع مختارة</h2>

        <div class="mt-10 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="p-6 rounded-2xl bg-white border">
                <h3 class="font-semibold text-lg">مجمع إنتاج الطماطم</h3>
                <p class="text-sm text-slate-600 mt-1">بين، أذربيجان</p>
                <ul class="mt-3 text-sm text-slate-600 space-y-1">
                    <li><strong>المساحة:</strong> 220,000 م²</li>
                    <li><strong>النظام:</strong> زراعة بدون تربة</li>
                    <li><strong>المحصول:</strong> طماطم</li>
                </ul>
            </div>

            <div class="p-6 rounded-2xl bg-white border">
                <h3 class="font-semibold text-lg">منشأة بيوت محمية للطماطم</h3>
                <p class="text-sm text-slate-600 mt-1">بين، أذربيجان</p>
                <ul class="mt-3 text-sm text-slate-600 space-y-1">
                    <li><strong>المساحة:</strong> 180,000 م²</li>
                    <li><strong>النظام:</strong> زراعة بدون تربة</li>
                    <li><strong>المحصول:</strong> طماطم</li>
                </ul>
            </div>

            <div class="p-6 rounded-2xl bg-white border">
                <h3 class="font-semibold text-lg">بيت محمي تجاري للطماطم</h3>
                <p class="text-sm text-slate-600 mt-1">دنيزلي، تركيا</p>
                <ul class="mt-3 text-sm text-slate-600 space-y-1">
                    <li><strong>المساحة:</strong> 60,000 م²</li>
                    <li><strong>النظام:</strong> زراعة بدون تربة</li>
                    <li><strong>المحصول:</strong> طماطم</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Project References Table -->
<section class="bg-white">
    <div class="max-w-6xl mx-auto px-4 py-14">
        <h2 class="text-3xl font-bold">قائمة المشاريع المرجعية</h2>
        <p class="text-sm text-slate-600 mt-4">
            تم تنفيذ أنظمة MAFGREEN للبيوت المحمية في
            <strong>تركيا، وأذربيجان، وروسيا، وأوزبكستان، وتركمانستان</strong>،
            لتشمل إنتاج الخضروات التجاري، والمرافق البحثية، ومشاريع الزراعة المتقدمة بدون تربة.
        </p>
        <div class="mt-8 overflow-x-auto">
            <table class="w-full border text-sm">
                <thead class="bg-slate-100">
                <tr>
                    <th class="p-3 text-right">الدولة</th>
                    <th class="p-3 text-right">المدينة</th>
                    <th class="p-3 text-right">المساحة</th>
                    <th class="p-3 text-right">النظام</th>
                    <th class="p-3 text-right">المحصول</th>
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
                    <td colspan="5" class="p-4 text-center text-slate-500">لا توجد مشاريع مرجعية مسجلة حالياً.</td>
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
                <h2 class="text-3xl font-bold">لماذا MAFGREEN</h2>
                <p class="mt-3 text-slate-600 max-w-2xl">
                    مُصممة للمؤسسات والجهات التي تتطلب أداءً موثوقًا، وتوثيقًا هندسيًا، ومسؤولية كاملة في التنفيذ.
                </p>
            </div>

            <div class="w-full md:w-80">
                <div class="rounded-3xl overflow-hidden border bg-white">
                    <img src="{{ asset('assets/13.jpg') }}" alt="هندسة البيوت المحمية" class="w-full h-40 object-cover" />
                </div>
            </div>
        </div>

        <div class="mt-10 grid md:grid-cols-2 gap-5">
            <div class="p-7 rounded-3xl bg-white border">
                <div class="font-semibold">تنفيذ قائم على الرؤية الهندسية</div>
                <p class="mt-2 text-slate-600 text-sm">
                    نولي الأولوية لأداء الأنظمة، وطول عمرها التشغيلي، وجاهزيتها للعمل، بعيدًا عن الوعود التسويقية.
                </p>
            </div>
            <div class="p-7 rounded-3xl bg-white border">
                <div class="font-semibold">توثيق احترافي متكامل</div>
                <p class="mt-2 text-slate-600 text-sm">
                    مواصفات واضحة، وجداول كميات تفصيلية، ووثائق استلام وتشغيل تتماشى مع المعايير المؤسسية.
                </p>
            </div>
            <div class="p-7 rounded-3xl bg-white border">
                <div class="font-semibold">منهجية الأنظمة المتكاملة</div>
                <p class="mt-2 text-slate-600 text-sm">
                    الهيكل، والمناخ، والري، والأتمتة؛ مصممة لتعمل معًا بتناغم تام دون أي تعارض تشغيلي.
                </p>
            </div>
            <div class="p-7 rounded-3xl bg-white border">
                <div class="font-semibold">فهم دقيق للبيئة التشغيلية في الإمارات</div>
                <p class="mt-2 text-slate-600 text-sm">
                    مصممة لمقاومة الحرارة العالية والغبار وظروف التشغيل الصعبة مع سهولة تامة في الصيانة.
                </p>
            </div>
        </div>

        <div class="mt-14 text-center">
            <p class="text-sm text-slate-500 uppercase tracking-wider">
                بدعم وشراكة
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
                تعمل MAFGREEN بخبرة ودعم من
                <strong>TMG Greenhouse</strong>، مستفيدة من عقود من الخبرة
                في تكنولوجيا البيوت المحمية، والأنظمة الزراعية،
                والزراعة المحمية الحديثة.
            </p>
        </div>
    </div>
</section>

<!-- Blog / Insights Section -->
<section id="blog" class="bg-slate-50 border-y">
    <div class="max-w-6xl mx-auto px-4 py-14">
        <h2 class="text-3xl font-bold">الرؤى والتحليلات</h2>
        <p class="mt-3 text-slate-600 max-w-2xl">
            مقالات ورؤى متخصصة حول هندسة البيوت المحمية، والزراعة المستدامة، والإنتاج في البيئات المحمية.
        </p>

        <div class="mt-10 rounded-3xl overflow-hidden border bg-white grid md:grid-cols-2">
            <img src="{{ asset($latestPost->image ?? 'assets/strawberry-greenhouse.jpg') }}"
                 alt="إنتاج الفراولة في البيوت المحمية عالية التقنية"
                 class="w-full h-72 object-cover">

            <div class="p-8">
                <p class="text-sm font-semibold text-emerald-700">رؤى استثمارية</p>
                <h3 class="mt-3 text-2xl font-bold">
                    الاستثمار في مستقبل الزراعة
                </h3>
                <p class="mt-4 text-slate-600">
                    إنتاج الفراولة في البيوت المحمية عالية التقنية كفرصة استثمارية متميزة ومستدامة للمستثمرين.
                </p>
                <a href="{{ url('/blog/' . ($latestPost->slug ?? 'strawberry-greenhouse-investment')) }}"
                   class="mt-6 inline-flex px-5 py-3 rounded-xl bg-emerald-700 text-white font-semibold hover:bg-emerald-800">
                    قراءة المقال
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
                <p class="text-emerald-700 font-semibold">معدات البيوت المحمية</p>
                <h2 class="mt-2 text-3xl font-bold">حلول ومعدات متكاملة</h2>
                <p class="mt-3 text-slate-600">
                    استكشف 31 فئة من معدات البيوت المحمية تشمل الهياكل، والري، والتحكم بالمناخ، والزراعة المائية، والأتمتة، وأنظمة الزراعة، ومستلزمات الصيانة.
                </p>
            </div>
            <a href="{{ url('/equipment') }}" class="inline-flex px-5 py-3 rounded-xl bg-emerald-700 text-white font-semibold hover:bg-emerald-800">
                عرض دليل المعدات
            </a>
        </div>

        <div class="mt-10 grid md:grid-cols-3 gap-5">
            <div class="rounded-2xl overflow-hidden border bg-white">
                <img src="{{ asset('assets/catalog-pages/page-1.png') }}" alt="دليل معدات البيوت المحمية" class="w-full h-56 object-cover object-top">
                <div class="p-5"><div class="font-semibold">الهياكل والتغطية</div><p class="mt-2 text-sm text-slate-600">الهياكل، الأغطية البلاستيكية، البولي كربونات، شبكات التظليل، وشبكات الحشرات.</p></div>
            </div>
            <div class="rounded-2xl overflow-hidden border bg-white">
                <img src="{{ asset('assets/catalog-pages/page-3.png') }}" alt="معدات الري والزراعة" class="w-full h-56 object-cover object-top">
                <div class="p-5"><div class="font-semibold">أنظمة الري والنمو</div><p class="mt-2 text-sm text-slate-600">أنظمة المياه، الزراعة المائية، القنوات، الأوساط الزراعية، وأحواض التشتيل.</p></div>
            </div>
            <div class="rounded-2xl overflow-hidden border bg-white">
                <img src="{{ asset('assets/catalog-pages/page-4.png') }}" alt="التحكم بالمناخ والأتمتة" class="w-full h-56 object-cover object-top">
                <div class="p-5"><div class="font-semibold">المناخ والأتمتة</div><p class="mt-2 text-sm text-slate-600">أجهزة التحكم، الحساسات، التدفئة، الإضاءة، وأنظمة دعم النباتات.</p></div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="bg-white border-t">
    <div class="max-w-6xl mx-auto px-4 py-14 grid lg:grid-cols-2 gap-10">
        <div>
            <h2 class="text-3xl font-bold">تواصل معنا</h2>
            <p class="mt-3 text-slate-600">
                للاستفسارات، أو طلب عروض الأسعار، أو مناقشة فرص الشراكة، يرجى التواصل معنا عبر البريد الإلكتروني أو الهاتف.
            </p>

            <div class="mt-6 space-y-3 text-sm">
                <div class="p-4 rounded-2xl border">
                    <div class="text-slate-600">البريد الإلكتروني</div>
                    <a class="font-semibold text-emerald-800 hover:underline" href="mailto:info@mafgreen.com">
                        info@mafgreen.com
                    </a>
                </div>
                <div class="p-4 rounded-2xl border">
                    <div class="text-slate-600">الهاتف</div>
                    <a class="font-semibold text-emerald-800 hover:underline" href="tel:+971527999065">
                        +971 52 799 9065
                    </a>
                </div>
                <div class="p-4 rounded-2xl border">
                    <div class="text-slate-600">الموقع</div>
                    <div class="font-semibold">الإمارات العربية المتحدة</div>
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
                <ul class="list-disc pr-5 space-y-1">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST" class="p-7 rounded-3xl border bg-slate-50">
                @csrf
                <input type="hidden" name="locale" value="ar">
                <div class="grid sm:grid-cols-2 gap-4">
                    <div>
                        <label class="text-sm text-slate-600">الاسم الكامل *</label>
                        <input name="full_name" required value="{{ old('full_name') }}" class="mt-1 w-full rounded-xl border px-4 py-3 bg-white" placeholder="اسمك الكامل"/>
                    </div>
                    <div>
                        <label class="text-sm text-slate-600">الشركة</label>
                        <input name="company" value="{{ old('company') }}" class="mt-1 w-full rounded-xl border px-4 py-3 bg-white" placeholder="اسم الشركة"/>
                    </div>
                    <div>
                        <label class="text-sm text-slate-600">البريد الإلكتروني *</label>
                        <input name="email" type="email" required value="{{ old('email') }}" class="mt-1 w-full rounded-xl border px-4 py-3 bg-white" placeholder="name@company.com"/>
                    </div>
                    <div>
                        <label class="text-sm text-slate-600">الهاتف</label>
                        <input name="phone" value="{{ old('phone') }}" class="mt-1 w-full rounded-xl border px-4 py-3 bg-white" placeholder="+971 ..."/>
                    </div>
                </div>

                <div class="mt-4">
                    <label class="text-sm text-slate-600">الاستفسار *</label>
                    <textarea name="message" required class="mt-1 w-full rounded-xl border px-4 py-3 bg-white h-28"
                              placeholder="يرجى وصف متطلبات مشروعكم والجدول الزمني بشكل مختصر.">{{ old('message') }}</textarea>
                </div>

                <button type="submit" class="mt-5 w-full px-5 py-3 rounded-xl bg-emerald-700 text-white font-semibold hover:bg-emerald-800 transition">
                    إرسال الاستفسار
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-slate-950 text-white">
    <div class="max-w-6xl mx-auto px-4 py-8 text-sm flex flex-col sm:flex-row justify-between gap-2">
        <div>© <span id="y"></span> MAFGREEN. جميع الحقوق محفوظة.</div>
        <div class="opacity-80">هندسة البيوت المحمية • التنفيذ المتكامل • الإمارات</div>
    </div>
</footer>

<script>
    document.getElementById('y').textContent = new Date().getFullYear();
</script>
</body>
</html>
