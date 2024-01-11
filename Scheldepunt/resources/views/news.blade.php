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
                    @include('news.partials.show-news')
                </div>
            </div>
        </div>          
    </div>
</x-app-layout>