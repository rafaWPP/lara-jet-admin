<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-offset-2  disabled:opacity-50 transition ease-in-out duration-150 btn-primary-gradient']) }}>
    {{ $slot }}
</button>
