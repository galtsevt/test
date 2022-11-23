<x-mail::message>
Данные из формы:<br>
   <strong>Имя:</strong> {{ $feedback->name }}<br>
    <strong>E-mail</strong>: {{ $feedback->email }}<br>
    <strong>Телефон</strong>: {{ $feedback->phone }}<br>
    <strong>Дата</strong>: {{ $feedback->created_at->format('d-m-Y H:i') }}<br>
</x-mail::message>
