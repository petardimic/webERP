@extends('include/master')
@section('content')


<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Search Order as per customer</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Users
                        </div>

                        <div class="table-responsive">
                                
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-left">User Name</th>
                                            <th class="text-left">Sales</th>
                                        </tr>
                                        <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td class="text-left">{{ $user->username }}</td>
                            
                                            <td> {{HTML::linkRoute('select_user_sales', 'Edit', array($user->id), array("class"=>"btn btn-primary"))}} </td>
                                         </tr>
                                        @endforeach
                                        </tbody>
                                </table>
                            </div>
                        </div>
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