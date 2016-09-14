@extends('layouts.master')
@section('content')
<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Payment Management</h3>
                        <p class="animated fadeInDown">
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading text-center"><img src="{{url('public/lelatemplate/asset/img/cardpayment.jpg') }}" height="200" width="400" /></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Status</th>
                                  <th>Edit</th>               
                                </tr>
                              </thead>
                              <tbody>
                              @foreach($paymana as $print) 
                                <tr>
                                  <td>{{$print->id}}</td>
                                  <td>{{$print->name}}</td>                                                           
                                  <th><?php
                                  if ($print->status == 1)
                                  {
                                    echo "On";
                                  }
                                  else if($print->status == 0){
                                    echo "Off";
                                  }
                                  ?> </th>
                                  <td>
                                    <?php 
                                    if ($print->id == 1)
                                     {
                                    ?>
                                        <a class="btn btn-info btn-xs" href="{{route('paypal.edit', 1)}}"><i class="fa fa-pencil fa-fw"></i> Edit</a>
                                   <?php } 
                                   else {
                                   ?>
                                        <a class="btn btn-info btn-xs" href="{{route('stripe.edit', 1)}}"><i class="fa fa-pencil fa-fw"></i> Edit</a>
                                   <?php
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
<SCRIPT LANGUAGE="JavaScript">
    function confirmAction() {
      return confirm("Are you sure?");
    };

</SCRIPT>
@endsection   
