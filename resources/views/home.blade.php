@extends('layouts.app')
@section('title', 'Home')
@section('content')
        <section class="hero-grid relative flex min-h-[calc(100vh-68px)] items-center overflow-hidden py-20">
            <div class="wrap w-full">
                <div class="grid items-center gap-10 grid-cols-12">

                    <div class="col-span-8">
                        <div class="mb-8 inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-1.5 text-xs font-bold uppercase tracking-[0.12em] text-white/80">
                            <span class="size-[7px] rounded-full bg-lime"></span>
                            Hello, folks
                        </div>

                        <h1 class="mb-6 text-[clamp(2.2rem,7vw,6rem)] leading-none tracking-[-0.04em] text-white">
                            Personal<br>
                            <span class="text-lime">Portfolio</span>
                        </h1>

                        <p class="mb-10 max-w-lg leading-[1.8] text-white/60">
                            I'm Beryl, an undergraduate student in Informatics at Universitas Ciputra
                            Makassar — Full Stack Developer (FSD). This portfolio it's about recap for what i've been done so far.
                        </p>
                    </div>

                    <div class="col-span-4">
                        <div class="rounded-2xl border border-white/20 bg-lime/10 p-8 text-center backdrop-blur-md">
                            <img src="{{ asset('img/profile 2.jpeg') }}" alt="Beryl Christopher Robert" class="mx-auto mb-4 size-[100px] rounded-full border-2 border-lime/50 object-cover">
                            <div class="font-display font-bold text-white">Beryl Christopher Robert</div>
                            <div class="mt-1 text-[0.78rem] text-white/50">IMT · Universitas Ciputra Makassar</div>
                            <div class="mt-4 inline-flex items-center gap-1.5 rounded-full border border-lime/40 bg-lime/15 px-3.5 py-1 text-xs font-bold text-lime">
                                <span class="size-1.5 rounded-full bg-lime"></span>
                                Fortune Favors the Bold
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
            
        @php
            $projects = [
                [
                    'title' => 'Money Management App',
                    'year' => '2025',
                    'badge' => 'UI/UX Design',
                    'desc' => 'A web-based personal finance application to track income, expenses, and budgeting goals with a clean dashboard interface.',
                    'tags' => ['Figma'],
                    'image' => 'img/Money Management App.png',
                    'icon' => null,
                ],
                [
                    'title' => 'Pet Care Website',
                    'year' => '2025',
                    'badge' => 'Web Design',
                    'desc' => 'An informational and booking platform for a pet care clinic — featuring service listings, vet profiles, and an appointment form.',
                    'tags' => ['HTML', 'CSS', 'Bootstrap'],
                    'image' => 'img/Pet Care.png',
                    'icon' => null,
                ],
                [
                    'title' => 'My Anime Watch List',
                    'year' => '2026',
                    'badge' => 'App',
                    'desc' => 'Anime Watchlist is a Flutter app for tracking the anime you watch, with search, status filters, episode progress, and a responsive Material 3 dark interface.',
                    'tags' => ['Flutter'],
                    'image' => 'img/My Anime Watch List.png',
                    'icon' => 'bi-person-check',
                ],
            ];
        @endphp

        <section id="projects" class="py-20">
            <div class="wrap">
                <div class="mb-12 flex flex-wrap items-end justify-between gap-4">
                    <div>
                        <div class="eyebrow">Featured Work</div>
                        <h2 class="text-[clamp(1.8rem,3.5vw,2.8rem)]">My Projects</h2>
                    </div>
                    <a href="https://github.com/BerylRobert" target="_blank" rel="noopener" class="btn btn-outline">
                        See GitHub <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>

                <div class="grid gap-6 grid-cols-3">
                    @foreach ($projects as $project)
                        <article class="card overflow-hidden">
                            <div class="flex aspect-video items-center justify-center bg-gradient-to-br from-brand to-[#0f2145]">
                                @if ($project['image'])
                                    <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" class="size-full object-cover" loading="lazy">
                                @else
                                    <div class="text-center text-5xl text-lime">
                                        <i class="bi {{ $project['icon'] }}"></i>
                                        <div class="mt-2 text-xs text-white/50">{{ $project['title'] }}</div>
                                    </div>
                                @endif
                            </div>

                            <div class="p-6">
                                <div class="flex items-center justify-between gap-2">
                                    <span class="rounded-full border border-navy/10 bg-soft px-3 py-0.5 text-[0.72rem] font-semibold text-muted">{{ $project['year'] }}</span>
                                    <span class="badge">{{ $project['badge'] }}</span>
                                </div>
                                <h3 class="mb-2 mt-3 text-[1.4rem]">{{ $project['title'] }}</h3>
                                <p class="text-sm leading-[1.75] text-muted">{{ $project['desc'] }}</p>
                                <div class="mt-4 flex flex-wrap gap-2">
                                    @foreach ($project['tags'] as $tag)
                                        <span class="tag">{{ $tag }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="wrap"><hr class="border-navy/10"></div>
@endsection