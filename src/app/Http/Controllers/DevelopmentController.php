<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

/**
 * 開発者向けページ用コントローラー
 */
class DevelopmentController extends Controller
{
    public function __construct(
    ) {}

    public function index(Request $request)
    {
        return view('development.index');
    }
}
