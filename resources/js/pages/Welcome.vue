<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { onMounted, onUnmounted, ref } from 'vue';
import { updateTheme, type Appearance } from '@/composables/useAppearance';

const isDark = ref(false);
const isScrolled = ref(false);
const isMenuOpen = ref(false);

const setAppearance = (value: Appearance) => {
    isDark.value = value === 'dark';
    updateTheme(value);
    document.cookie = `appearance=${value};path=/;max-age=${
        365 * 24 * 60 * 60
    };SameSite=Lax`;
};

const toggleAppearance = () => {
    setAppearance(isDark.value ? 'light' : 'dark');
};

const handleScroll = () => {
    isScrolled.value = window.scrollY > 24;
};

onMounted(() => {
    isDark.value = document.documentElement.classList.contains('dark');
    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});

const heroImage =
    'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=1600&q=80';

const aboutImage =
    'https://images.unsplash.com/photo-1531123897727-8f129e1688ce?auto=format&fit=crop&w=1200&q=80';

const editorial = [
    {
        src: 'https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?auto=format&fit=crop&w=1000&q=80',
        title: 'Vogue Hommes',
        location: 'Paris, FR',
        year: '2025',
        span: 'md:col-span-5 md:row-span-2',
    },
    {
        src: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=900&q=80',
        title: 'GQ Style',
        location: 'New York, US',
        year: '2025',
        span: 'md:col-span-3',
    },
    {
        src: 'https://images.unsplash.com/photo-1488161628813-04466f872be2?auto=format&fit=crop&w=900&q=80',
        title: 'Numéro Berlin',
        location: 'Berlin, DE',
        year: '2024',
        span: 'md:col-span-4',
    },
    {
        src: 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=900&q=80',
        title: 'L’Officiel',
        location: 'Milan, IT',
        year: '2024',
        span: 'md:col-span-4',
    },
    {
        src: 'https://images.unsplash.com/photo-1463453091185-61582044d556?auto=format&fit=crop&w=900&q=80',
        title: 'Fucking Young!',
        location: 'Madrid, ES',
        year: '2024',
        span: 'md:col-span-3',
    },
    {
        src: 'https://images.unsplash.com/photo-1583195763986-0eca78c19a93?auto=format&fit=crop&w=900&q=80',
        title: 'Document Journal',
        location: 'London, UK',
        year: '2023',
        span: 'md:col-span-5',
    },
];

const brands = [
    'PRADA',
    'BURBERRY',
    'TOM FORD',
    'GUCCI',
    'DIOR HOMME',
    'CALVIN KLEIN',
    'BOTTEGA VENETA',
    'SAINT LAURENT',
    'HERMÈS',
    'LOEWE',
    'JIL SANDER',
    'ACNE STUDIOS',
];

const stats = [
    { label: 'Height', value: '6\u20322\u2033 / 188 cm' },
    { label: 'Chest', value: '40\u2033 / 102 cm' },
    { label: 'Waist', value: '32\u2033 / 81 cm' },
    { label: 'Suit', value: '40 R' },
    { label: 'Shoe', value: 'US 11 / EU 44' },
    { label: 'Hair', value: 'Dark Brown' },
    { label: 'Eyes', value: 'Hazel' },
    { label: 'Based', value: 'Paris · NYC' },
];

const press = [
    {
        quote: 'A face that defines the new editorial silhouette — quiet, exact, magnetic.',
        source: 'Vogue Hommes',
    },
    {
        quote: 'Vale moves through a frame the way couture moves through a room.',
        source: 'Document Journal',
    },
    {
        quote: 'One of the most arresting faces of the season.',
        source: 'Numéro Berlin',
    },
];

const timeline = [
    {
        year: '2018',
        title: 'Scouted on a fishing boat in Marseille',
        body: 'A casting director on holiday introduced me to my first agent. I signed with Atelier two weeks later.',
    },
    {
        year: '2019',
        title: 'First runway — Saint Laurent SS20',
        body: 'Walked exclusive in Paris. Anthony Vaccarello opened the show with me. I still keep the call sheet.',
    },
    {
        year: '2021',
        title: 'First cover — L’Officiel Hommes',
        body: 'Shot in a quiet studio in the 11th arrondissement. The crew bought me lunch after. It felt like home.',
    },
    {
        year: '2023',
        title: 'Tom Ford global campaign',
        body: 'A six-month run across print and outdoor in twelve cities. The first time I saw my own face on a billboard.',
    },
    {
        year: '2025',
        title: 'Vogue Hommes — solo cover',
        body: 'Photographed by Lila Moreau in the Camargue. Horses, salt flats, no make-up. My favourite shoot to date.',
    },
];

