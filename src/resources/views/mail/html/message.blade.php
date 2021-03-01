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
<span>Daviess County Public Library</span>
<span>2020 Frederica Street</span>
<span>Owensboro, KY  42301</span>
<span><a href="tel:1-270-684-0211">(270) 684-0211</a></span>
<span><a href="https://www.dcplibrary.org">www.dcplibrary.org</a></span>
<span><a href="mailto:help@dcplibrary.org">help@dcplibrary.org</a></span>
<span><a href="sms://+12702791526">Text us: (270) 279-1526</a></span>
<span><a href="https://v2.libanswers.com/widget_chat.php?hash=8dc452e387b604c224f914bdf1a4a8f4" target="new">Chat with us</a></span>
@endcomponent
@endslot
@endcomponent
