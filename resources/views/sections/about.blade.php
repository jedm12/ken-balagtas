<section id="about" class="py-24">
    <div class="mx-auto max-w-5xl px-6">
        <div class="reveal">
            <p class="section-label">About</p>
            <h2 class="section-title">A bit about me</h2>
        </div>

        <div class="mt-12 grid gap-12 lg:grid-cols-5">
            <div class="reveal-left lg:col-span-3">
                <p class="text-lg leading-relaxed text-slate-600">
                    {{ config('portfolio.about.summary') }}
                </p>
            </div>

            <div class="reveal lg:col-span-2">
                <h3 class="text-sm font-semibold uppercase tracking-widest text-slate-500">Performance highlights</h3>
                <ul class="mt-4 space-y-4">
                    @foreach (config('portfolio.about.highlights') as $highlight)
                        <li class="flex gap-3 text-slate-700">
                            <svg class="mt-1 h-5 w-5 shrink-0 text-teal-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            <span>{{ $highlight }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
