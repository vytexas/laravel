<?php

namespace App\Http\Controllers;

use Faker\Provider\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CompanyController extends Controller
{

    public function index()
    {
        $companies = \App\Models\Company::all();
        return view("pages.home")->with(['companies' => $companies]);
    }

    public function registerCompany()
    {
        return view('pages.register-company');

    }

    public function registerstore(Request $request)
    {


        $this->validate(request(), [
            'name' => 'required',
            'code' => 'required',
            'adress' => 'required',
            'description' => 'required'

        ]);
        $companies = new \App\Models\Company([
            'name' => $request->post('name'),
            'code' => $request->post('code'),
            'adress' => $request->post('adress'),
            'description' => $request->post('description'),
        ]);

        $companies->save(); // Saving Data


        return redirect("/");


    }

    public function delete($id)
    {

        $company = DB::table("companies")->where("id", $id)->delete();


        return redirect('/');
    }


    public function editFirm($id)
    {

        $company = DB::table("companies")->where("id", $id)->get();

        return view('pages.edit-page')->with("company",$company);


    }


    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'name' => 'required',
            'code' => 'required',
            'adress' => 'required',
            'description' => 'required'

        ]);
        $companies = new \App\Models\Company([
            'name' => $request->post('name'),
            'code' => $request->post('code'),
            'adress' => $request->post('adress'),
            'description' => $request->post('description'),
        ]);

        $firm = DB::table('companies')
            ->where('id', $id)
            ->update(['name' => $companies->name,
                'code' => $companies->code,
                'adress' => $companies->adress,
                'description' => $companies->description

            ]);


        return redirect("/");
    }

}



