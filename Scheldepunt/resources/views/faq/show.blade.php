<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('FAQ') }}
        </h2>
    </x-slot>

    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <h2 class="text-3xl font-semibold text-gray-900 dark:text-white">Category:  {{ $faqCategory->name }} </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                @php $showfaq = false; @endphp
                @foreach($faqCategory->faqs as $faq)
                    @php $showfaq = true; @endphp
                    @include('faq.partials.show-faq')
                @endforeach
                @if(!$showfaq)
                    <div class="bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none p-6 mb-6">
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">There are no questions about this category</p>
                    </div>
                @endif
            </div>
            @include('faq.partials.add-faq-button')
            <x-primary-button onclick="goBack()">{{ __('Go Back') }}</x-primary-button>
    </div>
</div>

</x-app-layout>

<script>
    function goBack() {
        window.location.href = "{{ route('faq.index') }}";
    }
</script>