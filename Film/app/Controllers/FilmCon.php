<?php
namespace App\Controllers;

class FilmCon extends BaseController
{

public function home()
	{return view('home'); }

public function action()
	{return view('action'); }

public function comedy()
	{return view('comedy'); }

public function science_fiction()
	{return view('science_fiction'); }	

public function horror()
	{return view('horror'); }			

}