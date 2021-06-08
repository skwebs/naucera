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

	// reports
	public function targetSaleCTC()
	{
		return view('home/target_sale_ctc');
	}

	public function targetSalePremix()
	{
		return view('home/target_sale_premix');
	}

	public function staffWiseReports()
	{
		return view('home/staff_wise_reports');
	}

	public function leadReports()
	{
		return view('home/lead_reports');
	}

	public function masterReports()
	{
		return view('home/master_reports');
	}

	// complaints
	public function VMComplaints()
	{
		return view('home/vm_complaints');
	}

	public function otherComplaints()
	{
		return view('home/other_complaints');
	}

	public function nauceraGita()
	{
		return view('home/naucera_gita');
	}
}
