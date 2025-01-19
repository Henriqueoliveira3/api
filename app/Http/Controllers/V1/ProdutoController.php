<?php

namespace App\Http\Controllers\V1;

use App\Filters\V1\ProdutoFilter;
use App\Http\Resources\V1\ProdutoResource;
use App\Http\Resources\V1\ProdutoCollection;
use App\Models\Produto;
use App\Http\Requests\V1\StoreProdutoRequest;
use App\Http\Requests\V1\UpdateProdutoRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(Request $request)
    {
        $filter = new ProdutoFilter();
        $queryItems = $filter->transform($request);

        if (count($queryItems) == 0) {
            $produtos = Produto::paginate();

            return new ProdutoCollection($produtos->appends($request->query()));
        }

        $produtos = Produto::where($queryItems);

        return new ProdutoCollection($produtos->paginate()->appends($request->query()));
    }

    public function store(StoreProdutoRequest $request)
    {
        return new ProdutoResource(Produto::create($request->all()));
    }

    public function show(Produto $produto)
    {
        return new ProdutoResource($produto);
    }

    public function update(UpdateProdutoRequest $request, Produto $produto)
    {
        $produto->update($request->all());
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
    }
}
