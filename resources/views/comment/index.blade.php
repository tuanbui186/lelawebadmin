@extends('layouts.master')
@section('content')
<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Comment Management</h3>
        
                        <p class="animated fadeInDown">
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Client Comment </h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th>ID </th>
                                  <th>User ID</th>
                                  <th>Email</th>
                                  <th>DisplayName</th>
                                  <th>Comment</th>
                                  <th>Rating</th>
                                  <th>Create Date</th>
                                  <th>Delete</th>              
                                </tr>
                              </thead>
                              <tbody>
                              <tr>                              
                              
                                @foreach($comm as $print)  
                                  <td>{{$print->id}}</td>                                              
                                  <td>{{$print->UserId}}</td>
                                  <td>{{$print->Email}} </td>
                                  <td>{{$print->DisplayName}} </td>
                                  <td>{{$print->Comment}}</td>                                  
                                  <td>{{$print->Rate}}</td>
                                  <td>{{$print->CreateDate}}</td>                                 
                                  <td>
                                      <form method="POST" action="{{route('delcomm',$print->id)}}">      
                                      {!! csrf_field() !!}
                                      <input type="hidden" name="_method" value="DELETE">                                
                                      <button class="btn btn-danger btn-xs" onclick="return confirmAction()" type="submit" id="delete"><i class="fa fa-trash-o fa-fw"> </i> Delete</button>
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
            </div>
          <!-- end: content -->
<SCRIPT LANGUAGE="JavaScript">
    function confirmAction() {
      return confirm("Are you sure?");
    };
</SCRIPT>
@endsection   