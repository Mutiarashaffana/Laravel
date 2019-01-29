<!DOCTYPE html>
 <html lang="en">
 
 <head>
 
     <title>CREATE EMPLOYEE</title>
 
     <!-- Bootstrap Core CSS -->
     <link href="{{ asset ('sb-admin-dua/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
 
     <!-- MetisMenu CSS -->
     <link href="{{ asset ('sb-admin-dua/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
 
     <!-- Custom CSS -->
     <link href="{{ asset ('sb-admin-dua/dist/css/sb-admin-2.css') }}" rel="stylesheet">
 
     <!-- Custom Fonts -->
     <link href="{{ asset ('sb-admin-dua/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
 </head>
 
 <body>
             <div class="row">
                 <div class="col-lg-12">
                     <div class="panel panel-default">
                         <div class="panel-heading">
                             @foreach ($errors->all() as $error)
                             <div>{{ $error }}</div>
                             @endforeach
                         </div>
                         <div class="panel-body">
                             <div class="row">
                                 <div class="col-lg-6">
                                 <form method="POST" action="/Employee"> {{ csrf_field() }}
                                         <div class="form-group">
                                             <label>ID Employee</label>
                                             <input class="form-control" type="text" name="txt_id">
                                         </div>
                                         <div class="form-group">
                                             <label>Name</label>
                                             <input class="form-control" type="text" name="txt_name">
                                         </div>
                                         <div class="form-group">
                                             <label>Address</label>
                                             <textarea class="form-control" rows="3" type="text" name="txt_address"></textarea>
                                         </div>
                                         <div class="form-group">
                                             <label>Phone</label>
                                             <input class="form-control" type="text" name="txt_phone">
                                         </div>
                                         <button type="submit" class="btn btn-info" name="sbm_save" id="sbm_save">Submit</button>
                                         <button type="reset" class="btn btn-success">Reset</button>
                                     </form>
                             </div>
                             <!-- /.row (nested) -->
                         </div>
                         <!-- /.panel-body -->
                     </div>
                     <!-- /.panel -->
                 </div>
                 <!-- /.col-lg-12 -->
             </div>
             <!-- /.row -->
    <!-- jQuery -->
     <script src="{{ asset ('sb-admin-dua/vendor/jquery/jquery.min.js') }}"></script>
 
     <!-- Bootstrap Core JavaScript -->
     <script src="{{ asset ('sb-admin-dua/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
 
     <!-- Metis Menu Plugin JavaScript -->
     <script src="{{ asset ('sb-admin-dua/vendor/metisMenu/metisMenu.min.js') }}"></script>
 
     <!-- Custom Theme JavaScript -->
     <script src="{{ asset ('sb-admin-dua/dist/js/sb-admin-2.js') }}"></script>
 
 </body>
 
 </html>