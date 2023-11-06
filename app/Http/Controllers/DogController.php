<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;

class DogController extends Controller
{

    public function index()
    {
        $dogs = Dog::all();

        return $dogs;
    }

    public function store(Request $request)
    {
        $dogs = Dog::create($request->all());

    }

    public function show(string $id)
    {
        $dogs = Dog::findOrFail($id);

        return $dogs;

    }

    public function update(Request $request, string $id)
    {
        $dogs = Dog::findOrFail($id);

        $dogs->update($request->all());

    }

    public function destroy(string $id)
    {
        $dogs = Dog::findOrFail($id);
        $dogs->delete();
    }
}
