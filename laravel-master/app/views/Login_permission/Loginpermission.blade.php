@extends('include/master')
@section('content')
@if(Auth::check())
        @if( Auth::user()->name != 'admin')
            <Script>
             window.location.href = '{{ "http://localhost:8000/dashboard" }}'
            </script>
        @endif
@endif
<script>
function modify(event) {
  var a = document.getElementById("text_input");
  a.value = event.target.innerHTML;


var myNode = document.getElementById("display");
     while (myNode.firstChild)
      {
           myNode.removeChild(myNode.firstChild);
      } 

  
}

function get_user()
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

   var myNode = document.getElementById("display");
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
              
              document.getElementById("display").appendChild(div)                
        
              var sup = document.getElementById(t);
              sup.addEventListener("click", modify , false);
              document.getElementById("display").appendChild(div)                
        
        }

    }
  }
    var user_input=document.getElementById("text_input").value
  
xmlhttp.open("GET","search_user?in="+user_input,true);
xmlhttp.send();

}
var idx="";
 function show_user()
{
  document.getElementById("secretx").style.visibility = "visible";
  document.getElementById("mytable").style.visibility = "visible";
    
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
    window.Info_Title=xmlhttp.responseText;
    json_output=eval("("+window.Info_Title+")");
    //ocument.getElementById("display").innerHTML = window.Info_Title;

    var username = json_output[0]['username'];
     window.idx = json_output[0]['id'];
    var sign_up = json_output[0]['created_at'];
    //alert(username);
    var table = document.getElementById("mytable");
 
    var rowCount = table.rows.length;
    var row = table.insertRow(rowCount);
 
    //row.insertCell(0).innerHTML= '<input type="button" value = "Delete" onClick="Javacsript:deleteRow(this)">';
    row.insertCell(0).innerHTML= username;
    row.insertCell(1).innerHTML= window.idx;
    row.insertCell(2).innerHTML= sign_up;
  }
  }
    var user_input=document.getElementById("text_input").value  
//window.Info_Title=JSON.parse(window.Info_Title);

xmlhttp.open("GET","show_user?in="+user_input,true);
xmlhttp.send();



}

function update_user()
{

var user_input=document.getElementById('perm').value;
//alert(user_input);
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
      document.getElementById("secretxx").style.visibility = "visible";

    document.getElementById("done").innerHTML=xmlhttp.responseText;
    

    }
  }
var user_input=document.getElementById("perm").value;
  
xmlhttp.open("GET","update_user?in="+user_input+"&id="+window.idx,true);
xmlhttp.send();


}


</script>

<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Grant Permissions</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Permissions

                        </div>

                        <div class="form-group">
                                          <label>User Name</label>                                     
                                          <input id="text_input" type="text" class="form-control" onkeyup="get_user()">
                                          <div id="display"> </div>

                                          <button class="btn btn-success" onclick="show_user()">Show</button> 
                                        
                                        </div>

                                    <div class="table-responsive">
                                <table id="mytable" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <th>User-Name</th>
                                        <th>Id</th>
                                        <th>Sign-Up Details</th>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <style>#secretxx{visibility: hidden;}
                            #secretx{visibility: hidden;}
                            #mytable{
                                visibility: hidden;
                            }

                            </style>
                            <div id="secretx">
                                <select id="perm" class="form-control">
                                    <option value="admin">Admin</option>
                                    <option value="customer">Customer</option>
                                    <option value="salesman">Salesman</option>
                                    <option value="inventory_manager">Inventory Manager</option>
                                </select>   
                                <button class="btn btn-success" onclick="update_user()">Update</button> 
                            </div>
                        
                        
                                          </div>
                                          <div id="secretxx" class="col-md-4 col-sm-4">
                            <div class="panel panel-success">
                            <div class="panel-heading">
                            Success
                            </div>
                            <div id="done" class="panel-body">
                                 
                             </div>
                            </div>
                            </div>
                                      </div></div></div>

                            
                        
                     @stop           