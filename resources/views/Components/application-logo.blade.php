@props(['class' => ''])

<div {{ $attributes->merge(['class' => $class]) }}>
    <svg viewBox="0 0 50 50" fill="currentColor">
        <!-- Simple Laravel-style logo -->
        <circle cx="25" cy="25" r="20" fill="currentColor" opacity="0.8"/>
        <text x="25" y="30" font-family="Arial, sans-serif" font-size="14" font-weight="bold" text-anchor="middle" fill="white">L</text>
    </svg>
</div>