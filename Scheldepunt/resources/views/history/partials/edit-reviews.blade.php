<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Edit Reviews') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('You can change your reviews here.') }}
        </p>
    </header>

    
    <div class="mt-16">
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">   
                                     <!-- Loop through your guest reviews here -->
                                     @php $showReview = false; @endphp
                                     @foreach($guestReviews as $review)
                                     @if($review->user_name == Auth::user()->name)
                                       @php $showReview = true; @endphp
                                       <div class="bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none p-6 mb-6">
                                        
                                       <form method="POST" action="{{ route('review.update', $review) }}">
                                        @csrf
                                        @method('PUT')
                                          <div>
                                                <x-input-label for="content" :value="__('Review')" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-400" />
                                                <x-text-input id="content" class="block w-full p-2 mb-4 border border-gray-300 rounded-md dark:text-gray-200 dark:border-gray-600 focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="content" :value="old('content', $review->content)"  />
                                                <x-input-error :messages="$errors->get('content')" class="mt-2" />
                                           </div>
                                           <x-primary-button class="ms-3">{{ __('Change review') }}</x-primary-button>
                                           
                                        
                                        </form>
                                        <form method="POST" action="{{ route('review.destroy', $review) }}">
                                           @csrf
                                           @method('DELETE')
                                           <x-danger-button class="ms-3"> {{ __('Delete review') }}</x-danger-button>
                                        </form>
                                        </div>
                                      @endif
                                     @endforeach
                                @if(!$showReview)
                                <div class="bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none p-6 mb-6">
                                       <p class="text-gray-600 dark:text-gray-400 leading-relaxed">There is no review of this user</p>
                               </div>
                                @endif
                    </div>
                 </div>
    </div>
</section>
