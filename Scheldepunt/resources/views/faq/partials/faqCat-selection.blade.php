<section class="space-y-6">
    <select name="faq_categories" id="faq_categories" onchange="window.location.href = this.value;">
        <option value="{{ route('faq.index') }}">All</option>
        @foreach($faqCategories as $faqCategory)
            <option value="{{ route('faq.show', $faqCategory) }}">{{ $faqCategory->name }}</option>
        @endforeach
        @if(Auth::user()->is_admin)
            <option value="{{ route('faq.add') }}">Add/Edit category</option>
        @endif
    </select>
</section>