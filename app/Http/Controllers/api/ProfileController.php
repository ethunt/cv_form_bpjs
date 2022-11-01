<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Countries;
// use App\Http\Requests\EmployeeRequest;
// use App\Http\Resources\EmployeeResource;
use Validator;

class ProfileController extends Controller
{
    public function index()
	{
        $countries = Countries::select('country')->groupBy('country')->orderBy('country','asc')->get();
        $city = Countries::select('city')->groupBy('city')->orderBy('city','asc')->get();

        $data = [
            'countries' => $countries,
            'city' => $city,
            'profile' => null,
        ];

        return view('formcv', $data);
    }

    public function showProfile($profile)
	{
        $profile = Employee::select('profileCode','wantedJobTitle','firstName','lastName',
                    'email','phone','country','city','address','postalCode','drivingLicense',
                    'nationality','placeOfBirth','dateOfBirth')
                    ->where('profileCode','=',$profile)->first();
        $countries = Countries::select('country')->where('country','=', $profile->country)->groupBy('country')->orderBy('country','asc')->get();
        $city = Countries::select('city')->where('city','=', $profile->city)->groupBy('city')->orderBy('city','asc')->get();

        $data = [
            'countries' => $countries,
            'city' => $city,
            'profile' => $profile
        ];

        return view('formcv', $data);
        // return response()->json($profile);
    }

    public function createProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'wantedJobTitle' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
            'postalCode' => 'required|numeric',
            'drivingLicense' => 'required',
            'nationality' => 'required',
            'placeOfBirth' => 'required',
            'dateOfBirth' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('api/profile')
            ->withErrors($validator)
            ->withInput();
        }

        DB::beginTransaction();
        $data = new Employee();
        $data->wantedJobTitle = $request->wantedJobTitle;
        $data->firstName  = $request->firstName;
        $data->lastName  = $request->lastName;
        $data->email  = $request->email;
        $data->phone  = $request->phone;
        $data->country  = $request->country;
        $data->city  = $request->city;
        $data->address  = $request->address;
        $data->postalCode  = $request->postalCode;
        $data->drivingLicense  = $request->drivingLicense;
        $data->nationality  = $request->nationality;
        $data->placeOfBirth  = $request->placeOfBirth;
        $data->dateOfBirth  = date('Y-m-d', strtotime($request->dateOfBirth));
        $data->save();
        DB::commit();

        // $employee = Employee::create($request->validated());
        // return new EmployeeResource($employee);

        return redirect('api/profile')->with([
            'success' => 'Data Created Successfully.',
        ]);

        // return response()->json($data);
    }

    public function updateProfile(Request $request, $profile)
    {
        $validator = Validator::make($request->all(), [
            'wantedJobTitle' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
            'postalCode' => 'required|numeric',
            'drivingLicense' => 'required',
            'nationality' => 'required',
            'placeOfBirth' => 'required',
            'dateOfBirth' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('api/profile')
            ->withErrors($validator)
            ->withInput();
        }

        DB::beginTransaction();
        $data = Employee::find($profile);
        $data->wantedJobTitle = $request->wantedJobTitle;
        $data->firstName  = $request->firstName;
        $data->lastName  = $request->lastName;
        $data->email  = $request->email;
        $data->phone  = $request->phone;
        $data->country  = $request->country;
        $data->city  = $request->city;
        $data->address  = $request->address;
        $data->postalCode  = $request->postalCode;
        $data->drivingLicense  = $request->drivingLicense;
        $data->nationality  = $request->nationality;
        $data->placeOfBirth  = $request->placeOfBirth;
        $data->dateOfBirth  = date('Y-m-d', strtotime($request->dateOfBirth));
        $data->save();
        DB::commit();

        // $employee = Employee::create($request->validated());
        // return new EmployeeResource($employee);

        // return redirect('api/profile')->with([
        //     'success' => 'Data has been updated.',
        // ]);

        return response()->json($data);
    }

    public function workingExperience($profile)
	{
        $profile = Employee::select('workingExperience')
                    ->where('profileCode','=',$profile)->first();
        $countries = Countries::select('country')->groupBy('country')->orderBy('country','asc')->get();
        $city = Countries::select('city')->groupBy('city')->orderBy('city','asc')->get();

        $data = [
            'countries' => $countries,
            'city' => $city,
            'profile' => null
        ];

        return view('formcv', $data);
        // return response()->json($profile);
    }
}
