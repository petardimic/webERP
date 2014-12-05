@extends('include/master')
@section('content')


<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>All Items</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Item -> All Items
                        </div>
                        <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                    <th class="text-left">Item Code</th>
                    <th class="text-left">Item Category</th>
                    <th class="text-left">Net weight</th>
                    <th class="text-left">Discount Category</th>
                    <th class="text-left">Stock Left</th>
                    </tr>
                    </thead>
                    @foreach($items as $item)
                    <tr>
                        <td class="text-left">{{ $item->item_code }}</td>
                        <td class="text-left">{{ $item->category }}</td>
                        <td class="text-left">{{ $item->net_weight }}</td>
                        <td class="text-left">{{ $item->discount_category }}</td>
                        <td class="text-left"> 

                        <?php   foreach($stocks as $stock)
                              if($item->item_code == $stock->item_code)
                                    {echo $stock->Stock_left;}
                                    ?>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
            @stop