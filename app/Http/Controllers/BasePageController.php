<?php


namespace App\Http\Controllers;


class BasePageController
{
	public function showMainView()
	{
		return view('pages.welcome');
	}

	public function showOfferView()
	{
		return view('pages.offer');
	}

	public function showRealizationView()
	{
		return view('pages.realization');
	}

	public function showContactView()
	{
		return view('pages.contact');
	}
}