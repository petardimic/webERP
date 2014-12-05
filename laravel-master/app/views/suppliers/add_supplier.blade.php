@extends('include/master')
@section('content')
@include("errors.global_alert_messages")


<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Add Supplier</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Inventory -> Add Supplier
                        </div>
                        <div class="panel-body">
                        @if(Session::has('msg'))
                            <div class="col-md-4 col-sm-4">
                            <div class="panel panel-success">
                            <div class="panel-heading">
                            Success
                            </div>
                            <div class="panel-body">
                                 
                                    {{Session::get('msg')}}   
                            </div>
                            </div>
                            </div>
                        @endif
                            <div class="row">
                                <div class="col-md-6">
                                {{Form::open(array('url'=>'supplier_saved',"class" => "form-horizontal bucket-form"))}}
			
                                        <div class="form-group">
                                        <label>Supplier Name</label>
                                        {{Form::text('supplier_name','',array('class'=>'form-control'))}}
                                        {{ $errors->first('supplier_name') }}
                                        </div>

                                        <div class="form-group">
                                        <label>Address line 1(Street):</label>
                                            {{Form::text('add_line1','',array('class'=>'form-control'))}}
                                            {{ $errors->first('add_line1') }}
                                        </div>

                                        <div class="form-group">
                                        <label>Address line 2(Street):</label>
                                        {{Form::text("add_line2",'',array('class'=>'form-control'))}} 
                                        {{  $errors->first('add_line2') }}
                                        </div>

                                        <div class="form-group">
                                        <label>Address line 3(Suburb/city):</label>
                                        {{Form::text("add_line3",'',array('class'=>'form-control'))}} 
                                        {{  $errors->first('add_line3') }}
                                        </div>

                                        <div class="form-group">
                                        <label>Adderess line 4(State/Province):</label>
                                        {{Form::text("add_line4",'',array('class'=>'form-control'))}} 
                                        {{  $errors->first('add_line4') }}
                                        </div>

                                        <div class="form-group">
                                        <label>Address line 5(Postal Code):</label>
                                        {{Form::text("add_line5",'',array('class'=>'form-control'))}}
                                        {{  $errors->first('add_line5') }}
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
                                        <label>URL:</label>
                                        {{Form::text("url",'',array('class'=>'form-control'))}}           
                                        {{ $errors->first('URL') }}
                                        </div>

                                        <div class="form-group">
                                        <label>Supplier Type:</label>
                                        {{Form::select("supplier_type",array("Woods"=>"Woods","Toyota"=>"Toyota","Apple"=>"Apple","Samsung"=>"Samsung","Awesome Broom"=>"Awesome Broom"),'',array('class'=>'form-control'))}}             
                                        {{  $errors->first('supplier_type') }}
                                        </div>

                                        <div class="form-group">
                                        <label>Supplier Since:</label>
                                        {{Form::text("supplier_since","01/01/2014",'',array('class'=>'form-control'))}}               
                                        {{ $errors->first('supplier since') }}
                                        </div>

                                        <div class="form-group">
                                        <label>Bank Particulars</label>
                                        {{Form::text("bank_particulars",'',array('class'=>'form-control'))}}              
                                        {{ $errors->first('bank_particulars') }}
                                        </div>

                                        <div class="form-group">
                                        <label>Bank Account Number:</label>
                                        {{Form::text("bank_acc_number",'',array('class'=>'form-control'))}}   
                                        {{ $errors->first('bank_acc_number') }}
                                        </div>


                                        <div class="form-group">
                                        <label>Bank Reference:</label>
                                        {{Form::text("bank_reference",'',array('class'=>'form-control'))}}   
                                        {{ $errors->first('bank_reference') }}
                                        </div>

                                        <div class="form-group">
                                        <label>Payment Terms:</label>

                                        {{Form::select("payment_terms",array("Payment will be due by every month"=>"Payment will be due by every month",
                                                "Postpaid due 30th of the month"=>"Postpaid due 30th of the month",
                                                "Pre Paid pay as requested"=>"Pre Paid pay as requested",
                                                "Yearly Payment"=>"Yearly Payment"
                                                ),'',array('class'=>'form-control'))}}    
                                                {{  $errors->first('payment_terms') }}
                                        </div>

                                        <div class="form-group">
                                        <label>Factor Company:</label>
                                        {{Form::select("factor_company",array("none"=>"none","company one"=>"company one"),'',array('class'=>'form-control'))}}
                                        {{  $errors->first('factor_company')    }}              
                                        </div>

                                        <div class="form-group">
                                        <label>Tax Reference:</label>
                                        {{Form::text("tax_reference",'',array('class'=>'form-control'))}} 
                                        {{  $errors->first('tex_reference') }}  
                                        </div>

                                        <div class="form-group">
                                        <label>Supplier Currency</label>

                                        {{Form::select("supplier_currency",array("Rupees"=>"Rupees","Dollar"=>"Dollar","Yen"=>"Yen","Mexican Peso"=>"Mexican Peso"),'',array('class'=>'form-control'))}}              
                                        {{  $errors->first('supplier_currency') }}
                                        </div>

                                        <div class="form-group">
                                        <label>Remittance Advice</label>
                                        {{Form::text("remittance_advice",'',array('class'=>'form-control'))}} 
                                        {{  $errors->first('remittance_advice') }}          
                                        </div>

                                        <div class="form-group">
                                        <label>Tax Group</label>
                                        {{Form::select("tax_group",array("Default"=>"Default","Ontario"=>"Ontario","UK inland revenue"=>"UK inland revenue","Canaris"=>"Canaris","INDIA"=>"INDIA"),'',array('class'=>'form-control'))}}               
                                        {{ $errors->first('tax group') }}
                                        </div>

                                        <div class="form-group">
                                        
                                        {{link_to('/','Cancel',array("class"=>"btn btn-danger"))}}
                                        {{Form::submit('Update',array("class"=>"btn btn-success"))}}
                                        {{Form::close()}}
                                        </div>
@stop