@extends('layouts.master')
@section('content')
<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <div class="row text-center">
                        <select onChange="window.location.href=this.value" style ="font-size: 22px">
                          <option value="{{route('paypal.edit', 1)}}" selected="">Paypal Payment</option>
                          <option value="{{route('stripe.edit', 1)}}">Stripe Payment</option>
                        </select>

                        <div class="row">
                            <img src="{{url('public/lelatemplate/asset/img/paypal.png')}}" height="120" width="200" />
                        </div>
                      </div>
                        <!-- <h3 class="animated fadeInLeft">Paypal Payment Configure</h3> -->
                        <p class="animated fadeInDown">
                        <form method="POST" action="{{route('paypal.update', 1)}}" accept-charset="UTF-8">
                        <input name="_method" type="hidden" value="PUT">
                        {!! csrf_field() !!}
                          <div class="row">
                            <div class="form-group {{ $errors->has('txtClientId') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">CLIENT ID</label>
                              <div class="col-md-9">
                                <input type="text" id="" name="txtClientId" class="form-control input-sm" 
                                value="{!! old('txtClientId',isset($edit) ? $edit->clientId : null) !!}">
                                 @if ($errors->has('txtClientId'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('txtClientId') }}</strong>    
                                    </span>
                                  @endif
                              </div>
                            </div>  
                          </div>
                          <p>
                        <div class="row">
                            <div class="form-group {{ $errors->has('txtclientSecret') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">CLIENT SECRET</label>
                              <div class="col-md-9">
                                <input type="text" id="" name="txtclientSecret"  class="form-control input-sm" 
                                value="{!! old('txtclientSecret',isset($edit) ? $edit->clientSecret : null) !!}">
                                 @if ($errors->has('txtclientSecret'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('txtclientSecret') }}</strong>    
                                    </span>
                                  @endif
                              </div>
                            </div>  
                          </div>
                        </p>
                          <div class="row">
                            <div class="form-group {{ $errors->has('txtMode') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">MODE</label>
                              <div class="col-md-9">
                                <label class="radio-inline">
                                  <input type="radio" name="txtMode" id="inlineRadio1" value="0" <?php if ($edit->mode == '0'): ?>checked='checked'<?php endif; ?>/> Sandbox
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="txtMode" id="inlineRadio2" value="1" <?php if ($edit->mode == '1'): ?>checked='checked'<?php endif; ?>/> Live
                                </label>
                              </div>
                            </div>  
                          </div>   
                          <p>                       
                                                
                         <div class="row">
                            <div class="form-group {{ $errors->has('txtLogLevel') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">LOG LEVEL</label>
                              <div class="col-md-9">
                                <label class="radio-inline">
                                  <input type="radio" name="txtLogLevel" id="inlineRadio1" value="1" <?php if ($edit->loglevel == '1'): ?>checked='checked'<?php endif; ?>/> Debug
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="txtLogLevel" id="inlineRadio2" value="0" <?php if ($edit->loglevel == '0'): ?>checked='checked'<?php endif; ?> /> Fine
                                </label>
                              </div>
                            </div>  
                        </div> 
                        <p>
                         <div class="row">
                            <div class="form-group {{ $errors->has('txtCache') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">CACHE ENABLED</label>
                              <div class="col-md-9">
                                <label class="radio-inline">
                                  <input type="radio" name="txtCache" id="inlineRadio1" value="1" <?php if ($edit->cache == '1'): ?>checked='checked'<?php endif; ?>/> True
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="txtCache" id="inlineRadio2" value="0" <?php if ($edit->cache == '0'): ?>checked='checked'<?php endif; ?>/> False
                                </label>
                              </div>
                            </div>  
                        </div> 
                        <p>
                        <div class="row">
                            <div class="form-group {{ $errors->has('txtLogEnable') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">LOG ENABLED</label>
                              <div class="col-md-9">
                                <label class="radio-inline">
                                  <input type="radio" name="txtLogEnable" value="1" <?php if ($edit->logenable == '1'): ?>checked='checked'<?php endif; ?>/> True
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="txtLogEnable" value="0" <?php if ($edit->logenable == '0'): ?>checked='checked'<?php endif; ?>/> False
                                </label>
                              </div>
                            </div>  
                        </div> 
                        <p>
                        <div class="row">
                            <div class="form-group {{ $errors->has('txtAmount') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">CAPTURE AMOUNT</label>
                              <div class="col-md-9">
                                <input type="text" id="" name="txtAmount"  class="form-control input-sm" 
                                value="{!! old('txtAmount',isset($edit) ? $edit->capture_amount : null) !!}">
                                 @if ($errors->has('txtAmount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('txtAmount') }}</strong>    
                                    </span>
                                  @endif
                              </div>
                            </div>  
                          </div>   
                          <p> 

                        <div class="row">
                            <div class="form-group {{ $errors->has('txtStatus') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">STATUS</label>
                              <div class="col-md-9">
                                <label class="radio-inline">
                                  <input type="radio" name="txtStatus" id="inlineRadio1" value="0" <?php if ($edit->status == '0'): ?>checked='checked'<?php endif; ?>/> Off
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="txtStatus" id="inlineRadio2" value="1" <?php if ($edit->status == '1'): ?>checked='checked'<?php endif; ?>/> On
                                </label>
                              </div>
                            </div>  
                          </div>   
                          <p>          
                        <div class="row">
                        <div class="col-xs-12 text-center">
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