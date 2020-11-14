<?php


namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{


    public function viewAllCompanies(Request $request)
    {
        $companies = Company::orderBy('id', 'ASC');

        $companies = $companies->get();

        return view('view-companies')
            ->with('companies', $companies);
    }

    public function addNewCompany(Request $request)
    {
        $company = new Company();
        $company->name = $request->name;
        $company->code = $request->code;
        $company->address = $request->address;
        $company->country = $request->country;
        $company->save();

        return redirect()->route('company.all');
    }


    public function deleteCompany(Request $request)
    {

        Company::where('id', $request->company_id)->delete();
        return redirect()->route('company.all');
    }

    public function editCompany(Request $request, $id)
    {

        $company = Company::where('id', $id)->first();
        return  view('edit-company')->with('company', $company);
    }

    public function updateCompany(Request $request, $id)
    {

        Company::where('id', $id)->update([
            'name' => $request->name,
            'code'  => $request->code,
            'address'  => $request->address,
            'country'  => $request->country,

        ]);
        return redirect()->route('company.all');
    }
}
