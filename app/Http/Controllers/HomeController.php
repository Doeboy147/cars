<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use App\Repositories\Listing as Repository;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        try {
            $data['user']     = Auth::user();
            $data['listings'] = $this->getRepository()->getPaginated();
            return view('home', $data);
        } catch (QueryException $exception) {
            return $this->ajaxError($exception->getMessage());
        }
    }


    protected function getRepository()
    {
        return new Repository;
    }


}
