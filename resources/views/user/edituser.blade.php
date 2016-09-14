@extends('layouts.master')
@section('content')
<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">User Editing</h3>
                        <p class="animated fadeInDown">
                        <form method="POST" action="{{route('usersupdate', $edit->UserId)}}" accept-charset="UTF-8" id="eform">
                        <input name="_method" type="hidden" value="PUT">
                        {!! csrf_field() !!}
                            
                          <div class="row">
                            <div class="form-group {{ $errors->has('txtEmail') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">Email</label>
                              <div class="col-md-9">
                                <input type="text" id="" name="txtEmail" class="form-control input-sm" value="{!! old('txtEmail',isset($edit) ? $edit->Email : null) !!}" readonly="">
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
                            <div class="form-group {{ $errors->has('txtPass') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">Password</label>
                              <div class="col-md-9">
                                <input type="text" id="" name="txtPass"  class="form-control input-sm" 
                                value="{!! old('txtPass',isset($edit) ? $edit->Password : null) !!}">
                                 @if ($errors->has('txtPass'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('txtPass') }}</strong>    
                                    </span>
                                  @endif
                              </div>
                            </div>  
                          </div>
                        </p>
                          <div class="row">
                            <div class="form-group {{ $errors->has('txtName') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">Display Name</label>
                              <div class="col-md-9">
                                <input type="text" id="" name="txtName"  class="form-control input-sm" 
                                value="{!! old('txtName',isset($edit) ? $edit->DisplayName : null) !!}">
                                 @if ($errors->has('txtName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('txtName') }}</strong>    
                                    </span>
                                  @endif
                                 @if ($errors->has('txtName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('txtName') }}</strong>    
                                    </span>
                                  @endif
                              </div>
                            </div>  
                          </div>   
                          <p>                       
                                                                    
                        <div class="row">
                            <div class="form-group {{ $errors->has('txtLogin') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label">Login?</label>
                              <div class="col-md-9">
                                <label class="radio-inline">
                                  <input type="radio" name="txtLogin" id="inlineRadio1" value="1" <?php if ($edit->IsLogin == '1'): ?>checked='checked'<?php endif; ?>/> Yes
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="txtLogin" id="inlineRadio2" value="0" <?php if ($edit->IsLogin == '0'): ?>checked='checked'<?php endif; ?>/> No
                                </label>
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
  <script>
  function goBack() {
      window.history.back();
  }
</script>

@endsection   