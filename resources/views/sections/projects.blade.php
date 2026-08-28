<section id="projects" class="border-t border-slate-800/50 py-24">
    <div class="mx-auto max-w-5xl px-6">
        <p class="section-label">Projects</p>
        <h2 class="section-title">Things I've built</h2>

        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach (config('portfolio.projects') as $project)
                <a href="{{ $project['url'] }}" target="_blank" rel="noopener" class="card group flex flex-col">
                    <div class="flex items-start justify-between gap-4">
                        <h3 class="text-lg font-semibold text-white group-hover:text-emerald-400 transition-colors">
                            {{ $project['name'] }}
                        </h3>
                        <svg class="h-5 w-5 shrink-0 text-slate-600 transition-colors group-hover:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                        </svg>
                    </div>
                    <p class="mt-3 flex-1 text-sm leading-relaxed text-slate-400">
                        {{ $project['description'] }}
                    </p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        @foreach ($project['tags'] as $tag)
                            <span class="rounded-full bg-emerald-500/10 px-2.5 py-0.5 text-xs font-medium text-emerald-400">
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
