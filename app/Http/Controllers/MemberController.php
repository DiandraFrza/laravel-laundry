<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPesanan;
use Illuminate\Contracts\View\View;

class MemberController extends Controller
{
    public function index(): View
    {
        return view('home');
    }
    public function dashboard()
    {
        return view('member.dashboard');
    }

    public function searchNoHp(Request $request){
        $nomorHp = $request->noHp;
        $data = DataPesanan::where('noHp', 'like', '%' . $nomorHp . '%')->first();
    
        if (!$data) {
            return response()->json(['error' => 'Data tidak ditemukan'], 404);
        }
    
        return response()->json($data);
    }
}

