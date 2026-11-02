@php
    $links = [
        ['label' => 'Home',    'href' => '/',        'icon' => 'bi-house-fill',     'active' => request()->is('/')],
        ['label' => 'Blog',    'href' => '/blog',    'icon' => 'bi-journal-text',   'active' => request()->is('blog')],
        ['label' => 'About',   'href' => '/about',   'icon' => 'bi-person-fill',    'active' => request()->is('about')],
        ['label' => 'Contact', 'href' => '/contact', 'icon' => 'bi-envelope-fill',  'active' => request()->is('contact')],
    ];
@endphp
<nav class="sticky top-0 z-50 border-b border-navy/10 bg-white" aria-label="Main navigation">
    <div class="wrap flex min-h-[68px] items-center justify-center py-2">

        <div class="flex gap-0.5 rounded-full border border-navy/10 bg-soft p-1">
            @foreach ($links as $link)
                <a href="{{ $link['href'] }}"
                   @if ($link['active']) aria-current="page" @endif
                   class="flex items-center gap-1.5 whitespace-nowrap rounded-full px-[18px] py-1.5 text-[0.83rem] font-medium focus:outline-none focus-visible:ring-2 focus-visible:ring-brand {{ $link['active'] ? 'bg-brand text-white' : 'text-muted hover:bg-brand/10 hover:text-brand' }}">
                    <i class="bi {{ $link['icon'] }}"></i> {{ $link['label'] }}
                </a>
            @endforeach
        </div>

    </div>
</nav>