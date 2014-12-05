<?php

class IndexController extends BaseController
{
	public function gethomepage()
	{
		return View::make('index.index');
	}
}
