<section class="space-y-6">
<div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Guest Reviews</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">   
                                     <!-- Loop through your guest reviews here -->
                                     @foreach($guestReviews as $review)
                                       <div class="bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none p-6 mb-6">
                                           <p class="text-gray-800 dark:text-gray-600 leading-relaxed">{{ $review->content }}</p>
                                           @if($review->overal_rating > 6)
                                           <div class="mt-2">
                                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed"> Overal rating:</p>
                                               @for($i = 0; $i < $review->overal_rating; $i++)
                                               <span class="text-yellow-500">&#11088</span>
                                               @endfor
                                           </div>
                                           @endif
                                           @if($review->cleaness_rating > 6)
                                           <div class="mt-2">
                                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed"> Cleaness rating:</p>
                                               @for($i = 0; $i < $review->cleaness_rating; $i++)
                                               <span class="text-yellow-500">&#11088</span>
                                               @endfor
                                           </div>
                                           @endif
                                           @if($review->kindness_rating > 6)
                                           <div class="mt-2">
                                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed"> Kindness rating:</p>
                                               @for($i = 0; $i < $review->kindness_rating; $i++)
                                               <span class="text-yellow-500">&#11088</span>
                                               @endfor
                                           </div>
                                           @endif
                                           @if($review->neighbourhood_rating > 6)
                                           <div class="mt-2">
                                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed"> neighbourhood rating:</p>
                                               @for($i = 0; $i < $review->neighbourhood_rating; $i++)
                                               <span class="text-yellow-500">&#11088</span>
                                               @endfor
                                           </div>
                                           @endif
                                           <p class="mt-4 text-gray-500 dark:text-gray-500">{{ $review->user_name }} - {{ $review->created_at->diffForHumans() }}</p>
                                      </div>
                                     @endforeach
                                </div>

                            </div>
</section>