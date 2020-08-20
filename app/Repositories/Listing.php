<?php

namespace App\Repositories;

use App\Models\Listing as Model;
use Laravel5Helpers\Repositories\Search;

class Listing extends Search
{
    protected $pageSize = 4;

    protected function getModel()
    {
        return new Model;
    }
}
