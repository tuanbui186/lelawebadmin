@extends('layouts.master')
@section('content')
<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <div class="row text-center">
                        <select onChange="window.location.href=this.value" style ="font-size: 22px">
                          <option value="{{route('paypal.edit', 1)}}">Paypal Payment</option>
                          <option value="{{route('stripe.edit', 1)}}" selected="">Stripe Payment</option>
                        </select>
                        <div class="row">
                            <img src="{{url('public/lelatemplate/asset/img/stripe.jpeg') }}" height="120" width="200" />
                        </div>
                       </div>
                        <!-- <h3 class="animated fadeInLeft">Paypal Payment Configure</h3> -->
                        <p class="animated fadeInDown">
                        <form method="POST" action="{{route('stripe.update', 1)}}" accept-charset="UTF-8">
                        <input name="_method" type="hidden" value="PUT">
                        {!! csrf_field() !!}
                          <div class="row">
                            <div class="form-group {{ $errors->has('txtSecret') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">SECRET KEY</label>
                              <div class="col-md-9">
                                <input type="text" id="" name="txtSecret" class="form-control input-sm" 
                                value="{!! old('txtSecret',isset($edit) ? $edit->secret_key : null) !!}">
                                 @if ($errors->has('txtSecret'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('txtSecret') }}</strong>    
                                    </span>
                                  @endif
                              </div>
                            </div>  
                          </div>
                          <p>
                        <div class="row">
                            <div class="form-group {{ $errors->has('txtPublish') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">PUBLISHABLE KEY</label>
                              <div class="col-md-9">
                                <input type="text" id="" name="txtPublish"  class="form-control input-sm" 
                                value="{!! old('txtPublish',isset($edit) ? $edit->publishable_key : null) !!}">
                                 @if ($errors->has('txtPublish'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('txtPublish') }}</strong>    
                                    </span>
                                  @endif
                              </div>
                            </div>  
                          </div>
                        </p>
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