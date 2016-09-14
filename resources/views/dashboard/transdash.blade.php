@extends('layouts.master')
@section('content')
<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">TRANSACTION DASHBOARD</h3>
                        <p class="animated fadeInDown">
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3> Lasted Transaction</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th>Transaction ID</th>
                                  <th>Client</th>
                                  <th>Interpreter</th>
                                  <th>Duration</th>
                                  <th>Tip</th>
                                  <th>Total Money </th>
                                  <th>Category </th>
                                  <th>Is Cancel</th>
                                  <th>Create Date</th>
                                  <th>Status</th>
                                  <th>Target Language</th>
                                  <th>Money Interpreter</th>                          
                                </tr>
                              </thead>
                              <tbody>
                              @foreach($trans as $print) 
                                <tr>
                                  <td>{{$print->Id}}</td>
                                  <td>
                                      @foreach($user as $u)   
                                        <?php
                                          if ($print->UserSrc == $u->UserId)
                                          {
                                            echo $u->DisplayName;
                                          }  
                                        ?>
                                      @endforeach
                                  </td>
                                  <td>
                                      @foreach($user as $u)   
                                        <?php
                                          if ($print->UserDes == $u->UserId)
                                          {
                                            echo $u->DisplayName;
                                          }  
                                        ?>
                                      @endforeach
                                  </td>

                                  <td>{{$print->Duration}}</td>
                                  <td>{{$print->Tip}}</td>
                                  <td>{{$print->TotalMoney}}</td>
                                  <td>
                                  <?php

                                  if($print->CategoryId ==1)
                                  {
                                      echo "Popular";
                                  }
                                  else if($print->CategoryId == 2)
                                  {
                                      echo  "Court";
                                  }
                                  else if ($print->CategoryId == 3)
                                  {
                                      echo "Medical";
                                  }
                                   ?>
                                  </td>                                                                                                  
                                  <td>
                                    <?php
                                    if ($print->IsCancel ==1)
                                    {
                                      echo "X";
                                    }
                                    ?>                                  
                                  </td>
                                  <td>{{$print->CreateDate}}</td>
                                  <td>{{$print->Status}}</td>
                                  <td>{{$print->targetLangId}}</td>
                                  <td>{{$print->moneyTrans}}</td>
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