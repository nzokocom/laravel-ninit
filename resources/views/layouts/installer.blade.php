<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('installer::installer.title', ['name' => config('installer.name', 'App')]) }}</title>
    <link rel="icon" type="image/png" href="{{ config('installer.favicon', asset('favicon.png')) }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=sora:400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ route('installer.assets.css') }}">
    @php
        $accent = config('installer.theme.accent', config('installer.theme.primary', '#262626'));
        $accentForeground = config('installer.theme.accent_foreground', '#ffffff');
        $accentDark = config('installer.theme.accent_dark', '#ffffff');
        $accentDarkForeground = config('installer.theme.accent_dark_foreground', '#1a1a1a');
        $themeMode = config('installer.theme.mode', 'system');
    @endphp
    <style>
        :root {
            --theme-accent: {{ $accent }};
            --theme-accent-foreground: {{ $accentForeground }};
            --theme-accent-dark: {{ $accentDark }};
            --theme-accent-dark-foreground: {{ $accentDarkForeground }};
        }
        html { background-color: var(--color-krikkit-canvas, #fff); color-scheme: light; }
        html.dark { background-color: var(--color-krikkit-canvas, #0a0a0a); color-scheme: dark; }
        [x-cloak] { display: none !important; }
    </style>
    <script>
        (() => {
            const configured = @js($themeMode);
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            const dark = configured === 'dark' || (configured === 'system' && prefersDark);
            document.documentElement.classList.toggle('dark', dark);
            document.documentElement.style.colorScheme = dark ? 'dark' : 'light';
        })();
    </script>
    @livewireStyles
</head>
<body>
    {{ $slot }}
    @livewireScripts
</body>
</html>
