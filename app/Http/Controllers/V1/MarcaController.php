<?php

namespace App\Http\Controllers\V1;

use App\Filters\V1\MarcaFilter;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\MarcaCollection;
use App\Http\Resources\V1\MarcaResource;
use App\Models\Marca;
use App\Http\Requests\V1\StoreMarcaRequest;
use App\Http\Requests\V1\UpdateMarcaRequest;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index(Request $request)
    {
        $filter = new MarcaFilter();
        $queryItems = $filter->transform($request);

        if (count($queryItems) == 0) {
            return new MarcaCollection(Marca::paginate());
        }
        return new MarcaCollection(Marca::where($queryItems)->paginate());
    }

    public function store(StoreMarcaRequest $request)
    {
        return new MarcaResource(Marca::create($request->all()));
    }

    public function show(Marca $marca)
    {
        return new MarcaResource($marca);
    }


    public function update(UpdateMarcaRequest $request, Marca $marca)
    {
        $marca->update($request->all());
    }

    public function destroy(Marca $marca)
    {
        $marca->delete();
    }
}
