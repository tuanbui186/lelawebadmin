@extends('layouts.master')
@section('content')
<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">

                        <h3 class="animated fadeInLeft">Customer Editing</h3>
                        <p class="animated fadeInDown">
                        <form method="POST" action="{{route('postcus', $edit->uID)}}" accept-charset="UTF-8" id="eform">
                        <input name="_method" type="hidden" value="PUT">
                        {!! csrf_field() !!}
                            
                          <div class="row">
                            <div class="form-group {{ $errors->has('txtEmail') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">Email</label>
                              <div class="col-md-9">
                                <input type="text" id="" name="txtEmail" class="form-control input-sm" value="{!! old('txtEmail',isset($edit) ? $edit->email : null) !!}" readonly="">
                                 @if ($errors->has('txtEmail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('txtEmail') }}</strong>    
                                    </span>
                                  @endif
                              </div>
                            </div>  
                          </div>
                          <p>
                        <div class="row">
                            <div class="form-group {{ $errors->has('txtDisName') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">Display Name</label>
                              <div class="col-md-9">
                                <input type="text" id="" name="txtDisName"  class="form-control input-sm" 
                                value="{!! old('txtDisName',isset($edit) ? $edit->name : null) !!}" readonly>
                                 @if ($errors->has('txtDisName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('txtDisName') }}</strong>    
                                    </span>
                                  @endif
                              </div>
                            </div>  
                          </div>
                        </p>       
                                                                    
                        <div class="row">
                            <div class="form-group {{ $errors->has('txtLogin') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label">Login?</label>
                              <div class="col-md-9">
                                <p>
                                  <?php if ($edit->Login == '1')
                                   echo "Yes";
                                   ?>
                                </p>
                                <p>
                                  <?php if ($edit->Login == '0')
                                   echo "No";
                                   ?>
                                </p>
                            </div>  
                        </div> 
                        </div> 
                        <p>    

                        <div class="row">
                            <div class="form-group {{ $errors->has('txtActive') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label">Active?</label>
                              <div class="col-md-9">
                                <label class="radio-inline">
                                  <input type="radio" name="txtActive" id="inlineRadio1" value="1" <?php if ($edit->IsActive == '1'): ?>checked='checked'<?php endif; ?>/> Yes
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="txtActive" id="inlineRadio2" value="0" <?php if ($edit->IsActive == '0'): ?>checked='checked'<?php endif; ?>/> No
                                </label>
                            </div>  
                        </div> 
                        </div> 
                        <p>   

                        <div class="row">
                            <div class="form-group {{ $errors->has('txtStatus') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label">Status</label>
                              <div class="col-md-9">
                                <select name="txtStatus" >
                                <option value="1" <?php if ($edit->StatusId == '1'): ?>selected='selected'<?php endif; ?>>Online</option>
                                <option value="2" <?php if ($edit->StatusId == '2'): ?>selected='selected'<?php endif; ?>>Offline</option>
                                <option value="3" <?php if ($edit->StatusId == '3'): ?>selected='selected'<?php endif; ?>>Requesting</option>
                                <option value="4" <?php if ($edit->StatusId == '4'): ?>selected='selected'<?php endif; ?>>Waiting</option>
                                <option value="5" <?php if ($edit->StatusId == '5'): ?>selected='selected'<?php endif; ?>>Calling</option>
                              </select>
                            </div>  
                        </div> 
                        </div> 
                        <p>    
                        <div class="row">
                            <div class="form-group {{ $errors->has('txtLang') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label">Language</label>
                              <div class="col-md-9">
                                 <select name="txtLang">
                                 <?php  
                                  foreach($lang as $key => $val)
                                  {
                                    $id  = $val->LangId;
                                    $name = $val->LangName;
                                    echo "<option value='$id' selected> $name </option>"; 
                                  }
                                 ?>
                                </select>
                            </div>  
                          </div> 
                        </div> 
                        <p>
                        <div class="row">                       
                         <div class="col-xs-6 text-center">
                          <div class="form-group">
                            <input class="btn btn-danger fa fa-floppy-o" onclick="goBack()" type="submit" name="cancle" value="Cancle">                      
                          </div>
                        </div>
                        <div class="col-xs-6 text-center">
                          <div class="form-group">
                            <input class="btn btn-primary fa fa-floppy-o" type="submit" name="update" value="Update">                      
                          </div>
                        </div>
                      </div>
                      </form>
                    </div>
                  </div>
              </div>
            </div>

          <!-- end: content -->
@endsection   