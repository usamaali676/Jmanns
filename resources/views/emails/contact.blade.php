@component('mail::message')

<b>Name:</b>{{ $details['name'] }}<br>
<b>Email:</b>{{ $details['email'] }}<br>
<b>Phone:</b>{{ $details['phone'] }}<br>
<b>Subject:</b>{{ $details['subject'] }}<br>
<b>Message:</b>{{ $details['message'] }}<br>

@endcomponent

