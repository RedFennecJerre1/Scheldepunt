<section class="space-y-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
        @foreach($latestNews as $news)
            <div class="bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none p-6 mb-6">
                <img src="{{ $news->img }}" ></img>
                <h2 class="text-gray-800 dark:text-gray-600 leading-relaxed bg-cover bg-center" >{{ $news->title }}</h2>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">{{ $news->content }}</p>
                <p class="mt-4 text-gray-500 dark:text-gray-500">{{ $news->user_name }} - {{ $news->created_at->diffForHumans() }}</p>
            </div>
        @endforeach
    </div>
</section>