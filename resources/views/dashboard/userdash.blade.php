@extends('layouts.master')
@section('content')
<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">USER DASHBOARD</h3>
                        <p class="animated fadeInDown">
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3> Statistics Table</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th>User ID</th>
                                  <th>Email</th>
                                  <th>Password</th>
                                  <th>Display Name</th>
                                  <th>Role</th>
                                  <th>Login Date</th>
                                  <th>Create Date</th>
                                  <th>Is Login</th>                      
                                </tr>
                              </thead>
                              <tbody>
                              @foreach($userd as $print) 
                                <tr>
                                  <td>{{$print->UserId}}</td>
                                  <td>{{$print->Email}}</td>
                                  <td>{{$print->Password}}</td>
                                  <td>{{$print->DisplayName}}</td>
                                  <td>
                                  <?php
                                  if ($print->RoleId == 1) 
                                  {
                                  echo "Customer"; 
                                  }
                                  else 
                                  {
                                    echo "Interpreter";
                                  }
                                  ?>
                                  </td>
                                  <td>{{$print->LoginDate}}</td>
                                  <td>{{$print->CreateDate}}</td>
                                  <td>
                                  <?php
                                  if ($print->IsLogin == 1)
                                  {
                                    echo "X";
                                  }
                                  ?> 
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
            </div>
          <!-- end: content -->

@endsection   