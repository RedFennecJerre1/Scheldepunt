<section class="space-y-6">
    @foreach($faqCategories as $faqCategory)
        <div class="bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none p-6 mb-6">
            <form method="POST" action="{{ route('faqCategory.update', $faqCategory) }}">
                @csrf
                @method('PUT')
                <div>
                    <x-input-label for="name" :value="__('Faq category')" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-400" />
                    <x-text-input id="name" class="block w-full p-2 mb-4 border border-gray-300 rounded-md dark:text-gray-200 dark:border-gray-600 focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="name" :value="old('name', $faqCategory->name)"  />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <x-primary-button class="ms-3">{{ __('Change category') }}</x-primary-button>
            </form>
            <form method="POST" action="{{ route('faqCategory.destroy', $faqCategory) }}">
                @csrf
                @method('DELETE')
                <x-danger-button class="ms-3"> {{ __('Delete category') }}</x-danger-button>
            </form>
        </div>
    @endforeach
    <form method="POST" action="/add/faqCategory">
        @csrf
        <div>
            <x-input-label for="name" :value="__('Nieuwe faq category')" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-400" />
            <x-text-input id="name" class="block w-full p-2 mb-4 border border-gray-300 rounded-md dark:text-gray-200 dark:border-gray-600 focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="name" :value="old('name')"  />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <x-primary-button class="ms-3"> {{ __('Add category') }}</x-primary-button>
    </form>
</section>