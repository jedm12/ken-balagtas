<section class="relative flex min-h-screen items-center overflow-hidden pt-16">
    <div class="pointer-events-none absolute inset-0 overflow-hidden">
        <div class="hero-blob absolute -top-32 right-0 h-[480px] w-[480px] rounded-full bg-teal-100/60 blur-3xl"></div>
        <div class="hero-blob hero-blob-delay absolute bottom-0 left-0 h-[360px] w-[360px] rounded-full bg-slate-200/50 blur-3xl"></div>
        <div class="absolute inset-0 bg-[linear-gradient(to_bottom,transparent_0%,rgb(248_250_252)_100%)]"></div>
    </div>

    <div class="relative mx-auto grid max-w-5xl items-center gap-12 px-6 py-24 lg:grid-cols-2 lg:gap-16">
        <div>
            <p class="section-label hero-animate hero-animate-delay-1">Professional Portfolio</p>
            <h1 class="hero-animate hero-animate-delay-2 mt-4 text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl xl:text-6xl">
                Hi, I'm <span class="text-teal-700">{{ config('portfolio.name') }}</span>
            </h1>
            <p class="hero-animate hero-animate-delay-3 mt-4 text-xl font-medium text-slate-700 sm:text-2xl">
                {{ config('portfolio.title') }}
            </p>
            <p class="hero-animate hero-animate-delay-4 mt-6 max-w-xl text-lg leading-relaxed text-slate-600">
                {{ config('portfolio.tagline') }}
            </p>

            @if (config('portfolio.location'))
                <p class="hero-animate hero-animate-delay-5 mt-4 flex items-center gap-2 text-sm text-slate-500">
                    <svg class="h-4 w-4 text-teal-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                    {{ config('portfolio.location') }}
                </p>
            @endif

            <div class="hero-animate hero-animate-delay-5 mt-10 grid max-w-lg grid-cols-3 gap-4">
                <div class="stat-card text-center">
                    <p class="stat-value">3+</p>
                    <p class="stat-label">Years Experience</p>
                </div>
                <div class="stat-card text-center">
                    <p class="stat-value">98%</p>
                    <p class="stat-label">Target Achievement</p>
                </div>
                <div class="stat-card text-center">
                    <p class="stat-value">11</p>
                    <p class="stat-label">Performance Awards</p>
                </div>
            </div>

            <div class="hero-animate hero-animate-delay-6 mt-10 flex flex-wrap gap-4">
                <a href="#contact" class="btn-primary">Get in Touch</a>
                @if (config('portfolio.resume_url'))
                    <a href="{{ config('portfolio.resume_url') }}" class="btn-outline">
                        Request Resume
                    </a>
                @endif
            </div>

            <div class="mt-10 flex items-center gap-5">
                @if (config('portfolio.social.github'))
                    <a href="{{ config('portfolio.social.github') }}" target="_blank" rel="noopener" class="text-slate-400 transition-colors hover:text-teal-700" aria-label="GitHub">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.15 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.62.24 2.85.12 3.15.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z"/></svg>
                    </a>
                @endif
                @if (config('portfolio.social.linkedin'))
                    <a href="{{ config('portfolio.social.linkedin') }}" target="_blank" rel="noopener" class="text-slate-400 transition-colors hover:text-teal-700" aria-label="LinkedIn">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.062 2.062 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                @endif
                @if (config('portfolio.social.twitter'))
                    <a href="{{ config('portfolio.social.twitter') }}" target="_blank" rel="noopener" class="text-slate-400 transition-colors hover:text-teal-700" aria-label="Twitter">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                @endif
            </div>
        </div>

        @if (config('portfolio.photo_url'))
            <div class="hero-animate hero-animate-delay-3 relative mx-auto w-full max-w-sm lg:max-w-none">
                <div class="hero-photo-glow" aria-hidden="true"></div>
                <div class="hero-photo aspect-square max-h-[520px] lg:max-h-[600px]">
                    <img
                        src="{{ config('portfolio.photo_url') }}"
                        alt="{{ config('portfolio.name') }} — professional headshot"
                        width="2048"
                        height="2048"
                        loading="eager"
                    >
                </div>
                <div class="hero-photo-ring" aria-hidden="true"></div>
            </div>
        @endif
    </div>
</section>
