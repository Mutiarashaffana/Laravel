@foreach ($supplier as $supplierlist)
<p style="color:red">{{ $supplierlist->suplier_id }}</p>
<p style="color:yellow">{{ $supplierlist->supplier_name }}</p>
<p style="color:blue">{{ $supplierlist->supplier_address }}</p>
@endforeach
<a href="{{ url('Supplier/create')}}">klik disini</a>