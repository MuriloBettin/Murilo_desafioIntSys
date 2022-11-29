<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-yellow-400 dark:bg-yellow-200 border border-transparent rounded-md font-semibold text-xs text-black dark:text-yellow-800 uppercase tracking-widest hover:bg-yellow-500 dark:hover:bg-yellow-300 focus:bg-yellow-600 dark:focus:bg-white active:bg-yellow-600 dark:active:bg-yellow-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-yellow-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
