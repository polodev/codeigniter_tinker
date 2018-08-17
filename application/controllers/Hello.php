<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Hello extends CI_Controller
{
	public function world($name)
	{
		echo "hello world from $name" ;
	}
}