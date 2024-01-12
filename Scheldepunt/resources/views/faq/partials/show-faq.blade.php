<section class="space-y-6">

    <div class="bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none p-6 mb-6">
        <h1 class="text-gray-800 dark:text-gray-600 leading-relaxed">Category:</h1>
        <p class="text-gray-800 dark:text-gray-600 leading-relaxed">{{ $faq->faqCategory->name ?? 'No category' }}</p>
        <h1 class="text-gray-600 dark:text-gray-400 leading-relaxed">Question:</h1>
        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">{{ $faq->question}}</p>
        <h1 class="mt-4 text-gray-500 dark:text-gray-500">Answer:</h1>
        <p class="mt-4 text-gray-500 dark:text-gray-500">{{ $faq->answer?? 'There is not yet an answer to this question' }}</p>
        @if (Route::has('login'))
        @auth
        @if(Auth::user()->is_admin)
        <div class="mt-4">
            <a href="{{ route('faq.edit', $faq) }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-600">Edit</a>
        </div>
        @endif
        @endauth
        @endif
    </div>
</section>