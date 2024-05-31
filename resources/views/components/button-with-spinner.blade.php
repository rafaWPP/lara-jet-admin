@props(['loading', 'color', 'icon'])

@php
    // Definir classes base
    $baseClasses = "text-white bg-gradient-to-r hover:bg-gradient-to-br focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2";

    // Definir classes de sombra e espaçamento padrão
    $shadowClasses = "shadow-lg shadow-{$color}-500/50 dark:shadow-lg dark:shadow-{$color}-800/80 me-2";

    // Ajustar as classes com base na cor
    switch ($color) {
        case 'green':
            $colorClasses = "from-green-400 via-green-500 to-green-600 focus:ring-green-300 dark:focus:ring-green-800";
            break;
        case 'blue':
            $colorClasses = "from-blue-500 via-blue-600 to-blue-700 focus:ring-blue-300 dark:focus:ring-blue-800";
            break;
        case 'cyan':
            $colorClasses = "from-cyan-400 via-cyan-500 to-cyan-600 focus:ring-cyan-300 dark:focus:ring-cyan-800";
            break;
        case 'teal':
            $colorClasses = "from-teal-400 via-teal-500 to-teal-600 focus:ring-teal-300 dark:focus:ring-teal-800";
            break;
        case 'lime':
            $colorClasses = "from-lime-200 via-lime-400 to-lime-500 focus:ring-lime-300 dark:focus:ring-lime-800";
            $baseClasses = "text-gray-900 bg-gradient-to-r hover:bg-gradient-to-br focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2";
            break;
        case 'red':
            $colorClasses = "from-red-400 via-red-500 to-red-600 focus:ring-red-300 dark:focus:ring-red-800";
            break;
        case 'pink':
            $colorClasses = "from-pink-400 via-pink-500 to-pink-600 focus:ring-pink-300 dark:focus:ring-pink-800";
            break;
        case 'purple':
            $colorClasses = "from-purple-500 via-purple-600 to-purple-700 focus:ring-purple-300 dark:focus:ring-purple-800";
            break;
        default:
            $colorClasses = "from-gray-400 via-gray-500 to-gray-600 focus:ring-gray-300 dark:focus:ring-gray-800";
            break;
    }
@endphp

<button wire:click="{{ $loading }}" wire:loading.attr="disabled" type="button" class="{{ $baseClasses }} {{ $colorClasses }} {{ $shadowClasses }}">
    <span wire:loading wire:target="{{ $loading }}">
       <div role="status">
           <svg class="inline w-4 h-4 text-gray-800 animate-spin dark:text-gray-800 fill-gray-800 dark:fill-gray-300 mr-2" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
</svg>

            <span class="sr-only">Loading...</span>
        </div>
    </span>
    <span>
        <i  wire:loading.remove wire:target="{{ $loading }}" class="{{ $icon }} w-4 h-4 me-2"></i>
        {{ $slot }}
    </span>
</button>
