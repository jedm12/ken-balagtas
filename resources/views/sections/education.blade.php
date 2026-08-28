<section id="education" class="section-divider bg-white py-24">
    <div class="mx-auto max-w-5xl px-6">
        <div class="reveal">
            <p class="section-label">Education</p>
            <h2 class="section-title">Academic background</h2>
        </div>

        <div class="stagger-children mt-12 space-y-8">
            @foreach (config('portfolio.education') as $entry)
                <div class="card">
                    <div class="flex flex-col gap-1 sm:flex-row sm:items-start sm:justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-slate-900">{{ $entry['degree'] }}</h3>
                            <p class="card-subtitle">{{ $entry['school'] }}</p>
                        </div>
                        <span class="mt-1 shrink-0 text-sm text-slate-500">{{ $entry['period'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
