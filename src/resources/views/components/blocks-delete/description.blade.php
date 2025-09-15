@props([
    'title' => '',
])
<div class="max-w-lg mx-auto">
    <div class="w-64 mb-3">
        <x-papiforms::assets.logo-banner-md/>
    </div>
    <h2 class="text-2xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-3xl sm:leading-9">
        {{ $title }}
    </h2>
    <p class="mt-3 leading-6 text-gray-500">
        {{ $slot }}
    </p>
    <x-papiforms::blocks.contact/>
</div>
