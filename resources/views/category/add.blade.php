@extends('layouts.master')
@section('content')
<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Add Category</h3>
                        <p class="animated fadeInDown">
                        <form method="POST" action="{{route('cate.store')}}" accept-charset="UTF-8">
                        <input name="_method" type="hidden" value="POST">
                        {!! csrf_field() !!}
                            
                        <div class="row">
                            <div class="form-group {{ $errors->has('txtName') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">NAME</label>
                              <div class="col-md-9">
                                <input type="text" id="" name="txtName"  class="form-control input-sm" 
                                value="{!! old('txtName') !!}">
                                 @if ($errors->has('txtName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('txtName') }}</strong>    
                                    </span>
                                  @endif
                              </div>
                            </div>  
                          </div>
                        </p>
                          <div class="row">
                            <div class="form-group {{ $errors->has('txtPrice') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">PRICE($)</label>
                              <div class="col-md-9">
                                <input type="text" id="pri" name="txtPrice"  class="form-control input-sm filternum nozero" 
                                value="{!! old('txtPrice') !!}">
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
                              <label class="col-md-3 control-label" for="business_phone_company">MINUTE</label>
                              <div class="col-md-9">
                                <input type="text" id="" name="txtMin"  class="form-control input-sm" 
                                value="1" readonly="">
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
                            <div class="form-group {{ $errors->has('txtMode') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">MODE</label>
                              <div class="col-md-9">
                                <label class="radio-inline">
                                  <input type="radio" name="txtMod" id="Ra1" value="0" checked=""/> PERCENT
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="txtMod" id="Ra2" value="1"  />
                                   AMOUNT
                                </label>
                              </div>
                            </div>  
                          </div>   
                          <p>                       
                        <div class="row text-per">
                            <div class="form-group {{ $errors->has('txtPer') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">PERCENT(%)</label>
                              <div class="col-md-9">
                                <input type="text" id="per" name="txtPer"  class="form-control input-sm filternum" 
                                value="{!! old('txtPer') !!}">
                                 @if ($errors->has('txtPer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('txtPer') }}</strong>    
                                    </span>
                                  @endif
                              </div>
                            </div>  
                        </div> 
                        <p>
                        <div class="row text-amo">
                            <div class="form-group {{ $errors->has('txtAmo') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">AMOUNT($)</label>
                              <div class="col-md-9">
                                <input type="text" id="amo" name="txtAmo"  class="form-control input-sm filternum" 
                                value="{!! old('txtAmo') !!}">
                                 @if ($errors->has('txtAmo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('txtAmo') }}</strong>    
                                    </span>
                                  @endif
                              </div>
                            </div>  
                        </div> 
                        <p>    
                        <div class="row">
                            <div class="form-group {{ $errors->has('txtMode') ? ' has-error' : '' }}">
                              <label class="col-md-3 control-label" for="business_phone_company">STATUS</label>
                              <div class="col-md-9">
                                <label class="radio-inline">
                                  <input type="radio" name="txtSta" id="inlineRadio1" value="1" checked="" /> ON
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="txtSta" id="inlineRadio2" value="0" /> OFF
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
                            <input class="btn btn-primary fa fa-floppy-o" type="submit" name="update" value="Save">                      
                          </div>
                        </div>
                      </div>
                      </form>
                    </div>
                  </div>
              </div>
            </div>
          <!-- end: content -->
  <script>
    $(document).ready(function () {
        $(".text-amo").hide();
        $("#Ra1").click(function () {
            $(".text-per").show();
            $(".text-amo").hide();
        });
        $("#Ra2").click(function () {
            $(".text-per").hide();
            $(".text-amo").show();

        });
         $("#per").change(function(){
           var percent=$("#per").val();
           var price=$("#pri").val();
           var amount=(percent/100)*price;
           $("#amo").val(amount);
 });
          $("#amo").change(function(){
           var amount=$("#amo").val();
           var price=$("#pri").val();
           var percent=(amount/price)*100;
           $("#per").val(percent);
 });
    });
  </script>
  <script>
  function goBack() {
      window.history.back();
  }
</script>
<script>
 $('.filternum').keypress(function(eve) {
  if ((eve.which != 46 || $(this).val().indexOf('.') != -1) && (eve.which < 48 || eve.which > 57) || (eve.which == 46 && $(this).caret().start == 1)) {
    eve.preventDefault();
  }
     
// this part is when left part of number is deleted and leaves a . in the leftmost position. For example, 33.25, then 33 is deleted
 $('.filternum').keyup(function(eve) {
  if($(this).val().indexOf('.') == 0) {    $(this).val($(this).val().substring(1));
  }
 });
});
</script>

@endsection   