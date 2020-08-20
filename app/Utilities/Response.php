<?php

namespace App\Utilities;

class Response
{
    const SUCCESS = 'success';

    const ERROR = 'error';

    const WARNING = 'warning';

    public $message;

    private $status;

    public $reload = false;

    public $redirect = false;

    public function __construct($message, $status = self::SUCCESS, $redirect = false, $reload = false)
    {
        $this->message = $message;

        $this->status = $status;

        $this->reload = $reload;

        $this->redirect = $redirect;

        $this->message = $message;
    }
}
