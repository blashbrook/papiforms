<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
    <img src="https://papiforms-dcpl-applications.local:8890/storage/images/logo_horizontal_long.png" height="40px">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
{{--{{ $slot }}--}}
@endif
</a>
</td>
</tr>
