<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Latest news') }}
        </h2>
    </x-slot>


    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
       <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                   <h2 class="text-3xl font-semibold text-gray-900 dark:text-white">SCHELDEPUNT</h2>
                </div>

                <div class="mt-16">
                <div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Guest news</h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                                     <!-- Loop through your guest newss here -->
                                     @foreach($latestNews as $news)
                                       <div class="bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none p-6 mb-6">
                                        <img src="{{ $news->img }}" ></img>
                                       <h2 class="text-gray-800 dark:text-gray-600 leading-relaxed bg-cover bg-center" >{{ $news->title }}</h2>
                                           <p class="text-gray-600 dark:text-gray-400 leading-relaxed">{{ $news->content }}</p>
                                           <p class="mt-4 text-gray-500 dark:text-gray-500">{{ $news->user_name }} - {{ $news->created_at->diffForHumans() }}</p>
                                      </div>
                                     @endforeach
                                </div>

                            </div>
                    </div>
                </div>



                
            </div>
        </div>


</x-app-layout>