<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <!-- invoegen van guestbook na inloggen --> 
    <form action="/dashboard" method="POST">
    
    @csrf
    <div class="p-6 mb-6 bg-white rounded-lg shadow-md dark:bg-gray-800" style="height:auto; overflow:auto;">
        <h2>Post a review</h2>
    <div>
            <x-input-label for="user_name" :value="__('Name')" />
            <x-text-input id="user_name" name="user_name" type="text" class="block w-full p-2 mb-4 bg-gray-100 border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-200 dark:border-gray-700 focus:outline-none focus:bg-white focus:border-blue-500"  :value="old('user_name', Auth::user()->name)"/>
            <x-input-error class="mt-2" :messages="$errors->get('user_name')" />
        </div>
        <div>
            <x-input-label for="content" :value="__('Review')" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-400" />
            <x-text-input id="content" class="block w-full p-2 mb-4 border border-gray-300 rounded-md dark:text-gray-200 dark:border-gray-600 focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="content" :value="old('content')"  />
            <x-input-error :messages="$errors->get('content')" class="mt-2" />
        </div>

        
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Post review') }}
            </x-primary-button>
        </div>
    </div>
    </form>

</x-app-layout>
