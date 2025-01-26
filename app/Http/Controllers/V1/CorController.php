<?php

namespace App\Http\Controllers\V1;

use App\Filters\V1\CorFilter;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\CorResource;
use App\Models\Cor;
use App\Http\Requests\V1\StoreCorRequest;
use App\Http\Requests\V1\UpdateCorRequest;
use App\Http\Resources\V1\CorCollection;
use Illuminate\Http\Request;


class CorController extends Controller
{
    public function index(Request $request)
    {
        $filter = new CorFilter();
        $queryItems = $filter->transform($request);

        if (count($queryItems) == 0) {
            return new CorCollection(Cor::paginate());
        }
        return new CorCollection(Cor::where($queryItems)->paginate());
    }

    public function store(StoreCorRequest $request)
    {
        return new CorResource(Cor::create($request->all()));
    }

    public function show(Cor $core)
    {
        $cor = $core;
        return new CorResource($cor);
    }

    public function update(UpdateCorRequest $request, Cor $core)
    {
        $cor = $core;
        $cor->update($request->all());
    }

    public function destroy(Cor $core)
    {
        $cor = $core;
        $cor->delete();
    }
}
