<br />
@foreach ($employee as $employeelist)
<p style="color:red">{{ $employeelist->employee_id }}</p>
<p style="color:yellow">{{ $employeelist->employee_name }}</p>
<p style="color:blue">{{ $employeelist->employee_address }}</p>
<p style="color:blue">{{ $employeelist->employee_phone_number }}</p>
<br />
@endforeach
 <a href="{{ url('Employee')}}">klik disini</a>