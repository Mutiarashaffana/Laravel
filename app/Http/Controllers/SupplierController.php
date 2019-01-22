<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
    //buat fungsi baru untuk index
    function index(){
       
        $supplier = Supplier::get(['suplier_id', 'supplier_name', 'supplier_address']);
        //var_dump($supplier);
        return view('supplier.index', compact('supplier'));
      }
      function create(){
        
        return view('supplier.create');
       }
       function store(Request $request){
        
          
        $txtId = $request->input('txt_suplier_id');
   
         $txtName = $request->input('txt_supplier_name');
        
         $txtAddress = $request->input('txt_supplier_address');
         
         echo $txtId. " <br />" .$txtName. " <br />" . $txtAddress. " ";
       
         Supplier::create([
           'suplier_id'=>$txtId, 'supplier_name'=>$txtName, 'supplier_address'=> $txtAddress
         ]);
   
         return redirect('/Supplier');
       }
}
