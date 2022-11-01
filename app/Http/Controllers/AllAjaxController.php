<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Countries;

class AllAjaxController extends Controller
{
    public function filterCity(Request $request)
	{
		$countryRequest = $request->input('country');

		$dataCity = Countries::select('city')->where('country','=',$countryRequest)->groupBy('city')->get();
	    $isi = '<option value=""></option>';
	    if(count($dataCity) > 0){
			foreach($dataCity as $row)
			{
				$isi .= "<option value='".$row->city."'>".$row->city."</option>";
			}

			$data = ['isi' => 'ada', 'data' => $isi];
		}else{
			$data = ['isi' => 'tidak ada', 'data' => $isi];
		}

		return response()->json($data);
	}
}
