@foreach(session('user') as $item)
name: {{$item->first_name." ".$item->last_name}} <br>
email: {{$item->email}} <br>
role: {{$item->role}} <br>
phone number: {{$item->phone_number}}

@endforeach