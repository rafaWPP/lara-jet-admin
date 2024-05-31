<div class="px-3 py-2 truncate text-black dark:text-gray-300">
    @if(($content = $column->getFooterContent()) !== null)
        {!! $content !!}
    @else
        &nbsp;
    @endif
</div>
