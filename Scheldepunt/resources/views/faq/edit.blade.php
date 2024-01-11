<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit FAQ') }}
        </h2>
    </x-slot>


    <div class="mt-16">
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">   
                                       <div class="bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none p-6 mb-6">
                                        
                                       <h1 class="text-gray-600 dark:text-gray-400 leading-relaxed">Question:</h1>
                                       <p class="text-gray-600 dark:text-gray-400 leading-relaxed">{{ $faq->question}}</p>
                                           
                                       <form method="POST" action="{{ route('faq.update', $faq) }}">
                                        @csrf
                                        @method('PUT')
                                        <select name="faq_category_id" id="faq_category_id">
                                         @foreach($faqCategories as $faqCategory)
                                             <option value="{{$faqCategory->id }}">{{ $faqCategory->name }}</option>
                                        @endforeach
                                        </select>
                                        <div>
                                                <x-input-label for="question" :value="__('Faq question')" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-400" />
                                                <x-text-input id="question" class="block w-full p-2 mb-4 border border-gray-300 rounded-md dark:text-gray-200 dark:border-gray-600 focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="question" :value="old('question', $faq->question ?? 'Geen antwoord')"  />
                                                <x-input-error :messages="$errors->get('question')" class="mt-2" />
                                           </div>
                                        
                                        <div>
                                                <x-input-label for="answer" :value="__('Faq answer')" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-400" />
                                                <x-text-input id="answer" class="block w-full p-2 mb-4 border border-gray-300 rounded-md dark:text-gray-200 dark:border-gray-600 focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="answer" :value="old('answer', $faq->answer ?? 'Geen antwoord')"  />
                                                <x-input-error :messages="$errors->get('answer')" class="mt-2" />
                                           </div>
                                           <x-primary-button class="ms-3">{{ __('Change') }}</x-primary-button>
                                           
                                        
                                        </form>
                                        <form method="POST" action="{{ route('faq.destroy', $faq) }}">
                                           @csrf
                                           @method('DELETE')
                                           <x-danger-button class="ms-3"> {{ __('Delete faq') }}</x-danger-button>
                                        </form>
                                        </div>
                    </div>
                 </div>
    </div>
    

</x-app-layout>