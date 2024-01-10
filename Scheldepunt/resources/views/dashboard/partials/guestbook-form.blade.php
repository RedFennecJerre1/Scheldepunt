<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Post something in the guestbook') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Give us some highlights of your stay. We and other travels would love to know why you liked your stay so much and what you did.') }}
        </p>
    </header>

    <form action="/dashboard/gbook" method="POST">
    
    @csrf

    <div>
            <x-input-label for="gbookuser_name" :value="__('Name')" />
            <x-text-input id="gbookuser_name" name="gbookuser_name" type="text" class="block w-full p-2 mb-4 bg-gray-100 border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-200 dark:border-gray-700 focus:outline-none focus:bg-white focus:border-blue-500"  :value="old('gbookuser_name', Auth::user()->name)"/>
            <x-input-error class="mt-2" :messages="$errors->get('gbookuser_name')" />
        </div>
        <div>
            <x-input-label for="gbookcontent" :value="__('guestbook')" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-400" />
            <x-text-input id="gbookcontent" class="block w-full p-2 mb-4 border border-gray-300 rounded-md dark:text-gray-200 dark:border-gray-600 focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="gbookcontent" :value="old('gbookcontent')"  />
            <x-input-error :messages="$errors->get('gbookcontent')" class="mt-2" />
        </div>

        
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Post in guestbook') }}
            </x-primary-button>
        </div>
    </form>
</section>
