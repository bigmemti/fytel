@props(['disabled' => false])

<select  @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-emerald-500 dark:focus:border-emerald-600 focus:ring-emerald-500 dark:focus:ring-emerald-600 rounded-md shadow-sm']) }}>
    <option>{{ __('Plase select') }}</option>
    {{ $slot }}
</select>