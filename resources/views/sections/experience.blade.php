<section id="experience" class="py-24">
    <div class="mx-auto max-w-5xl px-6">
        <div class="reveal">
            <p class="section-label">Experience</p>
            <h2 class="section-title">Professional experience</h2>
        </div>

        <div class="mt-12 space-y-8">
            @foreach (config('portfolio.experience') as $job)
                <div class="timeline-item reveal">
                    <span class="timeline-dot" aria-hidden="true"></span>
                    <div class="card">
                        <div class="flex flex-col gap-1 sm:flex-row sm:items-start sm:justify-between">
                            <div>
                                <h3 class="text-xl font-semibold text-slate-900">{{ $job['role'] }}</h3>
                                <p class="card-subtitle">{{ $job['company'] }}</p>
                            </div>
                            <span class="mt-1 shrink-0 rounded-full bg-teal-50 px-3 py-1 text-sm font-medium text-teal-800 ring-1 ring-teal-100">{{ $job['period'] }}</span>
                        </div>
                        <p class="mt-4 text-slate-600">{{ $job['description'] }}</p>
                        @if (! empty($job['achievements']))
                            <ul class="mt-4 space-y-2">
                                @foreach ($job['achievements'] as $achievement)
                                    <li class="flex gap-2 text-sm text-slate-700">
                                        <span class="text-teal-600">&bull;</span>
                                        {{ $achievement }}
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
