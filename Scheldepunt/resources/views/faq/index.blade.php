<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('FAQ') }}
        </h2>
    </x-slot>


    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
       <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <h2 class="text-3xl font-semibold text-gray-900 dark:text-white">Categories</h2>
            <div class="mt-16">
                <select name="faq_categories" id="faq_categories" onchange="window.location.href = this.value;">
                    <option value="{{ route('faq.index') }}">All</option>
                    @foreach($faqCategories as $faqCategory)
                        <option value="{{ route('faq.show', $faqCategory) }}">{{ $faqCategory->name }}</option>
                     @endforeach
                     @if(Auth::user()->is_admin)
                     <option value="{{ route('faq.add') }}">Add category</option>
                     @endif
                </select>
            </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                                     @foreach($faqs as $faq)
                                     <div class="bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none p-6 mb-6">
                                            <h1 class="text-gray-800 dark:text-gray-600 leading-relaxed">Category:</h1>
                                            <p class="text-gray-800 dark:text-gray-600 leading-relaxed">{{ $faq->faqCategory->name ?? 'Geen category' }}</p>
                                           <h1 class="text-gray-600 dark:text-gray-400 leading-relaxed">Question:</h1>
                                           <p class="text-gray-600 dark:text-gray-400 leading-relaxed">{{ $faq->question}}</p>
                                           <h1 class="mt-4 text-gray-500 dark:text-gray-500">Answer:</h1>
                                           <p class="mt-4 text-gray-500 dark:text-gray-500">{{ $faq->answer?? 'Er is nog geen antwoord op deze vraag' }}</p>
                                           @if(Auth::user()->is_admin)
                                           <div class="mt-4">
                                           <a href="{{ route('faq.edit', $faq) }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-600">Edit</a>
                                           </div>
                                           @endif
                                        </div>
                                     @endforeach
                                </div>
        </div>

                
    </div>
    

</x-app-layout>