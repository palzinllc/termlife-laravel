<footer class="bg-[hsl(0,0%,8%)] border-t border-[hsl(0,0%,15%)]">
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div>
                <img src="{{ asset('images/logo.png') }}" alt="CostPlus Life Insurance" class="h-10 mb-4 brightness-0 invert">
                <p class="text-sm text-gray-400 mb-4">
                    Helping Canadians find affordable term life insurance from top providers.
                </p>
                <p class="text-xs text-gray-500 italic">
                    Owned & Operated by Immunis Financial Brokers Inc.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="font-semibold mb-4 text-gray-100">Quick Links</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="/what-is-term-life" class="text-sm text-gray-400 hover:text-primary transition-colors">
                            What is Term Life?
                        </a>
                    </li>
                    <li>
                        <a href="/who-needs-this" class="text-sm text-gray-400 hover:text-primary transition-colors">
                            Who Needs This?
                        </a>
                    </li>
                    <li>
                        <a href="/how-to-choose" class="text-sm text-gray-400 hover:text-primary transition-colors">
                            How to Choose?
                        </a>
                    </li>
                    <li>
                        <a href="/blog" class="text-sm text-gray-400 hover:text-primary transition-colors">
                            Blog
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Use Cases -->
            <div>
                <h3 class="font-semibold mb-4 text-gray-100">Who Needs This?</h3>
                <ul class="space-y-2">
                    @foreach(array_slice($useCases, 0, 5) as $useCase)
                        <li>
                            <a href="{{ $useCase['path'] }}" class="text-sm text-gray-400 hover:text-primary transition-colors">
                                {{ $useCase['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- More Use Cases + Legal -->
            <div>
                <h3 class="font-semibold mb-4 text-gray-100">More Use Cases</h3>
                <ul class="space-y-2 mb-6">
                    @foreach(array_slice($useCases, 5) as $useCase)
                        <li>
                            <a href="{{ $useCase['path'] }}" class="text-sm text-gray-400 hover:text-primary transition-colors">
                                {{ $useCase['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                
                <h3 class="font-semibold mb-4 text-gray-100">Legal</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="/code-of-conduct" class="text-sm text-gray-400 hover:text-primary transition-colors">
                            Code of Conduct
                        </a>
                    </li>
                    <li>
                        <a href="/disclosures" class="text-sm text-gray-400 hover:text-primary transition-colors">
                            Disclosures
                        </a>
                    </li>
                    <li>
                        <a href="/privacy-policy" class="text-sm text-gray-400 hover:text-primary transition-colors">
                            Privacy Policy
                        </a>
                    </li>
                    <li>
                        <a href="/terms" class="text-sm text-gray-400 hover:text-primary transition-colors">
                            Terms of Service
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-[hsl(0,0%,15%)] mt-8 pt-8">
            <p class="text-sm text-gray-400 text-center mb-4">
                © {{ date('Y') }} CostPlus Life Insurance. All rights reserved.
            </p>
            <p class="text-xs text-gray-500 text-center max-w-4xl mx-auto leading-relaxed">
                The information and content of this site is intended for general informational purposes only. It is not intended to constitute insurance, legal, financial, tax or any other professional advice or services. Insurance policy wordings are subject to change at any time, without prior notice. Please, read the Privacy Policy & Terms and Conditions for all legal restrictions.
            </p>
        </div>
    </div>
</footer>
