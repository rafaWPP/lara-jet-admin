@props(['loading', 'color', 'icon', 'text', 'size' => 'medium'])

@php
    // Definir classes base
    $baseClasses = "text-{$color}-700 border border-{$color}-700 hover:bg-{$color}-700 hover:text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-center inline-flex items-center justify-center me-2 mb-2";
    $darkClasses = "dark:border-{$color}-500 dark:text-{$color}-500 dark:hover:text-white dark:hover:bg-{$color}-500 dark:focus:ring-{$color}-800";
    $focusRingColor = 'focus:ring-' . $color . '-300';

    // Ajustar classes base com base no tamanho
    switch ($size) {
        case 'small':
            $sizeClasses = 'text-xs px-2 py-1.5';
            $spinnerSize = 'w-3 h-3';
            break;
        case 'large':
            $sizeClasses = 'text-lg px-6 py-3';
            $spinnerSize = 'w-6 h-6';
            break;
        case 'medium':
        default:
            $sizeClasses = 'text-sm px-4 py-2';
            $spinnerSize = 'w-4 h-4';
            break;
    }

    // Ajustar as classes com base na cor
    switch ($color) {
        case 'blue':
            $focusRingColor = 'focus:ring-blue-300';
            break;
        case 'gray':
            $focusRingColor = 'focus:ring-gray-300';
            $darkClasses = "dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800";
            break;
        case 'green':
            $focusRingColor = 'focus:ring-green-300';
            $darkClasses = "dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800";
            break;
        case 'red':
            $focusRingColor = 'focus:ring-red-300';
            $darkClasses = "dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900";
            break;
        case 'yellow':
            $focusRingColor = 'focus:ring-yellow-300';
            $darkClasses = "dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900";
            break;
        case 'purple':
            $focusRingColor = 'focus:ring-purple-300';
            $darkClasses = "dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900";
            break;
        default:
            $focusRingColor = 'focus:ring-gray-300';
            break;
    }
@endphp

<button wire:click="{{ $loading }}" wire:loading.attr="disabled" type="button" class="{{ $baseClasses }} {{ $focusRingColor }} {{ $darkClasses }} {{ $sizeClasses }}">
    <span wire:loading wire:target="{{ $loading }}" @isset($text) class="mr-1" @endisset>
        <div role="status">
            <svg aria-hidden="true" class="inline {{ $spinnerSize }} text-gray-200 animate-spin dark:text-gray-600 fill-gray-600 dark:fill-gray-300 " viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">

                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
            </svg>
            <span class="sr-only">Loading...</span>
        </div>
    </span>
    <span wire:loading.remove wire:target="{{ $loading }}">
        @isset($icon)
            <i class="{{ $icon }} {{ $spinnerSize }}"></i>
        @endisset
        @isset($slot)
            {{ $slot }}
        @endisset
    </span>
</button>
