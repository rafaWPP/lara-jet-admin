@props(['on','alert','message'])

@php
    // Definir o ícone com base no tipo de alerta
    switch ($alert) {
        case 'success':
            $iconSVG = '<svg class="h-10 w-10 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>';
            $bgColor = 'bg-green-100';
            $textColor = 'text-green-700';
            $borderColor = 'border-green-400';
            break;
        case 'warning':
            $iconSVG = '<svg class="h-10 w-10" class="h-12 w-12 text-red-600 dark:text-red-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                </svg>';
            $bgColor = 'bg-yellow-100';
            $textColor = 'text-yellow-700';
            $borderColor = 'border-yellow-400';
            break;
        case 'error':
            $iconSVG = '<svg  class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
<linearGradient id="SVGID_1__olDsW0G3zz22_gr1" x1="37.227" x2="10.773" y1="10.773" y2="37.227" gradientUnits="userSpaceOnUse"><stop offset=".014" stop-color="#fe6d60"></stop><stop offset=".046" stop-color="#fe766a"></stop><stop offset=".208" stop-color="#fea097"></stop><stop offset=".37" stop-color="#ffc2bd"></stop><stop offset=".532" stop-color="#ffddda"></stop><stop offset=".692" stop-color="#fff0ee"></stop><stop offset=".849" stop-color="#fffbfb"></stop><stop offset="1" stop-color="#fff"></stop></linearGradient><circle cx="24" cy="24" r="18.707" fill="url(#SVGID_1__olDsW0G3zz22_gr1)"></circle><path fill="none" stroke="#e02f24" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" d="M35.401,38.773C32.248,41.21,28.293,42.66,24,42.66C13.695,42.66,5.34,34.305,5.34,24	c0-2.648,0.551-5.167,1.546-7.448"></path><path fill="none" stroke="#e02f24" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" d="M12.077,9.646C15.31,6.957,19.466,5.34,24,5.34c10.305,0,18.66,8.354,18.66,18.66	c0,2.309-0.419,4.52-1.186,6.561"></path><line x1="31.105" x2="16.895" y1="16.895" y2="31.105" fill="none" stroke="#e02f24" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"></line><line x1="31.105" x2="16.895" y1="31.105" y2="16.895" fill="none" stroke="#e02f24" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"></line>
</svg>';
            $bgColor = 'bg-red-100';
            $textColor = 'text-red-700';
            $borderColor = 'border-red-400';
            break;
        default:
            $iconSVG = '';
            $bgColor = '';
            $textColor = '';
            $borderColor = '';
            break;
    }
@endphp

<div x-data="{ shown: false, timeout: null }"
    x-init="@this.on('{{ $on }}', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 5000); })"
    x-show.transition.out.opacity.duration.1500ms="shown"
    x-transition:enter="transition duration-500 transform ease-out"
    x-transition:enter-start="opacity-0 translate-x-full"
    x-transition:enter-end="opacity-100 translate-x-0"
    x-transition:leave="transition duration-500 transform ease-in"
    x-transition:leave-start="opacity-100 translate-x-0"
    x-transition:leave-end="opacity-0 translate-x-full"
    class="fixed top-0 right-0 z-50 m-4 {{ $bgColor }} border {{ $borderColor }} {{ $textColor }} px-4 py-3 rounded"
    style="display: none;"
    {{ $attributes->merge(['class' => 'text-sm text-gray-600 dark:text-gray-400']) }}>
    <div class="flex items-center">
        @if($iconSVG)
            <div class="mr-2">
                {!! $iconSVG !!}
            </div>
        @endif
        <div>
            <strong class="font-bold">{{ ucfirst($alert) }}!</strong>
            <span class="block sm:inline">{{ $message }}</span>
        </div>
    </div>
</div>
