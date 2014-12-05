@extends('include/master')
@section('content')


<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<style >
#Table{

   position: absolute;
    top: 200px;
    right: 25px;
}

#order{
  position: relative;
}
</style>
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
function modify_location(event) {
  var a = document.getElementById("location_input");
  a.value = event.target.innerHTML;


var myNode = document.getElementById("display_location");
     while (myNode.firstChild)
      {
           myNode.removeChild(myNode.firstChild);
      } 

  
}
function modify_items(event) {
  var a = document.getElementById("item_input");
  var input = a.value;
  var b=a.value;



  var l=event.target.innerHTML;
  //alert(l);
  var c= "";
  for(i=0; i<l.length; i++)
  {
      if(l[i]==" " && l[i+1]=="Q")
      {
        var j=i;
        while(l[j-1]!=" ")
        {
          j-=1;
        }
        while(j != i)
        {
          c+=l[j];
          j+=1;
        }
        var x = input.indexOf(c);

      }

        
  }
  
  var i=l.length-3;
  /*while(l[i] != 'm')
  {
    i--;
  }*/
  i = i-1;
  if(l[i] != 'm')
  {
    i=i-1;
  }
  //alert(l[i]);
  i++;
  var secret = "";
  while(i != l.length - 2)
  {
    secret = secret + l[i];
    i++;
  }
  secret = "item"+secret;                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
 



var d = a.value;

  for (var i=d.length;i>=0;i--)

  {
    if(d[i] == ',')
    {
      b="";
      for(var j=0;j<=i;j++)
      {
        b += d[j];
      }
      break;
    }

    else if(i==0)
    {
      b="";
    }


  } 
  String.prototype.replaceAt=function(index, character) {
    return this.substr(0, index) + character + this.substr(index+character.length);
}
  var quan = document.getElementById(secret).value;
  if(quan)
  { 
    quan1=quan;
    quan = "{" + quan + "}";
  }
  if(x > -1)

  { //alert(quan1);
    var f =  a.value;
    //alert(x +"." + a.value);
      for(i=x; i<f.length; i++)
      {
        if(f[i] == "{")
          {
            var k = parseInt(f[i+1]) + parseInt(quan1);
            f = b.replaceAt(i+1,k.toString());
            break;
          }
      }
      a.value=f ;

  }
  else{
a.value=b + c + quan  ;
  }
var myNode = document.getElementById("display_items");
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

function get_items()
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
    //Falert(json_output);

   var myNode = document.getElementById("display_items");
     while (myNode.firstChild)
      {
           myNode.removeChild(myNode.firstChild);
      } 


      x= <?php $items = DB::table('inventory_items')->get(); 
    echo json_encode($items);
    ?>;
//    alert(x);


<?php $sec=-1; ?>
        for (var i in json_output)
        {       
              var temp=json_output[i];
              var div = document.createElement('div');
              var t=item + i;
              div.id=t;
              <?php $sec=1+$sec;?>
              /* var body = document.body;
              var tbl=document.createElement('table');
              tbl.style.width='100px';
              tbl.style.border = "1px solid black";*/
             for ( var j=0 ; j<x.length ; j++)
              {
               // var tr = tbl.inputsertRow();
             //   <?php $sec=1+$sec;?> 
                if (x[j]['item_code'] == temp)
                {
                /*  for(var k =0; k<1;k++)
                  { 
                    <?php $sec=1+$sec;?>
                  }*/ 
      
                  /*var td = tr.insertCell();
                  td.appendChild(document.createTextNode(x[j]['item_code']));
                  
                  td.style.border = "1px solid black";
                  td = tr.insertCell();
                  td.appendChild(document.createTextNode(temp));
                  td.style.border = "1px solid black";      */
              var secret = "item" + i;
               div.innerHTML = x[j]['part_descriptions'] + " " + x[j]['item_code']  + " " + "Quantity : <input size=1 id=" + secret + ">";
                
                }
                //alert(x[j]['part_descriptions']);
              }
              
              
              document.getElementById("display_items").appendChild(div);                
        
              var sup = document.getElementById(t);
              sup.addEventListener("click" , modify_items , true);
              
              document.getElementById("display_items").appendChild(div)                
        
        }
        //body.appendChild(tbl);

    }
  }
  var user_input=document.getElementById("item_input").value
  var item = user_input;
  var count=parseInt("0");
  for(var i=0; i<user_input.length; i++) 
  {
    if(user_input[i] == ',')
       {
        count = count + 1;
        var flag=parseInt("1");
        var j = parseInt(i);
      }
      if(flag == 1)
      {
       item   = "";
       item += user_input[i];          
      }

  }
  
