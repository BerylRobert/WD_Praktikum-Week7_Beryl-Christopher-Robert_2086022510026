@extends('layouts.app')
@section('title', 'Blog')
@section('content')
        @php
            $docs = [
                [
                    'category' => 'Web Framework',
                    'icon' => 'bi-boxes',
                    'title' => 'Laravel Documentation',
                    'excerpt' => 'The PHP framework for web artisans. Discover routing, controllers, Blade templates, and Eloquent ORM.',
                    'url' => 'https://laravel.com/docs'
                ],
                [
                    'category' => 'Mobile Framework',
                    'icon' => 'bi-phone-fill',
                    'title' => 'Flutter Documentation',
                    'excerpt' => 'Build, test, and deploy beautiful mobile, web, desktop, and embedded apps from a single codebase.',
                    'url' => 'https://docs.flutter.dev/'
                ],
                [
                    'category' => 'Programming Language',
                    'icon' => 'bi-cup-hot-fill',
                    'title' => 'Java SE Documentation',
                    'excerpt' => 'The official Java SE documentation containing API references, tutorials, developer guides, and release notes.',
                    'url' => 'https://docs.oracle.com/en/java/'
                ],
            ];
        @endphp

        <section class="hero-grid relative overflow-hidden pb-14 pt-20">
            <div class="wrap">
                <div class="eyebrow eyebrow-light">Documentation</div>

                <h1 class="text-[clamp(2.5rem,5vw,4rem)] text-white">Tech <span class="text-lime">Resources.</span></h1>

                <p class="mt-6 max-w-xl leading-relaxed text-white/65">Quick links to the official documentation of the tools and languages I frequently use.</p>
            </div>
        </section>

        <section class="py-16">
            <div class="wrap">
                <div class="grid gap-6 grid-cols-3">
                    @foreach ($docs as $doc)
                        <a href="{{ $doc['url'] }}" target="_blank" rel="noopener" 
                           class="card group flex flex-col overflow-hidden hover:border-lime">
                            
                            <div class="flex aspect-video items-center justify-center bg-gradient-to-br from-brand to-[#0f2145] text-5xl text-lime relative overflow-hidden">
                                <i class="bi {{ $doc['icon'] }}"></i>
                            </div>

                            <div class="flex flex-1 flex-col p-6 bg-white relative z-10">
                                <span class="badge self-start">{{ $doc['category'] }}</span>
                                <h3 class="mb-2 mt-3 text-[1.3rem] leading-tight group-hover:text-brand">{{ $doc['title'] }}</h3>
                                <p class="flex-1 text-sm leading-[1.75] text-muted">{{ $doc['excerpt'] }}</p>
                                
                                <div class="mt-5 text-xs font-bold uppercase tracking-[0.08em] text-brand group-hover:text-lime flex items-center gap-1.5">
                                    Visit Site <i class="bi bi-box-arrow-up-right"></i>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
        
        <div class="wrap"><hr class="border-navy/10"></div>
@endsection