<section id="skills" class="section-divider bg-white py-24">
    <div class="mx-auto max-w-5xl px-6">
        <div class="reveal">
            <p class="section-label">Skills</p>
            <h2 class="section-title">Skills & strengths</h2>
        </div>

        <div class="stagger-children mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach (config('portfolio.skills') as $group)
                <div class="card">
                    <div class="flex items-center gap-3">
                        <span class="skill-category-icon">
                            @include('partials.skill-icon', ['icon' => $group['icon'] ?? 'default', 'class' => 'h-5 w-5'])
                        </span>
                        <h3 class="card-title">{{ $group['category'] }}</h3>
                    </div>
                    <div class="mt-5 flex flex-wrap gap-2">
                        @foreach ($group['items'] as $skill)
                            @php
                                $skillName = is_array($skill) ? $skill['name'] : $skill;
                                $skillIcon = is_array($skill) ? ($skill['icon'] ?? 'default') : 'default';
                            @endphp
                            <span class="skill-tag">
                                @include('partials.skill-icon', ['icon' => $skillIcon, 'class' => 'h-3.5 w-3.5'])
                                <span>{{ $skillName }}</span>
                            </span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