xmlhttp.open("GET","search_item?in="+item,true);
xmlhttp.send();
}

<?php $do = 0; ?>
function save_order()
{<?php $do = 1;

  ?>
  document.getElementById("secretx").style.visibility = "visible";

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
    document.getElementById("done").innerHTML=xmlhttp.responseText;
    }
  }
  var loc=document.getElementById("location_input").value;
  var curr_user = document.getElementById("curr_user").value;
  var cmnt=document.getElementById("comment").value ;
  var all = document.getElementById("text_input").value;
  all += ",";
  all += document.getElementById("item_input").value;

xmlhttp.open("GET","save_order?in="+all+"&usr="+curr_user+"&location="+loc+"&cmnt="+cmnt,true);
xmlhttp.send();


}
window.count=0;

function get_location()
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
    //alert(json_output);

   var myNode = document.getElementById("display_location");
     while (myNode.firstChild)
      {
           myNode.removeChild(myNode.firstChild);
      } 
      window.which_fun = "location";

        for (var i in json_output)
        {//alert(i);
              var temp=json_output[i];
              var div = document.createElement('div');
              var t = "loc" + i;
              div.id= t;
              div.innerHTML=temp;
              
              document.getElementById("display_location").appendChild(div)                
        
              var sup = document.getElementById(t);
              sup.addEventListener("click", modify_location , false);
              document.getElementById("display_location").appendChild(div)                
              
        }

    }
  }
  var user_input=document.getElementById("location_input").value
xmlhttp.open("GET","search_location?in="+user_input,true);
xmlhttp.send();


}

</script>
<?php 
   $max_id = DB::table('purchase_orders')->where('id', DB::raw("(select max(`id`) from purchase_orders)"))->get();
    $x = json_encode($max_id);

    $z = 0;
    $y = NULL;
    for($i=0 ; $i<strlen($x); $i++)
    {
      if($x[$i] == '"')
        {
          $z += 1;
        }
      if($z == 3)
      {
        while($x[$i + 1] != '"' )
        {
          $y = $y.$x[$i + 1];
          $i += 1;
        }
      }


    }

  ?>
    <?php 
$categories = DB::table('users')->get();
?>
<style>
#secretx{
  visibility: hidden;
}
</style>
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
                            Inventory -> Add Category<br>
                            <b>Purchase Order id {{ $y + 1 }}</b>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                              <div id = "secretx"  class="col-md-4 col-sm-4">
                            <div class="panel panel-success">
                            <div class="panel-heading">
                            Success
                            </div>
                            <div id="done" class="panel-body">
                        
                            </div>
                            </div>
                            </div>
                                <div class="col-md-6">
                                        
                                        <div class="form-group">
                                          <label>Order Initiated By</label>                                     
                                           <select id="curr_user" class="form-control">
                                            @foreach ($categories as $category_1)  
                                              <option value="{{ $category_1->username }}"> {{ $category_1->username }} </option>
                                            @endforeach
                                          </select>
                                        </div>
                                        
                                        <div class="form-group">
                                          <label>Supplier</label>                                     
                                          <input id="text_input" type="text" class="form-control" onkeyup="get_supplier()">
                                          <div id="display_supplier"> </div>
                                        </div>

                                        <div class="form-group">
                                          <label>Locations Warehouse</label> 
                                          <input id="location_input" class="form-control" type="text" onkeyup="get_location()">
                                          <div id="display_location"> </div>
                                        </div>

                                        <div class="form-group">
                                          <label>Items</label> 
                                          <input class="form-control" id="item_input" type="text" onkeyup="get_items()">
                                          <div id="display_items"></div>
                                        </div>

                                        <textarea id="comment" class="form-control" placeholder="Add Comments :)" rows="4" cols="50"></textarea>
                                        <button id="order" type="button" class="btn btn-success" onclick="save_order()">Order</button>


</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


@stop