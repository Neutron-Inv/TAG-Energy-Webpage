@component('mail::message')

<b>Name</b>: {{ $contact->name }}<br><br>
<b>Email</b>: {{ $contact->email }}<br><br>
<b>Phone</b>: {{ $contact->phone }}<br><br>
<b>Message</b>: {{ $contact->message }}</p><br>

@endcomponent

