@if($subcategory)
    <span class="px-3 py-1 rounded-full flex flex-row justify-center items-center gap-2 text-sm"
        style="color: {{ $subcategory->text_color }}; background-color: {{$subcategory->bg_color}};"
    >
        {{ $subcategory->title }}
    </span>
@endif