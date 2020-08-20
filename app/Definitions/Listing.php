<?php

namespace App\Definitions;

use Laravel5Helpers\Definitions\Definition;

class Listing extends Definition
{
    public $user_id;

    public $maker;

    public $model;

    public $year;

    public $price;

    public $image;


    public function __construct($data)
    {
        parent::__construct($data);
    }

    protected function setValidators()
    {
        return $this->validators = [
            'maker'   => 'bail|required',
            'model'   => 'bail|required',
            'year'    => 'bail|required',
            'price'   => 'bail|required',
            'image'   => 'bail|required',
            'user_id' => 'bail|required',
        ];
    }
}
