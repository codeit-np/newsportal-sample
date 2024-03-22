<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $company = Company::first();
        return view('backend.company.index', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $company = Company::first();
        if (empty($company)) {
            return view('backend.company.create');
        } else {
            return redirect()->route('company.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $company = new Company();
        $company->name = $request->name;
        $company->address = $request->address;
        $company->pan = $request->pan;
        $company->email = $request->email;

        uploadImage($request, $company);
        $company->save();
        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::find($id);
        return view('backend.company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $company =  Company::find($id);
        $company->name = $request->name;
        $company->address = $request->address;
        $company->pan = $request->pan;
        $company->email = $request->email;

        uploadImage($request, $company);

        $company->update();
        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
