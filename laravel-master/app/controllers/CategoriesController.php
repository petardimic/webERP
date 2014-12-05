<?php
/**
	Yash Khandelwal
  **/

class CategoriesController extends BaseController
{
	public function get_add_new()
	{
		return View::make('sales_categories.maintenance');
	}
	public function post_add_new()
	{
			$validator = Validator::make(
				Input::all(),
				array(
					'sub_category' => 'required',
					'active' => 'required'
					)					
					);


			if ($validator->fails())
		{
		return Redirect::to('add_categories')->withInput()->withErrors($validator);
		}
	
		else{
				$sub_category = Input::get('sub_category');
				//$display_in_webshop = Input::get('display_in_webshop');
				$active = Input::get('active');
				$select = 'select';
				$edit = 'edit';
				$delete = 'delete';
				$image = 'no image';

				$category = new Category;
				$category->sub_category = $sub_category;
				$category->active=$active;
				$category->select=$select;
				$category->edit=$edit;
				$category->delete=$delete;
				$category->image=$image;

				if($category->save())
			{
				return View::make('sales_categories.maintenance');
			}
			else
			{
				return View::make('home');
			}

		}
	}
public function get_edit($id)
{	
	return View::make('sales_categories.edit')
	->with('categoryx',Category::find($id))->with('id',$id);
}

public function post_edit()
{
	$id = Input::get('id');

	$validation = Validator::make(
				Input::all(),
				array(
					'sub_category' => 'required',
					//'active' => 'required'
					)					
					);
	$sub_category=Input::get('sub_category');
	$active=Input::get('active');
	$destination = public_path().'/assets/images';
	if (Input::hasFile('image'))
	{
	$image = Input::file('image');
	$filename = $image->getClientOriginalName();
	$image = Input::file('image')->move($destination,$filename);
	}
//	if(Category::make($image->getRealPath())->save('public/img/'.$filename))
//	{
//		return 'image uploaded';
//	}

	if($validation->fails())
	{
		return Redirect::to('add_categories')->withInput()->withErrors($validation);
	}
	else{

		$category = Category::find($id);
		$category->sub_category = $sub_category;
		$category->active = $active;
		if (Input::hasFile('image'))
		{
		$category->image = $filename;
		}
		else{
			$category->image = 'no image';
		}
		//$size = Input::file('photo')->getSize();
		$category->save();
		return Redirect::to('add_categories');
	}
}

public function get_delete($id)
{
	$category = Category::find($id);
	$category->delete();

			return Redirect::to('add_categories');


}

}






