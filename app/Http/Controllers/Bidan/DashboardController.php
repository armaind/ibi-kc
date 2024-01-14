<?php

namespace App\Http\Controllers\Bidan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $items = Berita::paginate(4);

        return view('pages.bidan.index', [
            'items' => $items
        ]);
    }
}
