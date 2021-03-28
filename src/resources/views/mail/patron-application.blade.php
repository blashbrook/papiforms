<h1>New patron account created</h1>
<p>Barcode: {{ $confirmation['Barcode'] }}</p>
<p>First name: {{ $confirmation['NameFirst'] }}</p>
<p>Middle name: {{ $confirmation['NameMiddle'] }}</p>
<p>Last name: {{ $confirmation['NameLast'] }}</p>
<p>Street address: {{ $confirmation['StreetOne'] }}</p>
<p>Apt #: {{ $confirmation['StreetTwo'] }}</p>
<p>City: {{ $confirmation['City'] }}</p>
<p>State: {{ $confirmation['State'] }}</p>
<p>Postal code: {{ $confirmation['PostalCode'] }}</p>
<p>Birthdate: {{ $confirmation['Birthdate'] }}</p>
@if($confirmation['User4'])
<p>School: {{ $confirmation['User4'] }}</p>
@endif
<p>Phone: {{ $confirmation['PhoneVoice1'] }}</p>
<p>Mobile phone carrier: {{ $confirmation['mobilePhoneCarrierDesc'] ?? '' }}</p>
<p>Email: {{ $confirmation['EmailAddress'] }}</p>
<p>Notification preference: {{ $confirmation['deliveryOptionDesc'] }}</p>
<p>Patron code: {{ $confirmation['patronCodeDesc'] }}</p>
{{---@if($confirmation['User2'])
<p>ID #: {{ $confirmation['User2'] }}</p>
@endif
@if($confirmation['newUploadURL'])
    <p>Uploaded image: <a href="{{ $confirmation['newUploadURL'] }}" alt="Link to patron image">{{ $confirmation['newUploadURL'] }}</a></p>
@endif--}}
