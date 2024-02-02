<?php

namespace App\Http\Controllers;

use App\Models\SGI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class SGIController extends Controller
{
    public function FormAdd(){

    	return view('SGI.form_entry');
    }

    public function Formstore(Request $request){

        $admin = Auth::guard('web')->user();


	    SGI::insert([
		'company_name' => $request->company_name,
		'month' => $request->month,
        'year' => $request->year,
        'details' => $request->details,
        'total_sale' => $request->total_sale,
        'total_expenditure' => $request->total_expenditure,
        'total_customer_due' => $request->total_customer_due,
        'current_balance' => $request->current_balance,
        'made_by' => $admin->id,
		'created_at' => Carbon::now(),   

    	]);

	    $notification = array(
			'message' => 'Data Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
    } // end method


    public function Formmanage (){

        // $admin = Auth::guard('admin')->user();
        $records = SGI::orderBy('id','DESC')->get();
		return view('SGI.form_manage',compact('records'));

    }

    public function Formview ($id){

        // $admin = Auth::guard('admin')->user();
        $record = SGI::findOrFail($id);
		return view('SGI.form_view',compact('record'));

    }

}
