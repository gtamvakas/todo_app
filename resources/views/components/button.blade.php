<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex items-center px-4 py-2 bg-neutral-900 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-gray-900 hover:bg-white hover:text-black hover:border-black focus:outline-none focus:border-blue-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
