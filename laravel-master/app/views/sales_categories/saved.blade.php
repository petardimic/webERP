 <h1>SAVED</h1>

<?php 
$categories = DB::table('sales_category_maintenance')->get();
?>
<table>
@foreach ($categories as $category)
<tr> 
	<td>{{ $category->sub_category }}</td>
	<td>{{ $category->active }}</td>
	<td>{{ $category->select }}</td>
	<td>{{ $category->edit }}</td>
	<td>{{ $category->delete }}</td>
	<td>{{ $category->sub_category }}</td>


</tr>
@endforeach
</table>