<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // Validasi request
        $validatedData = $request->validate([
            'cart' => 'required|array',
            'cart.*.id' => 'required|exists:products,id',
            'cart.*.quantity' => 'required|numeric',
            // Tambahkan validasi untuk data lain yang diperlukan
        ]);

        // Mulai transaksi
        DB::beginTransaction();
        try {
            // Buat transaksi
            $transaction = Transaction::create([
                // Isi dengan data yang sesuai
            ]);

            // Simpan detail transaksi
            foreach ($validatedData['cart'] as $item) {
                $transaction->details()->create([
                    'product_id' => $item['id'],
                    'quantity' => $item['quantity'],
                    // Tambahkan field lainnya
                ]);
            }

            // Commit transaksi
            DB::commit();

            // Kirim respon sukses
            return response()->json(['success' => 'Transaksi berhasil disimpan.']);
        } catch (\Exception $e) {
            // Rollback transaksi jika ada kesalahan
            DB::rollback();

            // Kirim respon error
            return response()->json(['error' => 'Terjadi kesalahan saat menyimpan transaksi.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
