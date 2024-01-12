<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contact') }}
        </h2>
    </x-slot>


    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
       <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <h2 class="text-3xl font-semibold text-gray-900 dark:text-white">Contact Form</h2>
            </div>

            <div class="card-body">
            <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <x-text-input type="hidden" id="name" name="name" value="{{ Auth::user()->name }}"/>
        <x-text-input type="hidden" id="email" name="email" value="{{ Auth::user()->email }}"/>

        <div>
            <x-input-label for="message" :value="__('Message')" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-400" />
            <x-text-input id="message" class="block w-full p-2 mb-4 border border-gray-300 rounded-md dark:text-gray-200 dark:border-gray-600 focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="message" :value="old('message')"  />
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
        </div>
        <x-primary-button class="ms-3">{{ __('Submit') }}</x-primary-button>
    </form>
            </div>
        </div>          
    </div>
</x-app-layout>