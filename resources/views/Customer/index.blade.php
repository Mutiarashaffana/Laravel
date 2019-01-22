<br />
@foreach ($customer as $customerlist)
<p style="color:red">{{ $customerlist->customer_id }}</p>
<p style="color:yellow">{{ $customerlist->name }}</p>
<p style="color:blue">{{ $customerlist->address }}</p>
<a href="/Customer/{{ $customerlist->customer_id}}">show</a>
</br>
<a href="/Customer/{{ $customerlist->customer_id}}/edit">edit</a>
<br />
<form action="/Customer/{{ $customerlist->customer_id }}" method="post">
        {{ csrf_field() }} 
        {{ method_field('DELETE') }}
    <button>HAPUS</button>
    </form>
@endforeach
<a href="{{ url('Customer/create')}}">klik disini</a>