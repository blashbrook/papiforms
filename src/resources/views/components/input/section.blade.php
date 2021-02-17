@props([
    'section' => false,
])
<div class="flex flex-wrap -mx-3 mt-10">
    <span class="block uppercase tracking-wide text-gray-700 font-bold px-3">{{ $section }}</span>
</div>
{{ $slot }}
