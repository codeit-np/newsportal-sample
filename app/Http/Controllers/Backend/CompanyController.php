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
        $thal = Company::first();
        return view('backend.company.index', compact('thal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.company.create');
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

        if ($request->hasFile('image')) {
            $file = $request->image;
            $newName = time() . "." . $file->getClientOriginalExtension();
            $file->move("images", $newName);
            $company->logo = "images/$newName";
        }
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

        if ($request->hasFile('image')) {
            $file = $request->image;
            $newName = time() . "." . $file->getClientOriginalExtension();
            $file->move("image", $newName);
            $company->logo = "image/$newName";
        }
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
