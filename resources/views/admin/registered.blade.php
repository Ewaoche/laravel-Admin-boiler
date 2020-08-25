
@extends('layouts.master')

@section('title')
   Registered Users
@endsection

@section('content')

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registered Users</h4>
                 <!-- show update alert -->
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>SN</th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </thead>
                    <tbody>  

                    @foreach($getAllusers as $getAlluser)      
                        <tr>
                         <td>{{$getAlluser->id}}</td>                  
                         <td>{{$getAlluser->name}}</td>                  
                         <td>{{$getAlluser->phone}}</td>                  
                         <td>{{$getAlluser->email}}</td>                  
                         <td>-{{$getAlluser->usertype}}</td>                  
                         <td>
                         <a href="edit-register/{{$getAlluser->id}}" class="btn btn-success">Edit</a>
                         </td>                  
                         <td>
                         <form action="/delete-user/{{$getAlluser->id}}" method ="post">
                         {{csrf_field()}}
                         {{method_field('DELETE')}}
                         <button type="submit" class="btn btn-danger">Delete</button>
                         </form>
                         </td>                  
                        </tr>
                        @endforeach 
                  </tbody>
                  </table>
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