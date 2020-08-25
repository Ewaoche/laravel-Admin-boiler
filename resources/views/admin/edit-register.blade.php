
@extends('layouts.master')

@section('title')
   Edit Users
@endsection

@section('content')
 <div class="container">
    <div class="row">
      <div class="col-md-6">
       <div class="card">
         <div class="card-body">
          <form action="/users-update/{{$getSingleUser->id}}" method="post">
          {{ csrf_field()}}
          {{method_field('PUT')}}
           <div class="form-group">
             <label><b> Name:</b></label>
             <input type="text" class="form-control" name= "username" value="{{$getSingleUser->name}}">
           </div>
           <div class="form-group">
             <label><b>Phone:</b></label>
             <input type="text" class="form-control" name= "phone" value="{{$getSingleUser->phone}}">
           </div>
           <div class="form-group">
             <label><b>Email:</b></label>
             <input type="email" class="form-control" name= "email" value="{{$getSingleUser->email}}">
           </div>
            
           <div class="form-group">
             <label><b>Role:</b></label>
             <select name="usertype">
               <option value="admin">Admin</option>
               <option value="vendor">Vendor</option>
               <option value="">None</option>
             </select>
           </div>      
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/registered-users" class="btn btn-danger">Cancel</a>
          </form>
         </div>
       </div>
      </div>
    </div>
 </div>
@endsection


@section('scripts')
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
@endsection