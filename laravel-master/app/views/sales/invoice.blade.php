<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Invoice</title>
<style>
@font-face {
	font-family: SourceSansPro;
src: url(SourceSansPro-Regular.ttf);
}

.clearfix:after {
content: "";
display: table;
clear: both;
}

a {
color: #0087C3;
       text-decoration: none;
}

body {
position: relative;
width: 21cm;  
height: 29.7cm; 
margin: 0 auto; 
color: #555555;
background: #FFFFFF; 
	    font-family: Arial, sans-serif; 
	    font-size: 14px; 
	    font-family: SourceSansPro;
}

header {
padding: 10px 0;
	 margin-bottom: 20px;
	 border-bottom: 1px solid #AAAAAA;
}

#logo {
float: left;
       margin-top: 8px;
}

#logo img {
height: 70px;
}

#company {
float: right;
       text-align: right;
}


#details {
	margin-bottom: 50px;
}

#client {
	padding-left: 6px;
	border-left: 6px solid #0087C3;
float: left;
}

#client .to {
color: #777777;
}

h2.name {
	font-size: 1.4em;
	font-weight: normal;
margin: 0;
}

#invoice {
float: right;
       text-align: right;
}

#invoice h1 {
color: #0087C3;
       font-size: 2.4em;
       line-height: 1em;
       font-weight: normal;
margin: 0  0 10px 0;
}

#invoice .date {
	font-size: 1.1em;
color: #777777;
}

table {
width: 100%;
       border-collapse: collapse;
       border-spacing: 0;
       margin-bottom: 20px;
}

table th,
      table td {
padding: 20px;
background: #EEEEEE;
	    text-align: center;
	    border-bottom: 1px solid #FFFFFF;
      }

table th {
	white-space: nowrap;        
	font-weight: normal;
}

table td {
	text-align: right;
}

table td h3{
color: #57B223;
       font-size: 1.2em;
       font-weight: normal;
margin: 0 0 0.2em 0;
}

table .no {
color: #FFFFFF;
       font-size: 1.6em;
background: #57B223;
}

table .desc {
	text-align: left;
}

table .unit {
background: #DDDDDD;
}

table .qty {
}

table .total {
background: #57B223;
color: #FFFFFF;
}

table td.unit,
      table td.qty,
      table td.total {
	      font-size: 1.2em;
      }

table tbody tr:last-child td {
border: none;
}

table tfoot td {
padding: 10px 20px;
background: #FFFFFF;
	    border-bottom: none;
	    font-size: 1.2em;
	    white-space: nowrap; 
	    border-top: 1px solid #AAAAAA; 
}

table tfoot tr:first-child td {
	border-top: none; 
}

table tfoot tr:last-child td {
color: #57B223;
       font-size: 1.4em;
       border-top: 1px solid #57B223; 

}

table tfoot tr td:first-child {
border: none;
}

#thanks{
	font-size: 2em;
	margin-bottom: 50px;
}

#notices{
	padding-left: 6px;
	border-left: 6px solid #0087C3;  
}

#notices .notice {
	font-size: 1.2em;
}

footer {
color: #777777;
width: 100%;
height: 30px;
position: absolute;
bottom: 0;
	border-top: 1px solid #AAAAAA;
padding: 8px 0;
	 text-align: center;
}

</style>
</head>
<body>
<header class="clearfix">
<div id="logo">
<img src="/assets/images/webERP.gif" alt="">
</div>
<div id="company">
<h2 class="name">webERP</h2>
<div>Affosoft Technologies, Hyderabad</div>
<div>India</div>
<?php
$purchase_orders = DB::table('purchase_orders')->get();
$purchase_order = Purchase::find($id);
?>
<div><a href="https://www.facebook.com/yashvardhan.kaurav">yash.patel@students.iiit.ac.in</a></div>
</div>
</div>
</header>
<main>
<div id="details" class="clearfix">
<div id="client">
<div class="to">INVOICE TO:</div>
<h2 class="name">Costumer Name : {{$purchase_order->user}}</h2>
<div class="address">Address : IIIT-Hyderabad, Gachibowili, Hyderabad, India</div>
<div class="email"><a href="https://www.facebook.com/yashvardhan.kaurav">costumer's email address</a></div>
</div>
<div id="invoice">
<h1>INVOICE</h1>
</div>
</div>
<table border="0" cellspacing="0" cellpadding="0">
<thead>
<tr>
<th class="no">#</th>
<th class="desc">DESCRIPTION</th>
<th class="unit">UNIT PRICE</th>
<th class="qty">QUANTITY</th>
<th class="total">TOTAL</th>
<?php
$var = 1;
$unit_price = 0;
$grand_total = 0;
$each_total = 0;
$quantity = 0;
$items = DB::table('purchase_order_items')->get();
$prices = DB::table('prices')->get();
?>
</tr>
</thead>
<tbody>
@foreach ($items as $item)
	@if ($item->purchase_order_id == $id)
	<tr>
	<td>{{$var}}<?php $var=$var+1; ?></td>
	<td>{{$item->item}}</td>
	<?php
		foreach($prices as $price)
		{
			if(strcmp($price->item_name,$item->item)==0)
			{
				$unit_price = $price->price;
			}
		}
	?>
	<td>{{$unit_price}}</td>
	<td>{{$item->quantity}}</td>
	<?php
		$each_total = $unit_price*$item->quantity;
		$grand_total = $grand_total + $each_total;
	?>
	<td>{{$each_total}}</td>
	</tr>
	@endif
	
@endforeach
</tbody>
<tfoot>
<tr>
<td colspan="2"></td>
<td colspan="2">SUBTOTAL</td>
<td>{{$grand_total}}</td>
</tr>
<tr>
</tr>
<tr>
<td colspan="2"></td>
<td colspan="2">GRAND TOTAL</td>
<td>{{$grand_total}}</td>
</tr>
</tfoot>
</table>
<div id="thanks">Thank you!</div>
<div id="notices">
</div>
</main>
<footer>
Invoice was created on a computer and is valid without the signature and seal.
</footer>
</body>
</html>