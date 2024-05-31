@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="bg-white dark:bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4 rounded-lg shadow-lg overflow-hidden">
        <div class="flex justify-center">
            <div class="flex items-center justify-center h-12 w-12 rounded-full bg-transparent">
                <svg class="h-12 w-12 text-red-600 dark:text-red-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                </svg>
            </div>
        </div>
        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-center">
            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ $title }}
            </h3>
            <div class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                {{ $content }}
            </div>
        </div>
    </div>

    <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 dark:bg-gray-800">
        {{ $footer }}
    </div>
</x-modal>
