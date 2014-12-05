@extends('include/master')
@section('content')
@include("errors.global_alert_messages")


<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Add Location</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Inventory -> Add Location
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                {{Form::open(array('url'=>'locations_saved',"class" => "form-horizontal bucket-form"))}}
			
                                        <div class="form-group">
                                        <label>Location Code</label>
                                            {{Form::text('location_code','',array('class'=>'form-control'))}}
                                            {{ $errors->first('location_code') }}
                                        </div>

                                        <div class="form-group">
                                        <label>Location Name</label>
                                        {{Form::text('location_name','',array('class'=>'form-control'))}}
                                        {{ $errors->first('location_name') }}
                                        </div>


                                        <div class="form-group">
                                        <label>Contact for deliveries:</label>
                                        {{Form::text('contact_for_deliveries','',array('class'=>'form-control'))}}
                                        {{ $errors->first('contact_for_deliveries') }}

                                        </div>
                                                

                                        <div class="form-group">
                                        <label>Delivery Address 1 (Building):</label>
                                        {{Form::textarea('delivery_address_1','',array('rows'=>2,'class'=>'form-control'))}}
                                        {{ $errors->first('delivery_address_1') }}
                                        </div>
                                        

                                        <div class="form-group">
                                        <label>Delivery Address 2 (street):</label>
                                        {{Form::textarea('delivery_address_2','',array('rows'=>2,'class'=>'form-control'))}}
                                        {{ $errors->first('delivery_address_2') }}

                                        </div>
                                        

                                        <div class="form-group">
                                        <label>Delivery Address 3 (Suburb):</label>
                                        {{Form::textarea('delivery_address_3','',array('rows'=>2,'class'=>'form-control'))}}
                                        {{ $errors->first('delivery_address_3') }}
                                        </div>
                                        

                                        <div class="form-group">
                                        <label>Delivery Address 4 (City):</label>
                                        {{Form::textarea('delivery_address_4','',array('rows'=>2,'class'=>'form-control'))}}
                                        {{ $errors->first('delivery_address_4') }}
                                        </div>
                                        

                                        <div class="form-group">
                                        <label>Delivery Address 5 (Zip Code):</label>
                                        {{Form::text('delivery_address_5','',array('class'=>'form-control'))}}
                                        {{ $errors->first('delivery_address_5') }}
                                        </div>


                                        <div class="form-group">
                                        <label>Country:</label>
                                            <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>
                                            <script type="text/javascript">
                                            function initialize() {
                                                var options = {
                                            types: ['(regions)'],
                                                };
                                                var input = document.getElementById('searchTextField');
                                                var autocomplete = new google.maps.places.Autocomplete(input , options);
                                            }
                                            google.maps.event.addDomListener(window, 'load', initialize);
                                            </script>
                                            <div class = "row">
                                                    <input id="searchTextField" type="text" size="50" class='form-control' placeholder="Enter a location" autocomplete="on">
                                                    </div>
                                        </div>


                                        <div class="form-group">
                                        <label>Telephone No.:</label>
                                        {{Form::text('telephone','',array('class'=>'form-control'))}}
                                        {{ $errors->first('telephone') }}
                                        </div>


                                        <div class="form-group">
                                        <label>Facsimile no.:</label>
                                        {{Form::text('facsimile','',array('class'=>'form-control'))}}
                                        {{ $errors->first('facsimile')}}
                                        </div>


                                        <div class="form-group">
                                        <label>Email</label>
                                        {{Form::email('email','',array('class'=>'form-control'))}}
                                        {{ $errors->first('email')}}

                                        </div>


                                        <div class="form-group">
                                        <label>Tax Province</label>
                                          {{Form::text('tax','',array('class'=>'form-control'))}}
                                        {{ $errors->first('tax')}}
                                        </div>

                                        <div class="form-group">
                                        <label>Default Counter Sales Customer Code:</label>
                                        {{Form::text('default_counter_sales_customer_code','',array('class'=>'form-control'))}}
                                        {{ $errors->first('default_counter_sales_customer_code')}}
                                        </div>


                                        <div class="form-group">
                                        <label>Counter Sales Branch Code:</label>
                                        {{Form::text('counter_sales_branch_code','',array('class'=>'form-control'))}}
                                        {{ $errors->first('counter_sales_branch_code')}}
                                        </div>

                                        <div class="form-group">
                                        <label>Allow internal requests?:</label>            
                                        {{Form::select('allow_internal_requests',array('YES' => 'YES', 'NO' => 'NO'),'',array('class'=>'form-control'))}}
                                        {{ $errors->first('allow_internal_requests')}}
                                        </div>

                                        <div class="form-group">
                                        
                                        {{link_to('system','Cancel',array("class"=>"btn btn-danger"))}}
                                        {{Form::submit('Update',array("class"=>"btn btn-success"))}}

                                        {{Form::close()}}
                                        </div>

                                        

@stop                                   


                                            