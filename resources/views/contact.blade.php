@extends('layouts.app')
@section('title', 'Contact')
@section('content')
        <section class="hero-grid relative overflow-hidden pb-14 pt-20 max-sm:pb-8 max-sm:pt-12">
            <div class="wrap">
                <div class="eyebrow eyebrow-light">Get in Touch</div>

                <h1 class="text-[clamp(2.5rem,5vw,4rem)] text-white">Can't wait to hear<br><span class="text-lime">from You!</span></h1>

                <p class="mt-6 max-w-xl leading-relaxed text-white/65">Fill out the form below and I'll get back to you as soon as possible. I'm always open to new opportunities and collaborations.</p>
            </div>
        </section>

        <section class="py-16">
            <div class="wrap">
                <div class="grid gap-12 lg:grid-cols-12">

                    <div class="lg:col-span-7">
                    <form class="flex flex-col gap-6">
                        <div>
                            <label for="contactName" class="mb-2 block text-[0.73rem] font-bold uppercase tracking-[0.1em] text-muted">Full Name</label>
                            <input type="text" id="contactName" class="field" required minlength="2" placeholder="ex: Subianto" autocomplete="off">
                        </div>

                        <div>
                            <label for="contactEmail" class="mb-2 block text-[0.73rem] font-bold uppercase tracking-[0.1em] text-muted">Email Address</label>
                            <input type="email" id="contactEmail" class="field" required placeholder="ex: subianto@example.com" autocomplete="off">
                        </div>

                        <div>   
                            <label for="contactMessage" class="mb-2 block text-[0.73rem] font-bold uppercase tracking-[0.1em] text-muted">Message</label>
                            <textarea id="contactMessage" rows="6" class="field" required minlength="10" placeholder="Tell me about your message"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-full p-4">
                            <i class="bi bi-send-fill"></i> Send Message
                        </button>
                    </form>
                    </div>

                    <aside class="lg:col-span-5">
                        <div class="rounded-2xl bg-brand p-8 text-white">
                            <div class="mb-2 font-display text-[1.3rem] font-bold">Beryl Christopher Robert</div>
                            <p class="mb-6 text-[0.88rem] leading-[1.7] text-white/65">
                                My inbox is always open. Whether you have a project in mind, a question, or just want to say
                                hi, I'd love to hear from you.
                            </p>

                            <hr class="mb-6 border-white/15">

                            <ul class="flex flex-col gap-3.5 text-[0.88rem] text-white/70">
                                @foreach ([
                                    ['bi-envelope-fill', 'Email', 'berylchristoper8@gmail.com'],
                                    ['bi-geo-alt-fill', 'Location', 'Makassar, Indonesia'],
                                    ['bi-clock-fill', 'Response Time', 'Within 24 hours'],
                                ] as $item)
                                    <li class="flex items-center gap-3">
                                        <span class="flex size-9 shrink-0 items-center justify-center rounded-lg bg-white/10 text-lime">
                                            <i class="bi {{ $item[0] }}"></i>
                                        </span>
                                        <span>
                                            <span class="mb-0.5 block text-[0.72rem] uppercase tracking-[0.08em] text-white/45">{{ $item[1] }}</span>
                                            {{ $item[2] }}
                                        </span>
                                    </li>
                                @endforeach
                            </ul>

                            <hr class="my-6 border-white/15">

                            <div class="mb-4 text-[0.72rem] uppercase tracking-[0.08em] text-white/50">Find me on</div>
                            <div class="flex flex-wrap gap-2">
                                <a href="https://github.com/BerylRobert" target="_blank" rel="noopener" class="btn btn-ghost px-4 py-2 text-[0.82rem] font-semibold">
                                    <i class="bi bi-github"></i> GitHub
                                </a>
                                <a href="https://www.instagram.com/berylchristopher_/" target="_blank" rel="noopener" class="btn btn-ghost px-4 py-2 text-[0.82rem] font-semibold">
                                    <i class="bi bi-instagram"></i> Instagram
                                </a>
                            </div>
                        </div>
                    </aside>

                </div>
            </div>
        </section>
@endsection