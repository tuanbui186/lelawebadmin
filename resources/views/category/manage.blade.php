@extends('layouts.master')
@section('content')
<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Category Management</h3>
                        <p class="animated fadeInDown">
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3> Category Table</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th>Category ID</th>
                                  <th>Name</th>
                                  <th>Price($)</th>
                                  <th>Minutes</th>
                                  <th>Percent(%)/Amount($)</th>                                  
                                  <th>Status</th>
                                  <th>Edit</th>
                                  <th>Delete</th>                     
                                </tr>
                              </thead>
                              <tbody>
                              @foreach($cate as $print) 
                                <tr>
                                  <td>{{$print->id}}</td>
                                  <td>{{$print->Name}}</td>
                                  <td>{{$print->Price}}</td>
                                  <td>{{$print->Minute}}</td>
                                  <th>{{$print->Percent}}%
                                    <?php echo "</br>"; ?>
                                      {{$print->Amount}}
                                  </th>                                  
                                  <th><?php
                                  if ($print->Check == 1)
                                  {
                                    echo "On";
                                  }
                                  else if($print->Check == 0){
                                    echo "Off";
                                  }
                                  ?> </th>
                                  <td>
                                   <a class="btn btn-info btn-xs" href="{!! route('cate.edit',$print->id) !!}"><i class="fa fa-pencil fa-fw"></i> Edit</a>
                                  </td>
                                  <td>
                                      <form method="POST" action="{{route('cate.destroy',$print->id)}}">      
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
                <div class="row">  
                  <div class="col-xs-12 text-right">
                    <div class="form-group">
                      <a class="btn btn-success" href="{{route('cate.create')}}"><i class="fa fa-play"></i> Add Category</a>             
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
