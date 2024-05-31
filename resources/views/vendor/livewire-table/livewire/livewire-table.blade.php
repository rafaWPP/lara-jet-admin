<div class="flex flex-col gap-3 relative"
    wire:init="init"
    @if(strlen($polling = $this->polling()) > 0) wire:poll.{{ $polling }} @endif
>
    @include('livewire-table::bar.bar')
    <div class="overflow-x-auto text-gray-800 dark:text-gray-200e shadow-sm rounded-md overscroll-x-none">
        @include('livewire-table::table.table')
    </div>
    <div class="text-gray-900 dark:text-white">
        {{ $paginator->links('livewire-table::pagination.pagination') }}
    </div>
</div>
