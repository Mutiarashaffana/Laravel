<br />
@foreach ($employee as $employeelist)
<p style="color:red">{{ $employeelist->employee_id }}</p>
<p style="color:yellow">{{ $employeelist->employee_name }}</p>
<p style="color:blue">{{ $employeelist->employee_address }}</p>
<p style="color:blue">{{ $employeelist->employee_phone_number }}</p>
<a href="/Employee/{{ $employeelist->employee_id}}">show</a>
</br>
<a href="/Employee/{{ $employeelist->employee_id}}/edit">edit</a>
<br />
<form action="/Employee/{{ $employeelist->employee_id }}" method="post">
        {{ csrf_field() }} 
        {{ method_field('DELETE') }}
    <button>HAPUS</button>
    </form>
@endforeach
<a href="{{ url('Employee/create')}}">klik disini</a>