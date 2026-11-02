@extends('layouts.app')
@section('title', 'About')
@section('content')

        <section class="hero-grid relative overflow-hidden pb-14 pt-20">
            <div class="wrap">

                <h1 class="text-[clamp(2.5rem,5vw,4rem)] text-white">About <span class="text-lime">Me</span></h1>

                <p class="mt-6 leading-relaxed text-white/65">Sharing experiences and thoughts about life and learning</p>
            </div>
        </section>

        <section class="py-16">
            <div class="wrap">
                <div class="grid items-start gap-12 grid-cols-12">

                    <aside class="col-span-4">
                        <div class="overflow-hidden rounded-2xl bg-brand p-8 text-white">
                            <img src="{{ asset('img/profile 2.jpeg') }}" alt="Beryl Christopher Robert" class="aspect-square w-full rounded-2xl border-2 border-lime/40 bg-white/10 object-cover">

                            <div class="mt-6">
                                <div class="font-display text-[1.3rem] font-bold">Beryl Christopher Robert</div>
                                <div class="mb-4 mt-1 text-sm text-white/60">IMT Student · UC Makassar</div>
                                
                            </div>

                            <hr class="my-6 border-white/15">

                            <ul class="flex flex-col gap-2.5 text-[0.82rem] text-white/70">
                                <li><i class="bi bi-mortarboard-fill mr-2 text-lime"></i> Universitas Ciputra Makassar</li>
                                <li><i class="bi bi-geo-alt-fill mr-2 text-lime"></i> Makassar, Indonesia</li>
                                <li><i class="bi bi-card-text mr-2 text-lime"></i> NIM: 2086022510026</li>
                                <li><i class="bi bi-bookmark-fill mr-2 text-lime"></i> Faculty of FSD</li>
                            </ul>
                        </div>
                    </aside>

                    <div class="flex flex-col gap-16 col-span-8">

                        <div class="">
                            <div class="eyebrow">My Story</div>
                            <h2 class="mb-5 text-3xl">Who Am I?</h2>
                            <div class="flex flex-col gap-4 leading-[1.9] text-muted">
                                <p>
                                    I'm <strong class="text-brand">Beryl Christopher Robert</strong>, Informatics (Full Stack Development) student at Universitas Ciputra Makassar, focused on web and application development.
                                </p>
                                <p>
                                    Born in Jakarta on 11 February 2007. I like to play Minecraft and MLBB.
                                </p>
                            </div>
                        </div>
                        
                        <div class="">
                            <div class="eyebrow">Academic Background</div>
                            <h2 class="mb-8 text-3xl">Education &amp; <span class="text-brand">Learning</span></h2>

                            <div class="relative flex flex-col gap-4 pl-8">
                                <div class="absolute bottom-0 left-0 top-0 w-[3px] rounded bg-gradient-to-b from-transparent via-brand to-transparent"></div>

                                <div class="card p-6 px-8">
                                    <div class="mb-3 flex flex-wrap items-start justify-between gap-2">
                                        <div>
                                            <div class="font-display text-[1.1rem] font-bold">Universitas Ciputra Makassar</div>
                                            <div class="text-sm text-muted">S1 Information Management Technology (IMT)</div>
                                        </div>
                                        <span class="badge normal-case tracking-normal">2025 – Present</span>
                                    </div>
                                    <ul class="list-disc pl-5 text-sm leading-[1.8] text-muted">
                                        <li>Faculty of Full Stack Development (FSD)</li>
                                        <li>NIM: 2086022510026</li>
                                    </ul>
                                </div>

                                <div class="card p-6 px-8">
                                    <div class="mb-3 flex flex-wrap items-start justify-between gap-2">
                                        <div>
                                            <div class="font-display text-[1.1rem] font-bold">High School</div>
                                            <div class="text-sm text-muted">Sekolah Lentera Harapan Toraja (SLHT)</div>
                                        </div>
                                        <span class="badge normal-case tracking-normal">2022 – 2025</span>
                                    </div>
                                    <p class="text-sm leading-[1.8] text-muted">
                                        Completed secondary education with a focus on social sciences
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="eyebrow">Experience</div>
                            <h2 class="mb-8 text-3xl">Work &amp; <span class="text-brand">Activities</span></h2>

                            <div class="relative flex flex-col gap-4 pl-8">
                                <div class="absolute bottom-0 left-0 top-0 w-[3px] rounded bg-gradient-to-b from-transparent via-brand to-transparent"></div>

                                <div class="card p-6 px-8">
                                    <div class="mb-2 flex flex-wrap items-start justify-between gap-2">
                                        <div>
                                            <div class="font-display text-[1.1rem] font-bold text-brand">Equipment Team Member, NPLC</div>
                                            <div class="text-sm text-muted">Universitas Ciputra Makassar</div>
                                        </div>
                                        <span class="badge normal-case tracking-normal">2025</span>
                                    </div>
                                    <p class="text-sm leading-[1.8] text-muted">
                                        Responsible for creating event room layouts, assisting in preparing equipment and materials needed for the event, and serving as a post guard.
                                    </p>
                                </div>

                                <div class="card p-6 px-8">
                                    <div class="mb-2 flex flex-wrap items-start justify-between gap-2">
                                        <div>
                                            <div class="font-display text-[1.1rem] font-bold text-brand">F8 Committee Member</div>
                                            <div class="text-sm text-muted">Universitas Ciputra Makassar</div>
                                        </div>
                                        <span class="badge normal-case tracking-normal">2024</span>
                                    </div>
                                    <p class="text-sm leading-[1.8] text-muted">
                                        Assisted in managing the booth during the event and prepared all necessary requirements.
                                    </p>
                                </div>
                            </div>
                        </div>

                        @php
                            $skills = [
                                'HTML', 'CSS', 'JavaScript', 'Java', 'MySQL', 
                                'PHP', 'Tailwind CSS', 'Laravel', 'GitHub', 
                                'Python', 'Flutter', 'Figma', 'Thymeleaf','Dart'
                            ];
                        @endphp
                        <div class="">
                            <div class="eyebrow">Skills</div>
                            <h2 class="mb-8 text-3xl">What I <span class="text-brand">Work With</span></h2>

                            <div class="flex flex-col gap-8">
                                <ul class="flex flex-wrap gap-2.5">
                                    @foreach ($skills as $skill)
                                        <li class="chip">{{ $skill }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

@endsection