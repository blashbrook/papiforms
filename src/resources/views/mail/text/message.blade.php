@component('papiforms::mail.html.layout')
    {{-- Header --}}
    @slot('header')
        @component('papiforms::mail.html.header', ['url' => 'https://www.dcplibrary.org'])
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('papiforms::mail.html.subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('papiforms::mail.html.footer')
        @endcomponent
    @endslot
@endcomponent
