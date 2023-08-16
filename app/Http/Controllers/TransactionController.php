<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Transaction::all();
        return view('pages.admin.transaction.index', [
            'datas' => $datas,
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
        $request->validate([
            'id_order' => 'required',
            'total_bayar' => 'required|numeric',
            'tipe_bayar' => 'required',
        ]);

        Transaction::create([
            'id' => Uuid::uuid4(),
            'id_order' => $request['id_order'],
            'total_bayar' => $request['total_bayar'],
            'tipe_bayar' => $request['tipe_bayar'],
            'status' => $request['status'],
        ]);

        return redirect('/transaction');
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
