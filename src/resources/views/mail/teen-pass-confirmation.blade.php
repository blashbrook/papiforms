@component('papiforms::mail.html.message')
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

<p>Your Daviess County Public Library card gives you to access thousands of books, movies, and music at the library or online.  For more informaton about borrowing and other library services, <a href="https://www.dcplibrary.org/wp-content/uploads/2020/02/DCPL_Cardholder_Information.pdf">download the new cardholder brochure [PDF]</a>.</p>

@component('papiforms::mail.html.button', ['url' => 'https://dcpl.bibliocommons.com', 'color' => 'success'])
    ACCESS THE CATALOG
@endcomponent

<p>You also have access to a vast collection of online research databases, including newspapers, journals, home and auto repair manuals, practice tests, genealogy resources, and much more.</p>
@component('papiforms::mail.html.button', ['url' => 'https://ezproxy.dcplibrary.org', 'color' => 'success'])
    ACCESS ONLINE RESOURCES
@endcomponent

<p><a href="http://www.libraryaware.com/2528/Subscribers/Subscribe">Sign up for newsletters</a> for information on new or recommended reads and upcoming events, delivered straight to your inbox.</p>
<p><a href="http://dcplibrary.evanced.info/signup">Visit the events calendar</a> to find out what's going on at library.</p>
<p><a href="https://www.dcplibrary.org">Visit our website at https://www.dcplibrary.org</a> to learn more, and find us on social media @dcplibrary</p>

<h4>Important Information about Notifications</h4>

@switch($confirmation['DeliveryOptionID'])

@case('8')
<p>You have chosen to receive text message notifications.
Please add the number <strong>+18663711276</strong> to your phone's trusted contacts.
<a href="https://www.dcplibrary.org/wp-content/uploads/2021/02/DCPL_texting_instructions_printable.pdf">Download the instructional bookmark [PDF]</a> to learn how to manage your account using Shoutbomb, the library's text messaging service.</p>.
@break('8')

@case('3')
<p>You have chosen to receive phone notifications. Please add the number <strong>+12706849100</strong> to your phone's trusted contacts.</p><p>You may also call this number anytime to management your account.</p>
@break('3')

@case('2')
<p>You have chosen to receive email notifications. Please add the email address <strong>no-reply@dcplibrary.org</strong> to your safe senders list.</p>
@break('2')

@default
<p>You have chosen to receive mail notifications.  Please allow 2-3 business days to receive notifications about your account.</p>
@endswitch

<p>You will be notified when your items are due or on hold. The library is not responsible for missed notifications, so please make sure your notification preferences are up-to-date.  To change your notifications, contact or visit the library.</p>

<h4>Thank you for joining the Daviess County Public Library!</h4>

@endcomponent

