<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class ProdutoFilter extends ApiFilter {
    protected $safeParms = [
        'id' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'name' => ['eq'],
        'descricao' => ['eq'],
        'ativo' => ['eq'],
    ];
    protected $columnMap = [];
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];
}