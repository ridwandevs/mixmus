<?php

namespace App\Http\Controllers\Api\Test;

use App\Http\Controllers\Controller;
use App\Repositories\Storages\FileRepository;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $repo = new FileRepository($request->file('file'));

        return $repo->rename();
    }
}
