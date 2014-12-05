@extends('include/master')
@section('content')


<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>List of all items corresponding to user {{$name->username}}</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All purchase orders of user {{$name->username}}</br>
                        </div>                        
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        	<thead>
                        		<tr>
                        			<th>All purchase orders [id-supplier]</th>
                        			<th>Status</th>
                                    <th>Invoice</th>
                        		</tr>
                        		@foreach ($purchase as $order)
                        		@if (strcmp($order->user,$name->username)==0)
                        			<tr>
                        				<td>{{$order->id}}-{{$order->supplier}}</td>
                        				@if (strcmp($order->delivery_status,"no")==0)
                        				<td>{{HTML::linkRoute('change_sales_status', 'Undelivered', array($order->id), array("class"=>"btn btn-danger"))}}</td>
                        				@else
                        				<td>{{link_to('#','Delivered',array("class"=>"btn btn-success"))}}</td>
                        				@endif
                                        <td>{{HTML::linkRoute('invoice','Invoice',array($order->id),array("class"=>"btn btn-info"))}}</td>
                        			</tr>
                        			@else
                        			@endif
                        			@endforeach
                        
                        	</thead>
                        </table>
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
                    @stop           
