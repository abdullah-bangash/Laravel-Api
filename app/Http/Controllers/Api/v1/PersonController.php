<?php

namespace App\Http\Controllers\Api\v1;
use App\Person;
use App\Http\Resources\PersonResource;
use App\Http\Resources\PersonResourceCollection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    
    public function index() : PersonResourceCollection
    {
        return new PersonResourceCollection(Person::all());
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $request -> validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'city' => 'required',
        ]);
        $person = Person::create($request->all());
        return new PersonResource($person);
    }

   
    public function show(Person $person) : PersonResource
    {
      return new PersonResource($person);
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, Person $person) : PersonResource
    {
        $request -> validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'city' => 'required',
        ]);
       // $person = Person::find($id);
        $person->update($request->all());
        return new PersonResource($person);
    }

    
    public function destroy(Person $person)
    {
        $person->delete();
        return response()->json();
    }
}

