<?php

namespace App\Modules\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admins;

class AuthController extends Controller
{
    /**
     * @intro 测试
     */
    public function index()
    {
        $params = [
            'created_at' => ['2022-01-1', '']
        ];
        return Admins::ifRange($params, 'created_at', 'created_at', 'date')->get();
    }
}
