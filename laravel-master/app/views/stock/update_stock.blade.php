@extends('include/master')
@section('content')
@include("errors.global_alert_messages")

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

<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Update Stocks</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Stock -> update stocks
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                      {{Form::open(array('url'=>'stocks_updated',"class" => "form-horizontal bucket-form"))}}
                                        <div class="form-group">
                                        <label>Item Name</label>
                                         {{Form::text('item_code',null, array('id' => 'awesome','class'=>'form-control'))}}
                                        {{ $errors->first('item_code') }}
                                       
                                        </div>

                                        <div class="form-group">
                                        <label>Stock left</label>
                                         {{Form::number('stock_left','',array('class'=>'form-control'))}}
                                          {{ $errors->first('stock_left') }}
       
                                        </div>

                                        <div class="form-group">
                                        
                                        {{link_to('system','Cancel',array("class"=>"btn btn-danger"))}}
                                        {{Form::submit('Update',array("class"=>"btn btn-success"))}}

                                        {{Form::close()}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                                        @stop

                              
