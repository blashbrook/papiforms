@props([
    'token' => $token
])
@component('papiforms::mail.html.message')
<center><a href="https://www.dcplibrary.org"><img src="https://app.dcplibrary.org/storage/images/logo.png" height="131px" width="184px" alt="Daviess County Public Library"></a></center>
{{--# Introduction--}}

<h4>Welcome {{ $confirmation['first_name'] }}!</h4>

<p>Click the link below to confirm your update</p>

@component('papiforms::mail.html.card', ['url' => '"http://localhost:8000/contact/confirm/{{ $token }}"'])

<h3>Daviess County Public Library</h3>

<h1>ADULT LIBRARY CARD</h1>

<h2>{{ $confirmation['Barcode'] }}</h2>

<h3>{{ $confirmation['NameFirst'] }} {{ $confirmation['NameMiddle'] }} {{ $confirmation['NameLast'] }}</h3>
@endcomponent

<h4>Getting Started</h4>

<p>Your Daviess County Public Library card gives you to access thousands of books, movies, and music at the library or online.  For more informaton about borrowing and other library services, download the brochure for <a href="https://www.dcplibrary.org/wp-content/uploads/2020/02/DCPL_Cardholder_Information.pdf">New Cardholders [PDF]</a>.</p>

@component('papiforms::mail.html.button', ['url' => 'https://dcpl.bibliocommons.com', 'color' => 'success'])
    ACCESS THE CATALOG
@endcomponent

<p>You also have access to a vast collection of online research databases, including newspapers, journals, home and auto repair manuals, practice tests, genealogy resources, and much more.</p>
@component('papiforms::mail.html.button', ['url' => 'https://ezproxy.dcplibrary.org', 'color' => 'success'])
    ACCESS ONLINE RESOURCES
@endcomponent

<p>Sign up for <a href="https://go.dcplibrary.org/newsletters">Newsletters</a> with information on new or recommended reads and upcoming events, delivered straight to your inbox.</p>
<p>View the <a href="https://daviesscounty.librarycalendar">Events Calendar</a> to find out what's going on at library.</p>
<p>Visit our website at <a href="https://www.dcplibrary.org">https://www.dcplibrary.org</a> to learn more, and find us on social media @dcplibrary</p>



@endcomponent

