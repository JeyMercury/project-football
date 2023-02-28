<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function index() {

        $country = Country::all();

        $title = 'Paises';

        return view('countries/countriesIndex', [
            'countries' => $country,
            'title' => $title,
        ]);
    }

    public function details(Country $country) {

        return view('countries/countriesDetails', [
            'country' => $country,
        ]);
    }

    public function create() {

        return view('countries/countriesCreate');
    }

    public function store() {

        // return redirect('usuarios/crear')->withInput();

        $data = request()->validate([
            'name' => ['required', 'unique:countries,name'],
            'diminutive' => '',
            'continent' => '',
            'first_language' => '',
        ], [
            'name.required' => 'El nombre es obligatorio'
        ]);

        Country::create([
            'name' => $data['name'],
            'diminutive' => $data['diminutive'],
            'continent' => $data['continent'],
            'first_language' => '',
        ]);

        return redirect()->route('countries');
    }

    public function edit(Country $country) {

        return view('countries/countriesEdit',[
            'country' => $country,
        ]);
    }

    public function update(Country $country) {
        
        $data = request()->validate([
            'name' => 'required',
            'diminutive' => '',
            'continent' => '',
            'first_language' => '',
        ]);

        $country->update($data);

        return redirect()->route('countries.details', ['country' => $country]);
    }

    function destroy(Country $country) {

        $country->delete();

        return redirect()->route('countries');
    }
}
