<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;
use App\Http\Resources\PropertyResource;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PropertyResource::collection(
            Property::query()->orderBy('id', 'desc')->paginate(10)
        );
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePropertyRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StorePropertyRequest $request)
    // {
    //     $data = $request->validated();
    public function store(StorePropertyRequest $request)
    {
        $data = $request->all();

        $property = Property::create($data);
        return response(new PropertyResource($property), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        return new PropertyResource($property);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropertyRequest  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyRequest $request, Property $property)
    {
        $data = $request->validated();
    
        $property->update($data);
        return new PropertyResource($property);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        $property->delete();
        return response("",204);
    }
}
