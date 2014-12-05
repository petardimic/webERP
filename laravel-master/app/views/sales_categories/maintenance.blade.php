@extends('include/master')
@section('content')
@if(Auth::check())
        @if( Auth::user()->name == 'customer')
            <Script>
             window.location.href = '{{ "http://localhost:8000/dashboard" }}'
            </script>
        @endif
@endif

<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Add Category</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Inventory -> Add Category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                {{Form::open(array('url'=>'category_saved',"class" => "form-horizontal bucket-form"))}}
			
                                        <div class="form-group">
                                        <label>Sub Category</label>
                                            {{Form::text('sub_category','',array('class'=>'form-control'))}}
											{{ $errors->first('sub_category') }}
										</div>

                                        <div class="form-group">
                                        <label>Display in webSHOP?:</label>
											 	{{Form::select('active',array('Yes'=>'Yes','No'=>'No'),'',array('class'=>'form-control'))}}
										</div>

						    		    <div class="form-group">
                                  									
										{{link_to('system','Cancel',array("class"=>"btn btn-danger"))}}
										{{Form::submit('Update',array("class"=>"btn btn-success"))}}
   										</div>
   										{{Form::close()}}
   									</div>
   								</div>
   								<br><br>
   								<?php 
									$categories = DB::table('sales_category_maintenance')->get();
								?>
   								<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Sub Category</th>
                                            <th>Active?</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									    @foreach ($categories as $category)
										<tr> 
											<td>{{ $category->sub_category }}</td>
											<td>{{ $category->active }}</td>
											<td>{{ $category->select }}</td>
											<td>{{ HTML::linkRoute('edit_categories','Edit',array($category->id)) }}</td>
											<td>{{ HTML::linkRoute('delete_categories','Delete',array($category->id)) }}</td>
											@if ($category->image != 'no image')
											<td><img class="img-responsive" width='50px' height='50px' src="/assets/images/{{ $category->image }}" ></td>

											@else
											<td>{{$category->image }}</td>
											@endif
										</tr>
										@endforeach
                  </tbody>
                                    </table>
   							</div>
   						</div>
   					</div>
   				</div>
   			</div>
    

    @stop

