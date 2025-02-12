<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    //
    public function index(){
        $assets = Asset::latest()->paginate();
        return view('dashboard.pages.assets', [
            'assets' => $assets
        ]);
    }
    
}
