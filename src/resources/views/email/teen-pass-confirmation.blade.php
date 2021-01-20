@component('mail::message')
{{--# Introduction--}}

Hi {{ $confirmation['first_name'] }},
Welcome to the Daviess County Public Library.  Your Teen Pass barcode number is {{ $confirmation['Barcode'] }}.

__other stuff__
{{--
@component('mail::button', ['url' => ''])
Button Text
@endcomponent
--}}

Thank you,<br>
Daviess County Public Library
@endcomponent
