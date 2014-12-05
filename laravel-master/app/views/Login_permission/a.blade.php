@extends('layouts.main')
@section('content')
@extends('includes/sidebar')

<script>


function modify_supplier(event) {
  var a = document.getElementById("text_input");
  a.value = event.target.innerHTML;


var myNode = document.getElementById("display_supplier");
     while (myNode.firstChild)
      {
           myNode.removeChild(myNode.firstChild);
      } 

  
}

function get_supplier()
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
    Info_Title=xmlhttp.responseText;
    json_output=eval("("+Info_Title+")");

   var myNode = document.getElementById("display_supplier");
     while (myNode.firstChild)
      {
           myNode.removeChild(myNode.firstChild);
      } 

        for (var i in json_output)
        {
              var temp=json_output[i];
              var div = document.createElement('div');
              var t="supplier" + i;
              div.id = t;
              div.innerHTML=temp;
              
              document.getElementById("display_supplier").appendChild(div)                
        
              var sup = document.getElementById(t);
              sup.addEventListener("click", modify_supplier , false);
              document.getElementById("display_supplier").appendChild(div)                
        
        }

    }
  }
    var user_input=document.getElementById("text_input").value
  
xmlhttp.open("GET","search_supplier?in="+user_input,true);
xmlhttp.send();

}


</script>
<section class="">
  <section class = "wrapper">
  @include("errors.global_alert_messages")
  <div class = "row" >
  <div class = "col-lg-12">
  <section class="panel">
    <header class="panel-heading">
      ADD ITEM
    </header>
    <div class="panel-body">
      {{Form::open(array('url'=>'stocks_updated',"class" => "form-horizontal bucket-form"))}}
      
      <div class="form-group">
        <label class="col-sm-3 control-label">Item Code</label>
        <div class="col-sm-4">
        {{Form::text('item_code',null, array('id' => 'awesome'))}}
        {{ $errors->first('item_code') }}
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label">Stock-Left</label>
        <div class="col-sm-4">
        {{Form::number('stock_left')}}
        {{ $errors->first('stock_left') }}
        </div>
      </div>

      <div class="pull-right">
        {{link_to('system','Cancel',array("class"=>"btn btn-danger"))}}
        {{Form::submit('Update',array("class"=>"btn btn-success"))}}
      </div>
      {{Form::close()}}
    </div>
  </section>
  </div>
  </div>
  </section>
</section>
@stop
