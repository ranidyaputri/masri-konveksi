<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LacakPesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $splitname = "";
        if(Auth::check()){
            $string = User::where('name', Auth::user()->name)->first()->name;
            $name = explode(" ", $string);
            $splitname = $name[0];
        }

        if (request('search')) {
            if(Transaction::where('name', 'like', '%' . request('search') . '%')){
                $datas = Transaction::where('id', 'like', '%' . request('search') . '%')->get();
            }else{
                return [];
            }
        } else {
            $datas = [];
        }

        return view('search-order', [
            'name' => $splitname,
            'datas' => $datas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
