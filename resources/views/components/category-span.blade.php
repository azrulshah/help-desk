@if($category)
    <span class="px-3 py-1 rounded-full flex flex-row justify-center items-center gap-2 text-sm">
        {{ $category->title }}
    </span>
@endif