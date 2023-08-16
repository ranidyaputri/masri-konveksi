<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;
use App\Models\Transaction;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Transaction::all();
        // dd($datas);
        return view('pages.admin.order.index', [
            'datas' => $datas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jumlah_barang' => 'required|numeric',
            'total_bayar' => 'required|numeric',
            'tipe_bayar' => 'required',
        ]);

        $order = Order::create([
            'nama_barang' => $request['nama_barang'],
            'jumlah_barang' => $request['jumlah_barang'],
            'deskripsi' => $request['deskripsi'],
        ]);

        $transaksi = Transaction::create([
            'id' => Str::random(10),
            'id_order' => $order->id,
            'total_bayar' => $request['total_bayar'],
            'tipe_bayar' => $request['tipe_bayar'],
            'status' => "Pesanan diproses",
        ]);

        return redirect('/order');
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
