<?php

namespace App\Http\Controllers;
use App\Models\ShopList;
use Illuminate\Http\Request;

class ShopListController extends Controller
{
    public function index()
    {
        $shoplist = ShopList::all();
        return view('men', ['menlist' => $shoplist]);
    }
    public function menapi()
    {
        $menapi = ShopList::all();
        return response()->json($menapi);
    }
}
