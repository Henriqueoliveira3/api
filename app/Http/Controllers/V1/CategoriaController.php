<?php

namespace App\Http\Controllers\V1;

use App\Filters\V1\CategoriaFilter;
use App\Http\Resources\V1\CategoriaCollection;
use App\Http\Resources\V1\CategoriaResource;
use App\Models\Categoria;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreCategoriaRequest;
use App\Http\Requests\V1\UpdateCategoriaRequest;
use App\Models\Marca;
use Illuminate\Http\Request;
class CategoriaController extends Controller
{
    public function index(Request $request)
    {
        $filter = new CategoriaFilter();
        $queryItems = $filter->transform($request);

        if (count($queryItems) == 0) {
            return new CategoriaCollection(Categoria::paginate());
        }
        return new CategoriaCollection(Marca::where($queryItems)->paginate());
    }

    public function store(StoreCategoriaRequest $request)
    {
        return new CategoriaResource(Categoria::create($request->all()));
    }

    public function show(Categoria $categoria)
    {
        return new CategoriaResource($categoria);
    }

    public function update(UpdateCategoriaRequest $request, Categoria $categoria)
    {
        $categoria->update($request->all());
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
    }
}
