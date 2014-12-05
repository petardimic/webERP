@extends('include/master')
@section('content')
@include("errors.global_alert_messages")

<script>
function update () {
  
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    Info_Title=xmlhttp.responseText;
   // json_output=eval("("+Info_Title+")");

    }
  }
    var user_input=document.getElementById("text_input").value
  
xmlhttp.open("GET","search_supplier?in="+user_input,true);
xmlhttp.send();

}

var trid=1;
var val="no";

function but(which)
{
  var  t = document.createElement("td");
  var b= document.createElement("button");
  var n = document.createTextNode("update");
  b.appendChild(n);
  b.class="btn btn-success";
  t.appendChild(b);
  
var a = document.getElementById(which).appendChild(t) ;
window.trid = which;

window.val = document.getElementById("s"+which).value;  
b.onclick = function(){




var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("display").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","update_order?trid="+window.trid+"&val="+window.val,true);
xmlhttp.send();

};
}

function deletex(del)
{

var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("display").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","delete_order?del="+del,true);
xmlhttp.send();

  location.reload();
}
</script>

<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>All Items</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
             
          <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Item -> All Items
                        </div>
                        @if(Auth::check())
                    @if( Auth::user()->name != 'customer')
                        <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                 <thead>
      <tr>
      <th class="text-left">Order ID</th>
      <th class="text-left">User</th>
      <th class="text-left">Date</th>
      <th class="text-left">Supplier</th>     
      <th class="text-left">Items</th>

      <th class="text-left">Bill</th>     
      <th class="text-left">Delivery Status</th>  

      <th class="text-left">Delete</th>     
      

      </tr>
      </thead>
      
    
      @foreach($purchase as $purchase)
                        <tr id={{ $purchase->id }}> 
        <td class="text-left">{{ $purchase->id }} </td>
        <td class="text-left">{{ $purchase->user }} </td>
        <td class="text-left">{{ $purchase->order_date }} </td>
        <td class="text-left">{{ $purchase->supplier }} </td>                   
        <td class="text-left">

        @foreach($orders as $order)
          @if ($order->purchase_order_id == $purchase->id)       
            <p>{{ $order->item; }}
            qty:{{ $order->quantity }}</p>
          @endif
        @endforeach

        </td>
        <td class="text-left">{{ $purchase->bill }} </td>                   

        <td class="text-left" >
          <select id="s{{ $purchase->id }}">
            <option onclick="but({{ $purchase->id }})" value="yes">YES</option>
            <option value="no" onclick="but({{ $purchase->id }})">NO</option>
          </select>


        </td>     
              <td><input type="button" id="d{{ $purchase->id }}" class="btn btn-success" onclick="deletex( {{$purchase->id}})" value="delete">        </td>   
                        </tr>
      
      @endforeach
      </table>
            <div id="display"></div>

      </div>
      @else
       <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
         <thead>
      <tr>
      <th class="text-left">Order ID</th>
      <th class="text-left">User</th>
      <th class="text-left">Date</th>
      <th class="text-left">Supplier</th>     
      <th class="text-left">Items</th>

      <th class="text-left">Bill</th>     
      <th class="text-left">Delivery Status</th>  

      </tr>
      </thead>
      
    
      @foreach($purchase as $purchase)
      @if( $purchase->user ==  Auth::user()->username)
                       <tr id={{ $purchase->id }}> 
        <td class="text-left">{{ $purchase->id }} </td>
        <td class="text-left">{{ $purchase->user }} </td>
        <td class="text-left">{{ $purchase->order_date }} </td>
        <td class="text-left">{{ $purchase->supplier }} </td>                   
        <td class="text-left">

        @foreach($orders as $order)
          @if ($order->purchase_order_id == $purchase->id)       
            <p>{{ $order->item; }}
            qty:{{ $order->quantity }}</p>
          @endif
        @endforeach

        </td>
        <td class="text-left">{{ $purchase->bill }} </td>                   
         <td>{{ $purchase->delivery_status }}</td>
        
                        </tr>
      @endif
      @endforeach
      </table>
            <div id="display"></div>

      </div>
      @endif
      @endif

@stop

