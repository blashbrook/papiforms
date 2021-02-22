@component('mail::message')
{{--# Introduction--}}



Hi {{ $confirmation['first_name'] }},
<h1>Welcome to the Daviess County Public Library.</h1>
<p>Your Teen Pass barcode number is {{ $confirmation['Barcode'] }}.</p>
Use your barcode to access thousands of books, movies, and music at the library or online.  Download our new cardholder brochure for more information.

@component('mail::button', ['url' => 'https://dcpl.bibliocommons.com'])
Access the catalog
@endcomponent


Thank you,<br>
Daviess County Public Library
@endcomponent
