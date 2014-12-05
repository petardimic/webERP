@include("errors.global_alert_messages")
@if(Auth::check())
        @if( Auth::user()->name != 'admin' && Auth::user()->name != 'inventory_manager' )
            <Script>
             window.location.href = '{{ "http://localhost:8000/dashboard" }}'
            </script>
        @endif

        @extends( Auth::user()->name == 'admin' ? 'include/master' : 'include/inventory_manager' )
     
          
@endif
  @section('content')
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
                            Items -> Prices
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                {{Form::open(array('url'=>'price_save',"class" => "form-horizontal bucket-form"))}}
      


                                <div class="table-responsive">
                                    {{Form::open(array('url'=>'price_save',"class" => "form-horizontal bucket-form"))}}     
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Item</th>
                                                <th>Select Supplier</th>
                                                <th>Add Price/unit</th>
                                            </tr>
                                        </thead>

                                        <tbody >
                                        @foreach($items as $item)
                                        <tr>
                                            <td class="text-left">{{ $item }}</td>
                                            <td class="text-left">  
                                                {{Form::select("select_supplier$item", $suppliers)}}</td>
                                            <td class="text-left">{{Form::input('number',"price$item")}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                   </table>
                                {{link_to('system','Cancel',array("class"=>"btn btn-danger"))}}
                                {{Form::submit('Update',array("class"=>"btn btn-success"))}}
                            </div>   
    @stop