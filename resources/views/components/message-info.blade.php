@props(['alert', 'message'])

@php
    // Definir o ícone com base no tipo de alerta
    switch ($alert) {
        case 'success':
            $icon = 'fa-solid fa-check-circle text-green-500';
            $bgColor = 'bg-green-100';
            $borderColor = 'border-green-400';
            break;
        case 'warning':
            $icon = 'fa-solid fa-exclamation-triangle text-yellow-500';
            $bgColor = 'bg-yellow-100';
            $borderColor = 'border-yellow-400';
            break;
        case 'error':
            $icon = 'fa-solid fa-times-circle text-red-500';
            $bgColor = 'bg-red-100';
            $borderColor = 'border-red-400';
            break;
        default:
            $icon = '';
            $bgColor = '';
            $borderColor = '';
            break;
    }
@endphp

<div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" 
    class="fixed top-0 right-0 z-50 m-4 {{ $bgColor }} border {{ $borderColor }} text-gray-700 px-4 py-3 rounded animate-slide-in"
    x-transition:enter="transition duration-500 transform ease-out"
    x-transition:enter-start="opacity-0 translate-x-full"
    x-transition:enter-end="opacity-100 translate-x-0"
    x-transition:leave="transition duration-500 transform ease-in"
    x-transition:leave-start="opacity-100 translate-x-0"
    x-transition:leave-end="opacity-0 translate-x-full"
    @click.away="show = false"
    @keydown.escape.window="show = false"
    role="alert"
>
    <div class="flex items-center">
        @if($icon)
            <div class="mr-2">
                <i class="{{ $icon }}"></i>
            </div>
        @endif
        <div>
            <strong class="font-bold">{{ ucfirst($alert) }}!</strong>
            <span class="block sm:inline">{{ $message }}</span>
        </div>
    </div>
</div>