const services = [
    {
        title: 'Editorial',
        rate: 'From €2,400 / day',
        body: 'Print and digital editorials for fashion titles. Comfortable on long-form story shoots, location work, and quiet studio days.',
        notes: 'Min. ½ day · Usage 12 mo.',
    },
    {
        title: 'Runway & Fashion Week',
        rate: 'On request',
        body: 'Exclusives, openings, and full schedules across Paris, Milan, New York, and London. Available for fittings up to 72 hrs prior.',
        notes: 'Mens FW · Resort · Couture',
    },
    {
        title: 'Campaign & Lookbook',
        rate: 'From €6,800 / day',
        body: 'Seasonal brand campaigns, hero imagery, and lookbooks. Buy-outs negotiated per territory and channel.',
        notes: 'Print · Digital · OOH',
    },
    {
        title: 'E-commerce & Showroom',
        rate: 'From €1,800 / day',
        body: 'On-figure product photography, motion turntables, and pre-collection showroom days. Standard size 40R.',
        notes: 'Min. full day · Web only',
    },
    {
        title: 'Fragrance & Beauty',
        rate: 'On request',
        body: 'Stills and motion for grooming, skincare, and fragrance. Clean-shaven or stubble; passport for international travel.',
        notes: 'Print · Film · Social',
    },
    {
        title: 'Brand Appearances',
        rate: 'From €3,200 / event',
        body: 'Store openings, dinners, runway sides, and press days. Black-tie and tailored options always packed.',
        notes: 'Travel & per diem extra',
    },
];

const currently = [
    { label: 'Reading', value: 'A Sport and a Pastime — James Salter' },
    { label: 'Listening', value: 'Nick Hakim · Cocoon' },
    { label: 'Training', value: 'Boxing 4×/week, Salle Gallieni' },
    { label: 'Next', value: 'Milan Fashion Week — Jan 2026' },
];
</script>

