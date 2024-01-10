<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Post review') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('This is a review of your stay at our place. This review will be seen by others and can later be changed') }}
        </p>
    </header>

    <form action="/review" method="POST">
    
    @csrf
    <div>
            <x-input-label for="user_name" :value="__('Name:')" />
            <x-text-input id="user_name" name="user_name" type="text" class="block w-full p-2 mb-4 bg-gray-100 border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-200 dark:border-gray-700 focus:outline-none focus:bg-white focus:border-blue-500"  :value="old('user_name', Auth::user()->name)"/>
            <x-input-error class="mt-2" :messages="$errors->get('user_name')" />
        </div>
        <div id="ratings">
        <div id="rating-container">
            <x-input-label for="cleaness_rating" :value="__('Clean Rating: ')" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-400" />
            <input type="range" min="1" max="10" value="1"  id="cleaness_rating">
            <div id="cleaness-number">1</div>
        </div>
        <div id="rating-container">
            <x-input-label for="kindness_rating" :value="__('Kindness Rating: ')" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-400" />
            <input type="range" min="1" max="10" value="1"  id="kindness_rating">
            <div id="kindness-number">1</div>
        </div>
        <div id="rating-container">
            <x-input-label for="neighbourhood_rating" :value="__('Neighbourhood Rating: ')" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-400" />
            <input type="range" min="1" max="10" value="1"  id="neighbourhood_rating">
            <div id="neighbourhood-number">1</div>
        </div>
        <div id="rating-container">
            <x-input-label for="overal_rating" :value="__('Overal Rating: ')" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-400" />
            <input type="range" min="1" max="10" value="1"  id="overal_rating">
            <div id="overal-number">1</div>
        </div>
        </div>
        <div>
            <x-input-label for="content" :value="__('Review:')" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-400" />
            <x-text-input id="content" class="block w-full p-2 mb-4 border border-gray-300 rounded-md dark:text-gray-200 dark:border-gray-600 focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="content" :value="old('content')"  />
            <x-input-error :messages="$errors->get('content')" class="mt-2" />
        </div>

        
        
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Post review') }}
            </x-primary-button>
        </div>
    </form>

<script>
document.getElementById('overal_rating').oninput = function() {
    document.getElementById('overal-number').textContent = this.value;
}
document.getElementById('cleaness_rating').oninput = function() {
    document.getElementById('cleaness-number').textContent = this.value;
}
document.getElementById('kindness_rating').oninput = function() {
    document.getElementById('kindness-number').textContent = this.value;
}
document.getElementById('neighbourhood_rating').oninput = function() {
    document.getElementById('neighbourhood-number').textContent = this.value;
}
</script>

</section>
