<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Validator;

class EmployeeController extends Controller
{
    //buat fungsi baru untuk index
    function index(){
      //  echo "asaoy geboyu";
      $employee = Employee::get(['employee_id', 'employee_name', 'employee_address', 'employee_phone_number']);
      //var_dump($employee);
      return view('employee.index', compact('employee'));
    }
    function create(){
   //ingat jangan lupa url nya Employee/create
     return view('employee.create');
    }
    function store(Request $request){
      $validator = Validator::make($request->all(), [
        'employee_id' => 'required|string|max:10', 'employee_name' => 'required|string|max:50', 
        'employee_adderess' => 'required|string|max:552', 'employee_phone_number' => 'required|string|max:50'
      ])->validate();
       
    //  $txtId = $request->input('txt_id');

    //   $txtName = $request->input('txt_name');
     
    //   $txtAddress = $request->input('txt_address');

    //   $txtPhoneNumber = $request->input('txt_phone_number');
      
    //   echo $txtId. " <br />" .$txtName. " <br />" . $txtAddress. " <br />". $txtId. " " ;
    
      Employee::create([
        'employee_id'=>$txtId, 'employee_name'=>$txtName, 'employee_address'=> $txtAddress, 'employee_phone_number'=> $txtPhoneNumber
      ]);

      return redirect('/Employee');
    }
    public function show($id){
  
        $employee = Employee::where('employee_id', $id)->get();
       
      //  var_dump($employee);
       return view('employee/show' ,
      //['employee' => Employee::where('employee_id', $id)]);
      compact('employee'));

     }
     public function edit($id){
   
      $employee = Employee::where ('employee_id', $id)->get();
      return view('employee.edit', compact('employee'));
     }

     public function update(Request $request, $id){
      $txtId = $request->input('txt_id');
      
            $txtName = $request->input('txt_name');
           
            $txtAddress = $request->input('txt_address');

            $txtPhoneNumber = $request->input('txt_phone_number');

            Employee::where ('employee_id', $id)->update([
              'employee_name' => $txtName,
              'employee_address' => $txtAddress,
              'employee_phone_number' => $txtPhoneNumber           
            ]);
        return redirect('/Employee');
     }

     public function destroy($id){
       $employee = Employee::where('employee_id', $id)->first();
       $employee->delete();
       return redirect('/Employee');
     }
}
