<?php

namespace App\Modules\Admin;

use App\Http\Controllers\Controller;
use Nichozuo\LaravelHelpers\Exceptions\Err;

class AuthController extends Controller
{
    /**
     * @intro 测试
     * @return mixed
     * @throws Err
     */
    public function index()
    {
        throw Err::NewText('ha ha ha ha');
    }
}
