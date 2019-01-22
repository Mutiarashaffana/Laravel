<br />
@foreach ($customer as $customerlist)
<p style="color:red">{{ $customerlist->customer_id }}</p>
<p style="color:yellow">{{ $customerlist->name }}</p>
<p style="color:blue">{{ $customerlist->address }}</p>

<br />
@endforeach
 <a href="{{ url('Customer')}}">klik disini</a>