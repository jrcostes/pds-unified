<?php

namespace App\Http\Controllers;

use App\User;
use App\Sheet;
use App\Sheet2;
use App\Sheet3;
use App\Form;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('form');

    }

    public function form()
    {
        return view('form');
    }

    public function table()
    {


        $products1 =  Sheet::all();
        $products2 = Sheet2::all();
        $products3 = Sheet3::all();
        $products4 = form::all();


        return view('excel_forms.pdsdata', compact('products1', 'products2', 'products3', 'products4'));

        // $records = Form::latest()->paginate();

    }

}
