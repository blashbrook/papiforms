@component('papiforms::mail.html.panel')
@component('papiforms::mail.text.message')
{{--# Introduction--}}



Hi {{ $confirmation['first_name'] }},
<p>Welcome to the Daviess County Public Library!</p>
<p>Your temporary Teen Pass barcode number is </p>
{{ $confirmation['Barcode'] }}
<p>Use your barcode to access thousands of books, movies, and music at the library or online.  Download our new cardholder brochure for more information.</p>

@component('papiforms::mail.html.button', ['url' => 'https://dcpl.bibliocommons.com', 'color' => 'success'])
Access the catalog
@endcomponent


Thank you,<br>
Daviess County Public Library
@endcomponent
