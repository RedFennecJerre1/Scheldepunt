<section class="space-y-6">
@if(Auth::user()->is_admin)
                <div class="mt-4">
                    <a href="{{ route('faq.plus') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-600">Add FAQ</a>
                </div>
            @endif
</section>