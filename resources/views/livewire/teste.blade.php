<!-- resources/views/livewire/modal-example.blade.php -->

<x-jet-admin::dashboard-layout>
     @section('title', 'UI UX')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ui Elements') }}
        </h2>
    </x-slot>

     <div class="py-12">
        <div class="mx-auto py-10 sm:px-6 lg:px-8">
                @livewire('form')
        </div>
    </div>
    <div class="py-12">
        <div class="mx-auto py-10 sm:px-12 lg:px-12">
            <livewire:user-table />
        </div>
    </div>
</x-jet-admin::dashboard-layout>
