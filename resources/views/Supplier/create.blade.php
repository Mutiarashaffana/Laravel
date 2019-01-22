Create Supplier
<p style="color:red"> Jangan Error</p> 
<form method="POST" action="/Supplier">
{{ csrf_field()}}
<input type = "text" name="txt_suplier_id" /><br />
  <input type = "text" name="txt_supplier_name" /><br />
  <input type = "text" name="txt_supplier_address" /><br />
  <input type = "submit" nama="sbm_save" id="sbm_save" value="save"/>
</form>