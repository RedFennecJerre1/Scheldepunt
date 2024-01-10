<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Post news') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('This is a news of your stay at our place. This news will be seen by others and can later be changed') }}
        </p>
    </header>

    <form action="/dashboard" method="POST">
    
    @csrf
    <div>
            <x-input-label for="user_name" :value="__('Name')" />
            <x-text-input id="user_name" name="user_name" type="text" class="block w-full p-2 mb-4 bg-gray-100 border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-200 dark:border-gray-700 focus:outline-none focus:bg-white focus:border-blue-500"  :value="old('user_name', Auth::user()->name)"/>
            <x-input-error class="mt-2" :messages="$errors->get('user_name')" />
        </div>
        <div>
            <x-input-label for="title" :value="__('Title')" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-400" />
            <x-text-input id="title" class="block w-full p-2 mb-4 border border-gray-300 rounded-md dark:text-gray-200 dark:border-gray-600 focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="title" :value="old('title')"  />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>
        <!-- <div>
             <x-input-label for="img" :value="__('Image')" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-400" />
             <x-file-input id="img" name="img" class="block w-full p-2 mb-4 border border-gray-300 rounded-md dark:text-gray-200 dark:border-gray-600 focus:outline-none focus:bg-white focus:border-blue-500" type="file" name="img" :value="old('img')" />
             <x-input-error :messages="$errors->get('img')" class="mt-2" />
        </div>  -->
        <div>
            <x-input-label for="content" :value="__('News')" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-400" />
            <x-text-input id="content" class="block w-full p-2 mb-4 border border-gray-300 rounded-md dark:text-gray-200 dark:border-gray-600 focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="content" :value="old('content')"  />
            <x-input-error :messages="$errors->get('content')" class="mt-2" />
        </div>

        
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Post news') }}
            </x-primary-button>
        </div>
    </form>
</section>
