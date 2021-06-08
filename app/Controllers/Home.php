<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return redirect()->to(site_url("home/dashboard"));
	}

	public function dashboard()
	{
		return view('home/dashboard');
	}

	public function employeeList()
	{
		return view('home/employee_list');
	}

	public function worklist()
	{
		return view('home/work_list');
	}

	public function dailyStockUpdate()
	{
		return view('home/daily_stock_update');
	}

	public function targetSaleCTC()
	{
		return view('home/target_sale_ctc');
	}

	public function targetSalePremix()
	{
		return view('home/target_sale_premix');
	}
}
