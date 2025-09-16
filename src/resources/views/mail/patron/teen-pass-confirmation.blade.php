@component('papiforms::mail.html.message')
<center><a href="https://www.dcplibrary.org"><img src="https://www.dcplibrary.org/wp-content/themes/dcplibrary/_elements/logo.png" height="121px" width="174px" alt="Daviess County Public Library"></a></center>
{{--# Introduction--}}

<h4>Welcome {{ $confirmation['first_name'] }}!</h4>

<p>Here is your temporary library card.  You will receive your real card in the mail within 14 days.</p>

@component('papiforms::mail.html.card', ['url' => ''])

<h3>Daviess County Public Library</h3>

<h1>TEMPORARY TEEN PASS</h1>

<h2>{{ $confirmation['Barcode'] }}</h2>

<h3>{{ $confirmation['NameFirst'] }} {{ $confirmation['NameMiddle'] }} {{ $confirmation['NameLast'] }}</h3>
@endcomponent

<h4>Getting Started</h4>

<p>Your Daviess County Public Library card gives you to access thousands of books, movies, and music at the library or online.  For more informaton about borrowing and other library services, download the brochure for <a href="https://dcplky.patronpoint.com/asset/2:library-cardholders-brochure">New Cardholders [PDF]</a>.</p>

@component('papiforms::mail.html.button', ['url' => 'https://dcpl.bibliocommons.com', 'color' => 'success'])
    ACCESS THE CATALOG
@endcomponent

<p>You also have access to a vast collection of online research databases, including newspapers, journals, home and auto repair manuals, practice tests, genealogy resources, and much more.</p>
@component('papiforms::mail.html.button', ['url' => 'https://ezproxy.dcplibrary.org', 'color' => 'success'])
    ACCESS ONLINE RESOURCES
@endcomponent

<p>Sign up for <a href="https://www.dcplibrary.org/newsletters">Newsletters</a> with information on new or recommended reads and upcoming events, delivered straight to your inbox.</p>
<p>View the <a href="https://daviesscounty.librarycalendar.com">Events Calendar</a> to find out what's going on at library.</p>
<p>Visit our website at <a href="https://www.dcplibrary.org">https://www.dcplibrary.org</a> to learn more, and find us on social media @dcplibrary</p>

<h4>Important Information about Notifications</h4>

@switch($confirmation['DeliveryOptionID'])

@case('8')
<p>You have chosen to receive text message notifications.
Please add the number <strong>+18663711276</strong> to your phone's trusted contacts.
Download the <a href="https://www.dcplibrary.org/wp-content/uploads/2021/02/DCPL_texting_instructions_printable.pdf">Instructional Bookmark [PDF]</a> or text the keyword HELP to learn how to manage your account using Shoutbomb, the library's text messaging service.</p><p>Please allow up to 3 days for your texting notification account to be processed.</p>.
@break('8')

@case('3')
<p>You have chosen to receive phone notifications. Please add the number <strong>+12706849100</strong> to your phone's trusted contacts.</p><p>You may call this number anytime to manage your account.</p><p>Please allow up to 3 days for your phone notification account to be processed.</p>.
@break('3')

@case('2')
<p>You have chosen to receive email notifications. Please add the email address <strong>no-reply@dcplibrary.org</strong> to your safe senders list.</p>
@break('2')

@default
<p>You have chosen to receive mail notifications.  Please allow 2-3 business days to receive notifications about your account.</p>
@endswitch

<p>You will be notified when your items are due or on hold. The library is not responsible for missed notifications, so please make sure your mailing address, phone number, and email address are up-to-date.  Please visit or contact the library to change your notification information.</p>

<h4>Thank you for joining the Daviess County Public Library!</h4>

@endcomponent

