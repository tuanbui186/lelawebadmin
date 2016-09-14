@extends('layouts.master')
@section('content')
<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Category Viewing</h3>
                        <p class="animated fadeInDown">
                        <form method="POST" action="{{route('cate.update', $view->id)}}" accept-charset="UTF-8">
                        <input name="_method" type="hidden" value="PUT">
                        {!! csrf_field() !!}
                          <div class="row">
                            <div class="form-group {{ $errors->has('txtCatId') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">CATEGORY ID</label>
                              <div class="col-md-9">
                                {!! old('txtCatId',isset($view) ? $view->id : null) !!}"
                              </div>
                            </div>  
                          </div>
                          <p>
                        <div class="row">
                            <div class="form-group {{ $errors->has('txtName') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">NAME</label>
                              <div class="col-md-9">
                              {!! old('txtName',isset($view) ? $view->Name : null) !!}
                              </div>
                            </div>  
                          </div>
                        </p>
                          <div class="row">
                            <div class="form-group {{ $errors->has('txtPrice') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">PRICE($)</label>
                              <div class="col-md-9">
                                <input type="text" id="" name="txtPrice"  class="form-control input-sm" 
                                value="{!! old('txtPrice',isset($view) ? $view->Price : null) !!}">
                                 @if ($errors->has('txtPrice'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('txtPrice') }}</strong>    
                                    </span>
                                  @endif
                              </div>
                            </div>  
                          </div>   
                          <p>                       
                                                
                         <div class="row">
                            <div class="form-group {{ $errors->has('txtMin') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">MINUTES</label>
                              <div class="col-md-9">
                                <input type="text" id="" name="txtMin"  class="form-control input-sm" 
                                value="{!! old('txtMin',isset($view) ? $view->Minute : null) !!}">
                                 @if ($errors->has('txtMin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('txtMin') }}</strong>    
                                    </span>
                                  @endif
                              </div>
                            </div>  
                        </div> 
                        <p>
                         <div class="row">
                            <div class="form-group {{ $errors->has('txtImg') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">IMAGE PATH</label>
                              <div class="col-md-9">
                               {!! old('txtImg',isset($view) ? $view->ImagePath : null) !!}"
                              </div>
                            </div>  
                        </div> 
                        <p>

                        <div class="row">
                            <div class="form-group {{ $errors->has('txtPer') ? ' has-error' : '' }}">
                              <?php if ($view->check == 1) ?>
                       
                              <label class="col-md-3 control-label" for="business_phone_company">PERCENT </label>
                              <div class="col-md-9">
                               <?php      echo $view->Percent; ?>
                              </div>
                               
                               <?php if ($view->check == 0) ?>
                                <label class="col-md-3 control-label" for="business_phone_company">AMOUNT</label>
                                <div class="col-md-9">
                                   <?php echo $view->Amount; ?>
                                </div>
                               ?>
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