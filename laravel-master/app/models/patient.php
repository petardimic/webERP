<?php

class Patient extends \Eloquent {
	protected $fillable = array('name',
								'age',
								'phone');

}