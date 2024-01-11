<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add FAQ category') }}
        </h2>
    </x-slot>

    <div class="mt-16">
        <div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">   
            @include('faq.partials.update-faqCat')      
            </div>
        </div>
    </div>
    
    

</x-app-layout>