<section class="space-y-6">

<form method="POST" action="/add/faq">
                                        @csrf
                                        <x-input-label for="category" :value="__('Faq category')" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-400" />
                                        <select name="faq_category_id" id="faq_category_id">
                                         @foreach($faqCategories as $faqCategory)
                                             <option value="{{$faqCategory->id }}">{{ $faqCategory->name }}</option>
                                        @endforeach
                                        </select>
                                        <div>
                                                <x-input-label for="question" :value="__('Faq question')" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-400" />
                                                <x-text-input id="question" class="block w-full p-2 mb-4 border border-gray-300 rounded-md dark:text-gray-200 dark:border-gray-600 focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="question" :value="old('question')"  />
                                                <x-input-error :messages="$errors->get('question')" class="mt-2" />
                                        </div>
                                        <div>
                                                <x-input-label for="answer" :value="__('Faq answer')" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-400" />
                                                <x-text-input id="answer" class="block w-full p-2 mb-4 border border-gray-300 rounded-md dark:text-gray-200 dark:border-gray-600 focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="answer" :value="old('answer')"  />
                                                <x-input-error :messages="$errors->get('answer')" class="mt-2" />
                                           </div>
                                           <x-primary-button class="ms-3">{{ __('Add FAQ') }}</x-primary-button>
                                        </form>
</section>