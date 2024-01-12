<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Latest news') }}
        </h2>
    </x-slot>


    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
       <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <h2 class="text-3xl font-semibold text-gray-900 dark:text-white">User Information</h2>
            </div>

            <div class="card-body">
                <h4 class="text-xl font-semibold text-gray-900 dark:text-white">{{ $user->name }}</h4>
                <p class="card-text">Email: {{ $user->email }}</p>
                <p class="card-text">Birthday: {{ $user->birthday }}</p>
                <p class="card-text">About this user: {{ $user->about }}</p>
                @if(Auth::user()->is_admin)
                @if($user->is_admin)
                <form action="{{ route('user.downgrade', $user) }}" method="POST">
                     @csrf
                     <x-danger-button class="ms-3"> {{ __('Downgrade from admin') }}</x-danger-button>
                </form>
                @else
                <form action="{{ route('user.upgrade', $user) }}" method="POST">
                     @csrf
                     <x-primary-button class="ms-3">{{ __('Upgrade to admin') }}</x-primary-button>
                </form>
                @endif
                @endif
            </div>
        </div>          
    </div>
</x-app-layout>