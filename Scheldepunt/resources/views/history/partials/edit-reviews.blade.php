<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Edit news') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('You can change your news here.') }}
        </p>
    </header>

    
    <div class="mt-16">
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">   
                                     <!-- Loop through your guest newss here -->
                                     @php $shownews = false; @endphp
                                     @foreach($latestNews as $latest_news)
                                       @php $shownews = true; @endphp
                                       <div class="bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none p-6 mb-6">
                                        
                                       <form method="POST" action="{{ route('latestNews.updateTitle', $latest_news) }}">
                                        @csrf
                                        @method('PUT')
                                          <div>
                                                <x-input-label for="title" :value="__('News title')" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-400" />
                                                <x-text-input id="title" class="block w-full p-2 mb-4 border border-gray-300 rounded-md dark:text-gray-200 dark:border-gray-600 focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="title" :value="old('title', $latest_news->title)"  />
                                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                           </div>
                                           <x-primary-button class="ms-3">{{ __('Change title') }}</x-primary-button>
                                           
                                        
                                        </form>
                                       <form method="POST" action="{{ route('latestNews.update', $latest_news) }}">
                                        @csrf
                                        @method('PUT')
                                          <div>
                                                <x-input-label for="content" :value="__('News content')" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-400" />
                                                <x-text-input id="content" class="block w-full p-2 mb-4 border border-gray-300 rounded-md dark:text-gray-200 dark:border-gray-600 focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="content" :value="old('content', $latest_news->content)"  />
                                                <x-input-error :messages="$errors->get('content')" class="mt-2" />
                                           </div>
                                           <x-primary-button class="ms-3">{{ __('Change news') }}</x-primary-button>
                                           
                                        
                                        </form>
                                        <form method="POST" action="{{ route('latestNews.destroy', $latest_news) }}">
                                           @csrf
                                           @method('DELETE')
                                           <x-danger-button class="ms-3"> {{ __('Delete news') }}</x-danger-button>
                                        </form>
                                        </div>
                                     @endforeach
                                @if(!$shownews)
                                <div class="bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none p-6 mb-6">
                                       <p class="text-gray-600 dark:text-gray-400 leading-relaxed">There is no news</p>
                               </div>
                                @endif
                    </div>
                 </div>
    </div>
</section>