<template>
    <Head title="Jordan V - Male Escort">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link
            rel="preconnect"
            href="https://fonts.gstatic.com"
            crossorigin
        />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,300;9..144,400;9..144,500&family=Inter:wght@300;400;500;600&display=swap"
        />
    </Head>

    <div class="portfolio min-h-screen bg-stone-50 text-stone-900 antialiased dark:bg-neutral-950 dark:text-stone-100">
        <!-- Top utility bar -->
        <div
            class="hidden border-b border-stone-200 bg-stone-50 text-[11px] tracking-[0.18em] text-stone-500 uppercase md:block dark:border-neutral-900 dark:bg-neutral-950 dark:text-neutral-500"
        >
            <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-2">
                <span>Available worldwide · SS26 booking now open</span>
                <span>Paris · 22°</span>
            </div>
        </div>

        <!-- Navigation -->
        <header
            :class="[
                'sticky top-0 z-40 transition-all duration-300',
                isScrolled
                    ? 'bg-stone-50/85 backdrop-blur-md dark:bg-neutral-950/85 border-b border-stone-200/80 dark:border-neutral-900/80'
                    : 'bg-transparent border-b border-transparent',
            ]"
        >
            <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">
                <a href="#top" class="group flex items-center gap-3">
                    <span
                        class="flex h-9 w-9 items-center justify-center border border-stone-900 text-sm font-medium tracking-tight dark:border-stone-100"
                    >
                        JV
                    </span>
                    <span class="hidden text-xs tracking-[0.3em] uppercase text-stone-500 sm:inline dark:text-neutral-400">
                        Jordan V
                    </span>
                </a>

                <div class="hidden items-center gap-8 text-[13px] tracking-[0.2em] uppercase md:flex">
                    <a href="#work" class="hover:opacity-60">Work</a>
                    <a href="#about" class="hover:opacity-60">About</a>
                    <a href="#journey" class="hover:opacity-60">Journey</a>
                    <a href="#services" class="hover:opacity-60">Services</a>
                    <a href="#contact" class="hover:opacity-60">Contact</a>
                </div>

                <div class="flex items-center gap-2">
                    <button
                        type="button"
                        @click="toggleAppearance"
                        :aria-label="isDark ? 'Switch to light mode' : 'Switch to dark mode'"
                        class="flex h-9 w-9 items-center justify-center rounded-full border border-stone-300 text-stone-700 transition hover:border-stone-900 hover:text-stone-900 dark:border-neutral-800 dark:text-neutral-300 dark:hover:border-stone-100 dark:hover:text-white"
                    >
                        <svg
                            v-if="isDark"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.5"
                            class="h-4 w-4"
                        >
                            <circle cx="12" cy="12" r="4" />
                            <path
                                stroke-linecap="round"
                                d="M12 3v1.5M12 19.5V21M3 12h1.5M19.5 12H21M5.5 5.5l1 1M17.5 17.5l1 1M5.5 18.5l1-1M17.5 6.5l1-1"
                            />
                        </svg>
                        <svg
                            v-else
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.5"
                            class="h-4 w-4"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 12.79A9 9 0 1 1 11.21 3a7 7 0 0 0 9.79 9.79z"
                            />
                        </svg>
                    </button>

                    <a
                        href="#contact"
                        class="hidden rounded-full bg-stone-900 px-5 py-2 text-[12px] font-medium tracking-[0.18em] text-stone-50 uppercase transition hover:bg-stone-700 md:inline-block dark:bg-stone-100 dark:text-neutral-950 dark:hover:bg-stone-300"
                    >
                        Book
                    </a>

                    <button
                        type="button"
                        @click="isMenuOpen = !isMenuOpen"
                        class="flex h-9 w-9 items-center justify-center md:hidden"
                        :aria-label="isMenuOpen ? 'Close menu' : 'Open menu'"
                    >
                        <span class="relative block h-3 w-5">
                            <span
                                :class="[
                                    'absolute left-0 block h-px w-5 bg-current transition-all',
                                    isMenuOpen ? 'top-1.5 rotate-45' : 'top-0',
                                ]"
                            />
                            <span
                                :class="[
                                    'absolute left-0 top-1.5 block h-px w-5 bg-current transition-all',
                                    isMenuOpen ? '-rotate-45' : '',
                                ]"
                            />
                        </span>
                    </button>
                </div>
            </nav>

            <!-- Mobile menu -->
            <div
                v-if="isMenuOpen"
                class="border-t border-stone-200 bg-stone-50 md:hidden dark:border-neutral-900 dark:bg-neutral-950"
            >
                <div class="flex flex-col px-6 py-6 text-[13px] tracking-[0.2em] uppercase">
                    <a href="#work" class="border-b border-stone-200 py-3 dark:border-neutral-900" @click="isMenuOpen = false">Work</a>
                    <a href="#about" class="border-b border-stone-200 py-3 dark:border-neutral-900" @click="isMenuOpen = false">About</a>
                    <a href="#journey" class="border-b border-stone-200 py-3 dark:border-neutral-900" @click="isMenuOpen = false">Journey</a>
                    <a href="#stats" class="border-b border-stone-200 py-3 dark:border-neutral-900" @click="isMenuOpen = false">Stats</a>
                    <a href="#services" class="border-b border-stone-200 py-3 dark:border-neutral-900" @click="isMenuOpen = false">Services</a>
                    <a href="#press" class="border-b border-stone-200 py-3 dark:border-neutral-900" @click="isMenuOpen = false">Press</a>
                    <a href="#contact" class="py-3" @click="isMenuOpen = false">Contact</a>
                </div>
            </div>
        </header>

        <!-- Hero -->
        <section id="top" class="relative overflow-hidden">
            <div class="mx-auto grid max-w-7xl grid-cols-12 gap-6 px-6 pt-10 pb-20 md:pt-16 md:pb-32">
                <div class="col-span-12 flex flex-col justify-between gap-10 md:col-span-5">
                    <div class="flex items-center gap-3 text-[11px] tracking-[0.3em] text-stone-500 uppercase dark:text-neutral-400">
                        <span class="h-px w-10 bg-stone-400 dark:bg-neutral-600" />
                        Portfolio · Vol. 07 · 2018 — 2026
                    </div>

                    <div>
                        <h1
                            class="font-display text-[16vw] leading-[0.85] font-light tracking-[-0.04em] text-stone-900 md:text-[7rem] lg:text-[8.5rem] dark:text-stone-100"
                        >
                            Jordan
                            <span class="block italic text-stone-700 dark:text-stone-300">V</span>
                        </h1>
                        <p class="mt-8 max-w-md text-base leading-relaxed text-stone-600 dark:text-neutral-400">
                            I’m Jordan — a model from Marseille, currently
                            based between Paris and Brooklyn. This is a
                            personal archive of the work I’m proud of and the
                            people I’ve made it with.
                        </p>
                    </div>

                    <div class="flex items-center gap-4">
                        <a
                            href="#work"
                            class="group inline-flex items-center gap-3 rounded-full border border-stone-900 px-6 py-3 text-[12px] tracking-[0.2em] uppercase transition hover:bg-stone-900 hover:text-stone-50 dark:border-stone-100 dark:hover:bg-stone-100 dark:hover:text-neutral-950"
                        >
                            View Portfolio
                            <span class="transition group-hover:translate-x-1">→</span>
                        </a>
                        <a
                            href="#contact"
                            class="text-[12px] tracking-[0.2em] uppercase underline-offset-4 hover:underline"
                        >
                            Booking enquiries
                        </a>
                    </div>
                </div>

                <div class="relative col-span-12 md:col-span-7">
                    <div class="relative aspect-[4/5] w-full overflow-hidden bg-stone-200 dark:bg-neutral-900">
                        <img
                            :src="heroImage"
                            alt="Jonas Vale editorial portrait"
                            class="h-full w-full object-cover grayscale transition duration-700 hover:grayscale-0"
                            loading="eager"
                        />
                        <div
                            class="absolute right-4 bottom-4 flex flex-col items-end gap-1 text-[10px] tracking-[0.25em] text-stone-50 uppercase mix-blend-difference"
                        >
                            <span>SS26 Campaign</span>
                            <span>Photo · Lila Moreau</span>
                        </div>
                    </div>

                    <!-- Floating credit -->
                    <div
                        class="absolute -left-6 top-8 hidden -rotate-90 origin-left text-[10px] tracking-[0.3em] text-stone-500 uppercase md:block dark:text-neutral-500"
                    >
                        Est. 2018 — Paris
                    </div>
                </div>
            </div>

            <!-- Marquee -->
            <div class="border-t border-b border-stone-200 bg-stone-100 py-5 dark:border-neutral-900 dark:bg-neutral-900/40">
                <div class="marquee flex gap-12 overflow-hidden text-[13px] tracking-[0.4em] whitespace-nowrap text-stone-700 uppercase dark:text-neutral-300">
                    <div class="marquee-track flex shrink-0 items-center gap-12 px-6">
                        <template v-for="i in 2" :key="i">
                            <span v-for="brand in brands" :key="`${i}-${brand}`" class="flex items-center gap-12">
                                <span class="font-light">{{ brand }}</span>
                                <span class="text-stone-300 dark:text-neutral-700">✦</span>
                            </span>
                        </template>
                    </div>
                </div>
            </div>
        </section>

        <!-- About -->
        <section id="about" class="border-b border-stone-200 dark:border-neutral-900">
            <div class="mx-auto grid max-w-7xl grid-cols-12 gap-8 px-6 py-24 md:py-32">
                <div class="col-span-12 md:col-span-5">
                    <div class="sticky top-32">
                        <div class="aspect-[3/4] w-full overflow-hidden bg-stone-200 dark:bg-neutral-900">
                            <img
                                :src="aboutImage"
                                alt="Behind the scenes"
                                class="h-full w-full object-cover"
                                loading="lazy"
                            />
                        </div>
                        <p class="mt-3 text-[11px] tracking-[0.25em] text-stone-500 uppercase dark:text-neutral-500">
                            Backstage · Pitti Uomo, Florence
                        </p>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-7 md:pl-8">
                    <div class="flex items-center gap-3 text-[11px] tracking-[0.3em] text-stone-500 uppercase dark:text-neutral-400">
                        <span class="h-px w-10 bg-stone-400 dark:bg-neutral-600" />
                        A few words
                    </div>
                    <h2
                        class="font-display mt-6 text-4xl leading-[1.05] font-light tracking-tight md:text-6xl"
                    >
                        I grew up
                        <span class="italic text-stone-500 dark:text-neutral-400">
                            between two ports —
                        </span>
                        and I’ve been moving ever since.
                    </h2>
                    <div class="mt-10 grid grid-cols-1 gap-6 text-base leading-relaxed text-stone-700 md:grid-cols-2 dark:text-neutral-300">
                        <p>
                            My mother is a violin teacher, my father captains
                            a small commercial boat out of Marseille. I spent
                            half my childhood on the docks and the other half
                            in Brooklyn with my grandmother. I think both of
                            those places are still in the way I stand in front
                            of a camera.
                        </p>
                        <p>
                            I love the slow parts of this job: the long fittings,
                            the quiet ten minutes before a show, the hour after
                            wrap when the stylist is folding things back into
                            crates. The flashbulbs are nice. The crates are
                            where I learned the most.
                        </p>
                    </div>

                    <p
                        class="font-display mt-10 max-w-xl border-l-2 border-stone-300 pl-6 text-2xl leading-snug font-light italic text-stone-700 dark:border-neutral-700 dark:text-stone-300"
                    >
                        “Stillness is the loudest thing you can do in front of
                        a lens — so I try to do it well.”
                    </p>

                    <dl class="mt-12 grid grid-cols-2 gap-x-10 gap-y-8 border-t border-stone-200 pt-10 sm:grid-cols-3 dark:border-neutral-900">
                        <div>
                            <dt class="text-[11px] tracking-[0.25em] text-stone-500 uppercase dark:text-neutral-500">
                                Years modelling
                            </dt>
                            <dd class="font-display mt-2 text-3xl font-light">07</dd>
                        </div>
                        <div>
                            <dt class="text-[11px] tracking-[0.25em] text-stone-500 uppercase dark:text-neutral-500">
                                Covers I’ve shot
                            </dt>
                            <dd class="font-display mt-2 text-3xl font-light">32</dd>
                        </div>
                        <div>
                            <dt class="text-[11px] tracking-[0.25em] text-stone-500 uppercase dark:text-neutral-500">
                                Cities I’ve walked
                            </dt>
                            <dd class="font-display mt-2 text-3xl font-light">14</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </section>

        <!-- Editorial Work Grid -->
        <section id="work" class="border-b border-stone-200 dark:border-neutral-900">
            <div class="mx-auto max-w-7xl px-6 py-24 md:py-32">
                <div class="flex flex-col items-start justify-between gap-6 md:flex-row md:items-end">
                    <div>
                        <div class="flex items-center gap-3 text-[11px] tracking-[0.3em] text-stone-500 uppercase dark:text-neutral-400">
                            <span class="h-px w-10 bg-stone-400 dark:bg-neutral-600" />
                            Selected Work
                        </div>
                        <h2 class="font-display mt-6 text-4xl leading-[1.05] font-light tracking-tight md:text-6xl">
                            Editorials &amp; Campaigns
                        </h2>
                    </div>
                    <a
                        href="#contact"
                        class="text-[12px] tracking-[0.2em] uppercase underline-offset-4 hover:underline"
                    >
                        Request full book →
                    </a>
                </div>

                <div class="mt-16 grid grid-cols-1 gap-4 md:grid-cols-8 md:gap-6">
                    <figure
                        v-for="(item, idx) in editorial"
                        :key="item.title"
                        :class="[
                            'group relative overflow-hidden bg-stone-200 dark:bg-neutral-900',
                            item.span,
                            idx === 0 ? 'aspect-[4/5] md:aspect-auto' : 'aspect-[4/5]',
                        ]"
                    >
                        <img
                            :src="item.src"
                            :alt="item.title"
                            class="h-full w-full object-cover transition duration-700 group-hover:scale-[1.03]"
                            loading="lazy"
                        />
                        <figcaption
                            class="absolute inset-x-0 bottom-0 flex items-end justify-between gap-4 bg-gradient-to-t from-black/70 via-black/20 to-transparent p-4 text-stone-50 opacity-0 transition duration-300 group-hover:opacity-100"
                        >
                            <div>
                                <div class="text-[10px] tracking-[0.3em] uppercase opacity-80">
                                    {{ item.location }} · {{ item.year }}
                                </div>
                                <div class="font-display mt-1 text-xl font-light italic">
                                    {{ item.title }}
                                </div>
                            </div>
                            <span class="text-[10px] tracking-[0.3em] uppercase">
                                0{{ idx + 1 }}
                            </span>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>

        <!-- Journey / Timeline -->
        <section id="journey" class="border-b border-stone-200 dark:border-neutral-900">
            <div class="mx-auto grid max-w-7xl grid-cols-12 gap-8 px-6 py-24 md:py-32">
                <div class="col-span-12 md:col-span-4">
                    <div class="sticky top-32">
                        <div class="flex items-center gap-3 text-[11px] tracking-[0.3em] text-stone-500 uppercase dark:text-neutral-400">
                            <span class="h-px w-10 bg-stone-400 dark:bg-neutral-600" />
                            Journey
                        </div>
                        <h2 class="font-display mt-6 text-4xl leading-[1.05] font-light tracking-tight md:text-5xl">
                            Five rooms
                            <span class="italic text-stone-500 dark:text-neutral-400">
                                I won’t forget.
                            </span>
                        </h2>
                        <p class="mt-6 max-w-sm text-stone-600 dark:text-neutral-400">
                            A short, honest account of how I got here — written
                            on a notes app, between flights.
                        </p>
                    </div>
                </div>

                <ol class="col-span-12 md:col-span-8">
                    <li
                        v-for="(entry, idx) in timeline"
                        :key="entry.year"
                        class="grid grid-cols-12 gap-6 border-t border-stone-200 py-10 first:border-t-0 first:pt-0 dark:border-neutral-900"
                    >
                        <div class="col-span-3 md:col-span-2">
                            <div class="font-display text-3xl font-light tracking-tight md:text-4xl">
                                {{ entry.year }}
                            </div>
                            <div class="mt-1 text-[10px] tracking-[0.3em] text-stone-400 uppercase dark:text-neutral-600">
                                Ch. 0{{ idx + 1 }}
                            </div>
                        </div>
                        <div class="col-span-9 md:col-span-10">
                            <h3 class="font-display text-xl font-light italic md:text-2xl">
                                {{ entry.title }}
                            </h3>
                            <p class="mt-3 max-w-xl text-stone-600 dark:text-neutral-400">
                                {{ entry.body }}
                            </p>
                        </div>
                    </li>
                </ol>
            </div>
        </section>

        <!-- Currently -->
        <section class="border-b border-stone-200 bg-stone-900 py-16 text-stone-100 dark:border-neutral-900 dark:bg-neutral-900">
            <div class="mx-auto grid max-w-7xl grid-cols-12 gap-8 px-6">
                <div class="col-span-12 flex flex-wrap items-baseline gap-x-4 gap-y-2 md:col-span-3">
                    <span class="text-[11px] tracking-[0.3em] text-stone-400 uppercase">
                        Currently
                    </span>
                    <span class="flex items-center gap-2 text-[11px] tracking-[0.25em] text-stone-300 uppercase">
                        <span class="relative flex h-2 w-2">
                            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-60" />
                            <span class="relative inline-flex h-2 w-2 rounded-full bg-emerald-400" />
                        </span>
                        Paris, this week
                    </span>
                </div>
                <dl class="col-span-12 grid grid-cols-1 gap-x-10 gap-y-6 sm:grid-cols-2 md:col-span-9 md:grid-cols-4">
                    <div v-for="item in currently" :key="item.label">
                        <dt class="text-[10px] tracking-[0.3em] text-stone-400 uppercase">
                            {{ item.label }}
                        </dt>
                        <dd class="font-display mt-2 text-lg font-light italic">
                            {{ item.value }}
                        </dd>
                    </div>
                </dl>
            </div>
        </section>

        <!-- Stats -->
        <section id="stats" class="border-b border-stone-200 bg-stone-100 dark:border-neutral-900 dark:bg-neutral-900/40">
            <div class="mx-auto grid max-w-7xl grid-cols-12 gap-8 px-6 py-24 md:py-32">
                <div class="col-span-12 md:col-span-4">
                    <div class="flex items-center gap-3 text-[11px] tracking-[0.3em] text-stone-500 uppercase dark:text-neutral-400">
                        <span class="h-px w-10 bg-stone-400 dark:bg-neutral-600" />
                        Measurements
                    </div>
                    <h2 class="font-display mt-6 text-4xl leading-[1.05] font-light tracking-tight md:text-5xl">
                        On the card.
                    </h2>
                    <p class="mt-6 max-w-sm text-stone-600 dark:text-neutral-400">
                        Sizes are kept current as of last fitting. For
                        campaign-specific tailoring measurements, contact the
                        agency.
                    </p>
                </div>

                <dl class="col-span-12 grid grid-cols-2 gap-px bg-stone-200 md:col-span-8 md:grid-cols-4 dark:bg-neutral-800">
                    <div
                        v-for="stat in stats"
                        :key="stat.label"
                        class="flex flex-col gap-3 bg-stone-100 p-6 dark:bg-neutral-950"
                    >
                        <dt class="text-[11px] tracking-[0.25em] text-stone-500 uppercase dark:text-neutral-500">
                            {{ stat.label }}
                        </dt>
                        <dd class="font-display text-2xl font-light">
                            {{ stat.value }}
                        </dd>
                    </div>
                </dl>
            </div>
        </section>

        <!-- Services -->
        <section id="services" class="border-b border-stone-200 dark:border-neutral-900">
            <div class="mx-auto max-w-7xl px-6 py-24 md:py-32">
                <div class="grid grid-cols-12 gap-8">
                    <div class="col-span-12 md:col-span-4">
                        <div class="sticky top-32">
                            <div class="flex items-center gap-3 text-[11px] tracking-[0.3em] text-stone-500 uppercase dark:text-neutral-400">
                                <span class="h-px w-10 bg-stone-400 dark:bg-neutral-600" />
                                Services
                            </div>
                            <h2 class="font-display mt-6 text-4xl leading-[1.05] font-light tracking-tight md:text-5xl">
                                What I’m
                                <span class="italic text-stone-500 dark:text-neutral-400">
                                    booked for.
                                </span>
                            </h2>
                            <p class="mt-6 max-w-sm text-stone-600 dark:text-neutral-400">
                                A short menu of the work I do most. Rates are
                                indicative — every project has its own shape.
                                Usage, travel, and exclusivity are quoted
                                separately by my agent.
                            </p>
                            <a
                                href="#contact"
                                class="mt-8 inline-flex items-center gap-3 text-[12px] tracking-[0.2em] uppercase underline-offset-4 hover:underline"
                            >
                                Request a custom quote →
                            </a>
                        </div>
                    </div>

                    <ol class="col-span-12 grid grid-cols-1 gap-px bg-stone-200 md:col-span-8 md:grid-cols-2 dark:bg-neutral-800">
                        <li
                            v-for="(service, idx) in services"
                            :key="service.title"
                            class="flex flex-col gap-4 bg-stone-50 p-7 dark:bg-neutral-950"
                        >
                            <div class="flex items-baseline justify-between gap-4">
                                <span class="text-[10px] tracking-[0.3em] text-stone-400 uppercase dark:text-neutral-600">
                                    0{{ idx + 1 }}
                                </span>
                                <span class="text-[11px] tracking-[0.25em] text-stone-500 uppercase dark:text-neutral-400">
                                    {{ service.rate }}
                                </span>
                            </div>
                            <h3 class="font-display text-2xl font-light tracking-tight">
                                {{ service.title }}
                            </h3>
                            <p class="text-sm leading-relaxed text-stone-600 dark:text-neutral-400">
                                {{ service.body }}
                            </p>
                            <p class="mt-auto pt-4 text-[10px] tracking-[0.25em] text-stone-400 uppercase dark:text-neutral-600">
                                {{ service.notes }}
                            </p>
                        </li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Press -->
        <section id="press" class="border-b border-stone-200 dark:border-neutral-900">
            <div class="mx-auto max-w-7xl px-6 py-24 md:py-32">
                <div class="flex items-center gap-3 text-[11px] tracking-[0.3em] text-stone-500 uppercase dark:text-neutral-400">
                    <span class="h-px w-10 bg-stone-400 dark:bg-neutral-600" />
                    Press
                </div>
                <h2 class="font-display mt-6 max-w-3xl text-4xl leading-[1.05] font-light tracking-tight md:text-6xl">
                    What the press is saying.
                </h2>

                <div class="mt-16 grid grid-cols-1 gap-px bg-stone-200 md:grid-cols-3 dark:bg-neutral-800">
                    <figure
                        v-for="item in press"
                        :key="item.source"
                        class="flex flex-col justify-between gap-8 bg-stone-50 p-8 dark:bg-neutral-950"
                    >
                        <blockquote class="font-display text-2xl leading-snug font-light italic text-stone-800 dark:text-stone-200">
                            “{{ item.quote }}”
                        </blockquote>
                        <figcaption class="text-[11px] tracking-[0.25em] text-stone-500 uppercase dark:text-neutral-500">
                            — {{ item.source }}
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="bg-stone-900 text-stone-100 dark:bg-neutral-900">
            <div class="mx-auto grid max-w-7xl grid-cols-12 gap-8 px-6 py-24 md:py-32">
                <div class="col-span-12 md:col-span-7">
                    <div class="flex items-center gap-3 text-[11px] tracking-[0.3em] text-stone-400 uppercase">
                        <span class="h-px w-10 bg-stone-500" />
                        Get in touch
                    </div>
                    <h2 class="font-display mt-6 text-5xl leading-[1] font-light tracking-tight md:text-7xl">
                        Say
                        <span class="italic">hello.</span>
                    </h2>
                    <p class="mt-8 max-w-lg text-stone-300">
                        For editorial, runway, and campaign enquiries please
                        reach out to my agent at
                        <span class="text-stone-100">Atelier Mgmt</span>
                        in Paris. For everything else — a coffee, a question,
                        a kind word — my inbox is open.
                    </p>

                    <div class="mt-10 space-y-6">
                        <a
                            href="mailto:hello@jonasvale.com"
                            class="font-display flex items-center gap-4 text-2xl font-light italic underline decoration-stone-600 underline-offset-8 transition hover:decoration-stone-100 md:text-4xl"
                        >
                            hello@jonasvale.com
                            <span class="text-xl">↗</span>
                        </a>
                        <a
                            href="mailto:bookings@ateliermgmt.com"
                            class="font-display flex items-center gap-4 text-xl font-light italic text-stone-300 underline decoration-stone-700 underline-offset-8 transition hover:text-stone-100 hover:decoration-stone-300 md:text-2xl"
                        >
                            bookings@ateliermgmt.com
                            <span class="text-base">↗</span>
                        </a>
                    </div>

                    <p class="font-display mt-16 text-3xl font-light italic text-stone-300 md:text-4xl">
                        — Jonas
                    </p>
                </div>

                <aside class="col-span-12 md:col-span-5">
                    <div class="border border-stone-800 p-6">
                        <h3 class="text-[11px] tracking-[0.25em] text-stone-400 uppercase">
                            Mother Agency
                        </h3>
                        <p class="font-display mt-3 text-2xl font-light">Atelier Mgmt — Paris</p>
                        <p class="mt-2 text-sm text-stone-300">12 rue de Turenne, 75003 Paris</p>
                        <p class="mt-1 text-sm text-stone-300">+33 1 42 72 00 00</p>
                        <p class="mt-1 text-sm text-stone-300">
                            Agent: Camille Roux ·
                            <a href="mailto:camille@ateliermgmt.com" class="underline underline-offset-4 hover:text-stone-100">camille@ateliermgmt.com</a>
                        </p>
                    </div>

                    <h3 class="mt-10 text-[11px] tracking-[0.25em] text-stone-400 uppercase">
                        Also represented by
                    </h3>
                    <ul class="mt-4 divide-y divide-stone-800 border-t border-b border-stone-800 text-sm">
                        <li class="flex items-baseline justify-between gap-4 py-3">
                            <span class="font-display text-base font-light italic">Soul Artist Mgmt</span>
                            <span class="text-[11px] tracking-[0.25em] text-stone-400 uppercase">New York</span>
                        </li>
                        <li class="flex items-baseline justify-between gap-4 py-3">
                            <span class="font-display text-base font-light italic">Why Not Models</span>
                            <span class="text-[11px] tracking-[0.25em] text-stone-400 uppercase">Milan</span>
                        </li>
                        <li class="flex items-baseline justify-between gap-4 py-3">
                            <span class="font-display text-base font-light italic">Established Models</span>
                            <span class="text-[11px] tracking-[0.25em] text-stone-400 uppercase">London</span>
                        </li>
                    </ul>
                </aside>
            </div>

            <div class="border-t border-stone-800">
                <div class="mx-auto flex max-w-7xl flex-col items-start justify-between gap-4 px-6 py-8 text-[11px] tracking-[0.25em] text-stone-400 uppercase md:flex-row md:items-center">
                    <span>© {{ new Date().getFullYear() }} Jonas Vale — a personal archive.</span>
                    <div class="flex gap-6">
                        <a href="#" class="hover:text-stone-100">Instagram · @jonas.vale</a>
                        <a href="#" class="hover:text-stone-100">Models.com</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<style scoped>
.portfolio {
    font-family: 'Inter', ui-sans-serif, system-ui, sans-serif;
}

.font-display {
    font-family: 'Fraunces', 'Times New Roman', serif;
    font-feature-settings: 'ss01';
}

.marquee {
    mask-image: linear-gradient(
        to right,
        transparent,
        #000 10%,
        #000 90%,
        transparent
    );
}

.marquee-track {
    animation: scroll 38s linear infinite;
}

@keyframes scroll {
    from {
        transform: translateX(0);
    }
    to {
        transform: translateX(-50%);
    }
}

@media (prefers-reduced-motion: reduce) {
    .marquee-track {
        animation: none;
    }
}
</style>
