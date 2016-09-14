@extends('layouts.master')
@section('content')
          <!-- start: Content -->
            <div id="content">
              <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Calendar</h3>
                        <p class="animated fadeInDown">
                          Home <span class="fa-angle-right fa"></span> Calendar
                        </p>
                    </div>
                  </div>
              </div>
              <div class="panel">
                  <div class="panel-heading"><h3></h3></div>
                  <div class="panel-body">
                    <div class="col-md-3">
                      <div id='external-events'>
                      <h4>Draggable Events</h4>

                      </div>
                    </div>
                    <div class="col-md-9">
                      <div id='calendar'></div>
                    </div>
                    
                  </div>
                </div>
            </div>
          <!-- end: content -->      
@endsection   
