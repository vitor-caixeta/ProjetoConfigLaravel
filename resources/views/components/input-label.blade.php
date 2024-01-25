@props(['value'])

<label {{ $attributes->merge(['class' => 'font-semibold text-white w-full px-3 py-5 rounded']) }}>
    {{ $value ?? $slot }}
</label>
