
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
        <x-input-label for="birthday" :value="__('Birthday')" />
        <x-text-input id="birthday" name="birthday" type="date" class="mt-1 block w-full" :value="old('birthday')" required autocomplete="birthday" />
        <x-input-error class="mt-2" :messages="$errors->get('birthday')" />
    </div>

    <div>
        <x-input-label for="avatar" :value="__('Avatar')" />
        <x-text-input id="avatar" name="avatar" type="file" class="mt-1 block w-full" :value="old('avatar')" required autocomplete="avatar" />
        <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
    </div>

    <div>
        <x-input-label for="about" :value="__('About me')" />
        <x-text-input id="about" name="about" type="text" class="mt-1 block w-full" :value="old('about')" required autocomplete="about" />
        <x-input-error class="mt-2" :messages="$errors->get('about')" />
    </div>


        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
