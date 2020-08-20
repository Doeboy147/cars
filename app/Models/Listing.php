<?php

namespace App\Models;

use Laravel5Helpers\Uuid\UuidModel;

class Listing extends UuidModel
{
    protected $table = 'listings';

    public function user()
    {
        return $this->hasOne('App\Models\User', 'uuid', 'user_id');
    }

    public function getUrl()
    {
        return url('images/uploads/' . $this->image);
    }

    public function getThumb()
    {
        return url('images/uploads/thumbs/' . $this->image);
    }
}
