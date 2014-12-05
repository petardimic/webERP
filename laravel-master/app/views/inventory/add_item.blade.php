@extends('include/master')
@section('content')
@include("errors.global_alert_messages")

<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Add Item</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Inventory -> Add Item
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                
                                    {{Form::open(array('url'=>'itemadded',"class" => "form-horizontal bucket-form"))}}
        
                                        <div class="form-group">
                                        <label>Item Code</label>
                                                    
                                        {{Form::text('item_code','',array('class' => 'form-control'))}}
                                        {{ $errors->first('item_code') }}
                                        </div>
                                        <div class="form-group">
                                        <label>Part Description</label>
                                        
                                        {{Form::text('part_descriptions','',array('class' => 'form-control'))}}
                                        {{ $errors->first('part_descriptions') }}
                                        </div>
                                        <div class="form-group">
                                        <label>Image</label>
                                        
                                        {{Form::file('image_file')}}
                                        {{ $errors->first('image_file') }}
                                        </div>
                                        <div class="form-group">
                                        <label>Bahasa Indonesia Description</label>
                                        {{Form::text('bahasa_indonesia_description','',array('class' => 'form-control'))}}
                                        {{ $errors->first('bahasa_indonesia_description') }}
                
                                        </div>


                                        <div class="form-group">
                                        <label>Category</label>
                                        {{ Form::select('category', $name,'',array('class' => 'form-control'))}}
                                        {{ $errors->first('category') }}
                
                                        </div>

                                        <div class="form-group">
                                        <label>Economic Order Quantity</label>
                                        {{Form::input('number','economic_order_quantity','',array('class' => 'form-control'))}}
                                        {{ $errors->first('economic_order_quantity') }}
                                        </div>

                                        <div class="form-group">
                                        <label>Packaged Volume</label>
                                                             
                                        {{Form::input('number','packaged_volume','',array('class' => 'form-control'))}}
                                        {{ $errors->first('packaged_volume') }}
                                        </div>


                                        <div class="form-group">
                                        <label>Packaged Gross wt.</label>
                                        {{Form::input('number','packaged_gross_weight','',array('class' => 'form-control'))}}
                                        {{ $errors->first('packaged_gross_weight') }}
                                        </div>
                                       
                                        <div class="form-group">
                                        <label>Net Weight</label>
                                        {{Form::input('number','net_weight','',array('class' => 'form-control'))}}
                                        {{ $errors->first('net_weight') }}
                                        </div>

                                        <div class="form-group">
                                        <label>Discount Category</label>
     
                                        {{Form::text('discount_category','',array('class' => 'form-control'))}}
                                        {{ $errors->first('discount_category') }}
                                        </div>
                                        
                                         <div class="form-group">
                                        <label>Part Description</label>
                                        
                                        {{Form::text('part_description','',array('class' => 'form-control'))}}
                                        {{ $errors->first('part_descriptions') }}
                                        </div>
                                        <div class="form-group">
                                        <label>Units of Measure</label>

                                        {{Form::select('units_of_measure',array('meters'=>'meters',
                                                    'kg'=>'kg',
                                                    'litres'=>'litres',
                                                    'inch'=>'inch',
                                                    'feet'=>'feet'),'',array('class' => 'form-control'))}}
                                        {{ $errors->first('units_of_measure') }}
                                        </div>

                                        <div class="form-group">
                                        <label>Assembly, Kit, Manufactured or Service/Labour</label>

                                        {{Form::select('assembly_kit',array('Assembly'=>'Assembly',
                                                    'Kit'=>'Kit',
                                                    'Manufactured'=>'Manufactured',
                                                    'Purchased'=>'Purchased',
                                                    'Service/Labour'=>'Service/Labour',
                                                    'Phantom'=>'Phantom'),'',array('class' => 'form-control'))}}
                                        {{ $errors->first('assembly_kit') }}
                                        </div>

                                        <div class="form-group">
                                        <label>Current or Obsolete</label>
                                        {{Form::select('current_or_obsolete',array('Current'=>'Current',
                                                    'Obsolete'=>'Obsolete'),'',array('class' => 'form-control'))}}
                                        {{ $errors->first('current_or_obsolete') }}

                                        </div>
                                            <div class="form-group">
                                        <label>batch serial or lot control</label>
                                   
                                        {{Form::select('batch_serial_or_lot_control',array('No Control'=>'No Control',
                                                    'Controlled'=>'Controlled'),'',array('class' => 'form-control'))}}
                                        {{ $errors->first('batch_serial_or_lot_control') }}
                                        </div>

                                        <div class="form-group">
                                        <label>Serialised (Note, this has no effect if the item is not Controlled)</label>

                                        {{Form::select('serialised',array('YES'=>'YES',
                                                    'NO'=>'NO'),'',array('class' => 'form-control'))}}
                                        {{ $errors->first('serialised') }}
                                        </div>


                                        <div class="form-group">
                                        <label>perishable</label>
                                        
                                        {{Form::select('perishable',array('YES'=>'YES',
                                                    'NO'=>'NO'),'',array('class' => 'form-control'))}}
                                        {{ $errors->first('perishable') }}
                                        </div>


                                        <div class="form-group">
                                        <label>Decimal Places for display Quantity</label>
                                        
                                        {{Form::input('number','decimal_places_for_display_quantity','',array('class' => 'form-control'))}}
                                        {{ $errors->first('decimal_places_for_display_quantity') }}
                                        </div>

                                        <div class="form-group">
                                        <label>Bar Code</label>
                                        {{Form::text(('bar_code'),'',array('class' => 'form-control'))}}
                                        {{ $errors->first('bar_code') }}
                                        
                                        </div>


                                        <div class="form-group">
                                        <label>Pan Size</label>
                                        {{Form::input('number','pan_size','',array('class' => 'form-control'))}}
                                        {{ $errors->first('pan_size') }}
                                        </div>

                                        <div class="form-group">
                                        <label>Shrinkage Factor</label>
                                        {{Form::input('number','shrinkage_factor','',array('class' => 'form-control'))}}
                                        {{ $errors->first('shrinkage_factor') }}
                                        </div>

                                        
                                        <div class="form-group">
                                        
                                        {{link_to('system','Cancel',array("class"=>"btn btn-danger"))}}
                                        {{Form::submit('Update',array("class"=>"btn btn-success"))}}
                                        </div>
                                        </div>
                                        {{Form::close()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>


    </div>

@stop
