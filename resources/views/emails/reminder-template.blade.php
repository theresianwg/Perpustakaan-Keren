@component('mail::message')
# Books Loan Reminder

Hello Mr/Mrs {{ $reminders[0]->user->first_name }} {{ $reminders[0]->user->last_name }},<br><br>
We kindly remind you that you haven't returned your books. Below are the details of the borrowed books
@component('mail::table')
|Book's Title   |Borrowed Date  |Due Date   |
|:--------------|:--------------|:----------|
@foreach ($reminders as $reminder)
|{{ $reminder->book->name }}   |{{ \Carbon\Carbon::parse($reminder->borrowed_date)->format('d-m-Y')}}  |{{ \Carbon\Carbon::parse($reminder->due_date)->format('d-m-Y')}}
@endforeach
@endcomponent

Sincerely,<br>
{{ config('app.name') }}
@endcomponent
