<?php

namespace App\Http\Controllers\Api\Company;

use App\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return Company::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $company = Company::create($request->all());
        return $company;
    }

    public function show($id)
    {
        return Company::findOrFail($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $company->update($request->all());

        return $company;
    }

    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();

        return '';
    }
}
