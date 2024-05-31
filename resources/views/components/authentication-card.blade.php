<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
        <div class="flex flex-col items-center">
            {{ $logo }}
            <br>
            <div class="inline-flex items-center gap-2 text-lg font-semibold tracking-wide text-slate-800 transition hover:opacity-75 active:opacity-100 dark:text-slate-200">
                            <span class="text-primary-600 dark:text-primary-400">{{ config('app.name') }}</span>

            </div>
        </div>
        {{ $slot }}
    </div>
</div>
