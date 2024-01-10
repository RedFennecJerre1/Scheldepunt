<section class="space-y-6">
<div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Guestbook</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">   
                                     <!-- Loop through your guest reviews here -->
                                     @foreach($gBook as $book)
                                       <div class="bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none p-6 mb-6">
                                           <p class="text-gray-800 dark:text-gray-600 leading-relaxed">{{ $book->gbookcontent }}</p>
                                           <p class="mt-4 text-gray-500 dark:text-gray-500">{{ $book->gbookuser_name }} - {{ $book->created_at->diffForHumans() }}</p>
                                      </div>
                                     @endforeach
                                </div>

                            </div>
</section>