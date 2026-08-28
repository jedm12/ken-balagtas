<nav id="nav-bar" class="nav-bar fixed top-0 z-50 w-full border-b border-transparent bg-white/80 backdrop-blur-md">
    <div class="mx-auto flex max-w-5xl items-center justify-between px-6 py-4">
        <a href="#" class="text-lg font-bold text-slate-900 transition-colors hover:text-teal-700">
            {{ config('portfolio.name') }}
        </a>

        <button id="nav-toggle" type="button" class="text-slate-600 md:hidden" aria-label="Toggle navigation">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>

        <div id="nav-menu" class="hidden absolute left-0 right-0 top-full flex-col gap-1 border-b border-slate-200 bg-white px-6 py-4 shadow-sm md:static md:flex md:flex-row md:items-center md:gap-8 md:border-0 md:bg-transparent md:p-0 md:shadow-none">
            @foreach (config('portfolio.nav') as $item)
                <a
                    href="{{ $item['href'] }}"
                    data-nav-link
                    class="rounded-lg px-3 py-2 text-sm font-medium text-slate-600 transition-colors hover:text-teal-700"
                >
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>
    </div>
</nav>
