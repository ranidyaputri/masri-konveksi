<?php

namespace App\Http\Controllers;

use App\Models\User;
use Ramsey\Uuid\Uuid;
use App\Models\Status;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Transaction::all();

        $string = User::where('name', Auth::user()->name)->first()->name;
        $name = explode(" ", $string);
        $splitname = $name[0];

        return view('pages.admin.track-status.index', [
            'datas' => $datas,
            'name' => $splitname,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        

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
        $datas = Transaction::find($id);
        $status = Status::all();

        $string = User::where('name', Auth::user()->name)->first()->name;
        $name = explode(" ", $string);
        $splitname = $name[0];

        return view('pages.admin.track-status.edit', [
            'datas' => $datas,
            'status' => $status,
            'name' => $splitname,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datas = Transaction::find($id);
        $datas->status = $request['status'];
        $datas->save();

        return redirect('/update-status');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
