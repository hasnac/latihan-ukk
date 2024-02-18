<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\peminjaman;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = peminjaman::with(['user', 'buku'])
            ->orderBy('tanggal_pinjam', 'desc')
            ->paginate(5);
        return view('pinjam.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::orderBy('id_user', 'asc')
            ->where('role', 'user')
            ->get();
        $books = buku::orderBy('id_buku', 'asc')
            ->get();
        return view('pinjam.create', compact('users', 'books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->has('status')) {
            Session::flash('status', $request->status);
        }
        $this->validate($request, [
            'username' => 'required',
            'judul' => 'required',
            'jumlah' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'status' => 'required',
        ]);
        peminjaman::create([
            'id_user' => $request->username,
            'id_buku' => $request->judul,
            'jumlah' => $request->jumlah,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
        ]);
        return redirect()->to('pinjam')->with('succes', 'Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
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
        $pinjam = peminjaman::findOrFail($id);
        $pinjam->update([
            'status' => 'kembali'
        ]);
        return redirect('/pinjam');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
