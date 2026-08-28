<section id="contact" class="py-24">
    <div class="mx-auto max-w-5xl px-6">
        <div class="reveal">
            <p class="section-label">Contact</p>
            <h2 class="section-title">Let's connect</h2>
        </div>

        <div class="mt-12 grid gap-12 lg:grid-cols-2">
            <div class="reveal-left">
                <p class="text-lg leading-relaxed text-slate-600">
                    Interested in discussing a role in financial account management, collections, or accounts receivable support? I welcome inquiries from employers and recruiters.
                </p>

                <div class="mt-8 space-y-4">
                    <a href="mailto:{{ config('portfolio.email') }}" class="flex items-center gap-3 text-slate-700 transition-colors hover:text-teal-700">
                        <svg class="h-5 w-5 text-teal-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                        {{ config('portfolio.email') }}
                    </a>

                    @if (config('portfolio.phone'))
                        <a href="tel:{{ preg_replace('/[^0-9+]/', '', config('portfolio.phone')) }}" class="flex items-center gap-3 text-slate-700 transition-colors hover:text-teal-700">
                            <svg class="h-5 w-5 text-teal-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>
                            {{ config('portfolio.phone') }}
                        </a>
                    @endif
                </div>
            </div>

            <div class="reveal-scale card">
                @if (session('success'))
                    <div class="mb-6 rounded-lg border border-teal-200 bg-teal-50 px-4 py-3 text-sm text-teal-800">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                    @csrf

                    <div>
                        <label for="name" class="mb-2 block text-sm font-medium text-slate-700">Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required class="input-field" placeholder="Your name">
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="mb-2 block text-sm font-medium text-slate-700">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required class="input-field" placeholder="you@example.com">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="message" class="mb-2 block text-sm font-medium text-slate-700">Message</label>
                        <textarea id="message" name="message" rows="4" required class="input-field resize-none" placeholder="Tell me about the opportunity...">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn-primary w-full sm:w-auto">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
