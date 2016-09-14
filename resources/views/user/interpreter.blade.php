@extends('layouts.master')
@section('content')
<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">User Management</h3>

                        <p class="animated fadeInDown">
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                    <h3> Lela Interpreter
                    
                    </h3>
                  </div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th>Interpreter ID</th>
                                  <th>User ID</th>
                                  <th>Email </th>
                                  <th>Display Name</th>
                                  <th>Language</th>
                                  <th>Active Code</th>
                                  <th>Is Active</th>
                                  <th>Status</th>   
                                  <th>IsApprove</th> 
                                  <th>Edit</th>   
                                  <th>Delete</th>                                               
                                </tr>
                              </thead>
                              <tbody>

                              @foreach($inter as $print) 
                                                  
                                <tr>
                                  <td>{{$print->id}}</td>
                                  <td>{{$print->UserId}}</td>
                                  <td>{{$print->email}}</td>
                                  <td>{{$print->name}}</td>
                                  <td>
                                  @foreach($lang as $l)   
                                    <?php
                                      if ($print->LanguageId == $l->LangId)
                                      {
                                        echo $l->LangName;
                                      }
                                      ?>
                                  @endforeach
                                  </td>
                                  
                                  <td>{{$print->ActiveCode}}</td>
                                  <td>
                                  <?php
                                  if ($print->IsActive == 1) 
                                  {
                                  echo "X"; 
                                  }         
                                  ?>
                                  </td>
                                  <td>
                                  <?php
                                  if ($print->StatusId == 1)
                                  {
                                    echo "Online";
                                  }
                                  else if ($print->StatusId ==2)
                                  {
                                    echo "Offline";
                                  }
                                  else if ($print->StatusId == 3)
                                  {
                                    echo "Requesting";
                                  }
                                  else if ($print->StatusId == 4)
                                  {
                                    echo "Waiting";
                                  }
                                  else if ($print->StatusId == 5)
                                  {
                                    echo "Calling";
                                  }
                                  ?> 
                                  </td>
                                  <td>
                                  <?php
                                  if ($print->IsApprove == 1) 
                                  {
                                  echo "X"; 
                                  }         
                                  ?>
                                  </td>  
                                 <td>
                                   <a class="btn btn-info btn-xs" href="{!! route('getinter',$print->id) !!}"><i class="fa fa-pencil fa-fw"></i> Edit</a>
                                  </td>
                                  <td>
                                      <form method="POST" action="{{route('delinter',$print->id)}}">      
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

@endsection   
<SCRIPT LANGUAGE="JavaScript">
    function confirmAction() {
      return confirm("Are you sure?");
    };

</SCRIPT>