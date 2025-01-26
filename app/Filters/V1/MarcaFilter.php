<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class MarcaFilter extends ApiFilter {
    protected $safeParms = [
        'id' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'name' => ['eq'],
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
