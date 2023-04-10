<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $menusResponse = nova_get_menu_by_slug('admin', 'ru');
        return response()->json($menusResponse);
    }
}
