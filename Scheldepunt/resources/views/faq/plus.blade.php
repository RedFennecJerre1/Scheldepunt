<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add FAQ') }}
        </h2>
    </x-slot>


    <div class="mt-16">
        <div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">   
                <div class="bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none p-6 mb-6">   
                @include('faq.partials.add-faq')

                </div>
            </div>
        </div>
    </div>
    

</x-app-layout>