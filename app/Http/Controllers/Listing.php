<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Repositories\Listing as Repository;
use App\Definitions\Listing as Definition;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class Listing extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'imageFile' => 'required',
                'maker'     => 'required',
            ]);
            $this->upload($request->all());
            return $this->ajaxSuccess('List added successfully', false, true);
        } catch (QueryException $exception) {
            return $this->ajaxError($exception->getMessage());
        }
    }

    private function upload($request)
    {
        $file = $request['imageFile'];
        try {
            $imagePath = public_path('images/uploads');

            if (!File::exists($imagePath)) {
                File::makeDirectory($imagePath, 0777, true, true);
            }

            $fileName = Str::random(24) . '.' . $file->getClientOriginalExtension();
            $file->move($imagePath, $fileName);
            $request['image'] = $fileName;
            $this->saveToDataBase($request);
        } catch (FileException $exception) {
            return $this->ajaxError($exception->getMessage());
        }
    }


    private function saveToDataBase($request)
    {
        try {
            return $this->getRepository()->createResource($this->getDefinition($request));
        } catch (QueryException $exception) {
            return $this->ajaxError($exception->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $image = $this->getRepository()->getResource($id);
            if (file_exists($image->getUrl())) {
                unlink($image->getUrl());
            }
            if (file_exists($image->getThumb())) {
                unlink($image->getThumb());
            }
            $this->getRepository()->deleteResource($id);
            return $this->ajaxSuccess('Item removed successfully', false, true);
        } catch (QueryException $exception) {
            return $this->ajaxError($exception->getMessage());
        }
    }

    protected function getRepository()
    {
        return new Repository;
    }

    protected function getDefinition($data)
    {
        return new Definition($data);
    }

}
