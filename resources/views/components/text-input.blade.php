@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-[#03f5a7] dark:focus:border-indigo-600 focus:ring-[#03f5a7] dark:focus:ring-indigo-600 rounded-md shadow-sm bg-white/20 border-1 border-blue/50 text-white']) }}>
