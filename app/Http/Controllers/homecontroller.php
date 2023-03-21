<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Models\Companies;
use App\Models\employee;

class homecontroller extends Controller
{
    public function loadlogin()
    {
        return view('login');
    }
    public function loaddashboard()
    {
        $company_count = Companies::count();
        $employee_count = employee::count();
        return view('crm.dashboard', compact('company_count', 'employee_count'));
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')
                ->withSuccess('Signed in');
        } else {

            return redirect()->back()->with('error', 'Login details are not valid');
        }
    }

    public  function logout()
    {
        session()->flush();
        Auth::logout();

        return redirect(route('home'));
    }
    public function loadcompanies()
    {
        $data = Companies::all();
        return view('crm.company', compact('data'));
    }
    public function loadaddcompanies()
    {
        return view('crm.addcompany');
    }
    public function addcompanies(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'website' => 'required',
        ]);
        $company = new companies;
        $company->name = $request->name;
        $company->email = $request->email;
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $name = $image->getClientOriginalName();
            $path = $image->store('public/logo/' . $name);
            $path = str_replace('public', '', $path);
            $company->logo = $path;
        }
        $company->website = $request->website;
        $company->save();
        return redirect()->route('loadcompanies')->with('success', 'Company added successfully');
    }
    public function deletecompanies($id, Companies $company)
    {
        try {
            if (File::exists(public_path('storage/logo' . $company->logo))) {
                File::delete(public_path('storage/logo' . $company->logo));
            }
            $data = Companies::find($id);
            $data->delete();
            return redirect()->back()->with('success', 'Company deleted successfully');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Failed to delete Album image');
        }
    }
    public function loadupdatecompany($id)
    {
        $data = Companies::find($id);
        return view('crm.updatecompany', compact('data'));
    }
    public function updatecompany(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'website' => 'required',
        ]);
        $company = Companies::find($id);
        $company->name = $request->name;
        $company->email = $request->email;
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $name = $image->getClientOriginalName();
            $path = $image->store('public/logo/' . $name);
            $path = str_replace('public', '', $path);
            $company->logo = $path;
        }
        $company->website = $request->website;
        $company->save();
        return redirect()->route('loadcompanies')->with('success', 'Company updated successfully');
    }
    public function loademployees()
    {
        $data = employee::join('companies', 'companies.id', '=', 'employees.company_id')->select('employees.*', 'companies.name as company_name')->get();
        return view('crm.employee', compact('data'));
    }
    public function loadaddemployee()
    {
        $data = Companies::all();
        return view('crm.addemployee', compact('data'));
    }
    public function addemployee(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'company' => 'required',
        ]);
        $employee = new employee;
        $employee->firstname = $request->firstname;
        $employee->lastname = $request->lastname;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->company_id = $request->company;
        $employee->save();
        return redirect()->route('loademployees')->with('success', 'Employee added successfully');
    }
    public function deleteemployee($id, employee $employee)
    {
        try {
            $data = employee::find($id);
            $data->delete();
            return redirect()->back()->with('success', 'Employee deleted successfully');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Failed to delete Employee');
        }
    }
    public function loadupdateemployee($id)
    {
        $company = Companies::all();
        $data = employee::find($id)->join('companies', 'companies.id', '=', 'employees.company_id')
            ->select('employees.*', 'companies.name as company_name')->first();
        // dd($data,$company);
        return view('crm.updateemployee', compact('data', 'company'));
    }
    public function updateemployee(Request $request, $id)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'company' => 'required',
        ]);
        $employee = employee::find($id);
        $employee->firstname = $request->firstname;
        $employee->lastname = $request->lastname;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->company_id = $request->company;
        $employee->save();
        return redirect()->route('loademployees')->with('success', 'Employee updated successfully');
    }
}
