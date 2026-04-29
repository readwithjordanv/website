<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  @class(['dark' => ($appearance ?? 'system') == 'dark'])>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Jordan V offers premium male escort experiences, including private dates, travel companionship, and bespoke bookings.">
        <meta name="robots" content="index, follow, max-image-preview:none, noimageindex">
        <meta name="googlebot" content="index, follow, max-image-preview:none, noimageindex">
        <meta name="bingbot" content="index, follow, noimageindex">
        <meta name="ai" content="noimageai, noai">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Jordan V">
        <meta property="og:title" content="Jordan V - Melbourne Male Escort">
        <meta property="og:description" content="Jordan V offers premium male escort experiences, including private dates, travel companionship, and bespoke bookings.">
        <meta property="og:url" content="/">
        <meta property="og:image" content="/dist/img/1.jpg">
        <meta property="og:image:alt" content="Jordan V portrait">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Jordan V - Melbourne Male Escort">
        <meta name="twitter:description" content="Jordan V offers premium male escort experiences, including private dates, travel companionship, and bespoke bookings.">
        <meta name="twitter:image" content="/dist/img/1.jpg">
        <link rel="canonical" href="/">

        {{-- Inline script to detect system dark mode preference and apply it immediately --}}
        <script>
            (function() {
                const appearance = '{{ $appearance ?? "system" }}';

                if (appearance === 'system') {
                    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

                    if (prefersDark) {
                        document.documentElement.classList.add('dark');
                    }
                }
            })();
        </script>

        {{-- Inline style to set the HTML background color based on our theme in app.css --}}
        <style>
            html {
                background-color: oklch(1 0 0);
            }

            html.dark {
                background-color: oklch(0.145 0 0);
            }
        </style>

        <link rel="icon" href="/dist/img/favicon.png" type="image/png" sizes="any">
        <link rel="shortcut icon" href="/dist/img/favicon.png" type="image/png">
        <link rel="apple-touch-icon" href="/dist/img/favicon.png">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.ts', "resources/js/pages/{$page['component']}.vue"])
        <x-inertia::head>
            <title>{{ config('app.name', 'Laravel') }}</title>
        </x-inertia::head>
    </head>
    <body class="font-sans antialiased">
        <x-inertia::app />
    </body>
</html>
