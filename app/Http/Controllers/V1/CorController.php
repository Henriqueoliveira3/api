<?php

namespace App\Http\Controllers\V1;

use App\Filters\V1\CorFilter;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\CorResource;
use App\Models\Cor;
use App\Http\Requests\StoreCorRequest;
use App\Http\Requests\UpdateCorRequest;
use App\Http\Resources\V1\CorCollection;
use Illuminate\Http\Request;

class CorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new CorFilter();
        $queryItems = $filter->transform($request);

        if (count($queryItems) == 0) {
            return new CorCollection(Cor::paginate());
        }
        return new CorCollection(Cor::where($queryItems)->paginate());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cor = Cor::find($id);
        return new CorResource($cor);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cor $cor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCorRequest $request, Cor $cor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cor $cor)
    {
        //
    }
}
