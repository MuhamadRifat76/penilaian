<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bidangstudi;
use file;
class BidangStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bidangstudi = bidangstudi::all();  
        return view('bidangstudi.index',compact('bidangstudi'));
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bidangstudi = bidangstudi::all();  
        return view('bidangstudi.create',compact('bidangstudi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bidangstudi = new bidangstudi();
        $bidangstudi->bidang_kode = $request->bidang_kode;
        $bidangstudi->bidang_nama = $request->bidang_nama;
        
        //foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() .'/assets/img';
            $filename = str_random(6) . '_'
            . $file->getClientOriginalName();
            $upload = $file->move(
                $path,$filename
            );
            $bidangstudi->foto = $filename;
        }
        $bidangstudi->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $bidangstudi->bidang_nama."</b>"
        ]);
        return redirect()->route('bidangstudi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = kategori::findOrfail($id);
        $response = [
            'success' => true,
            'data' => $user,
            'message' => 'Berhasil'
        ];
        return reponse()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bidangstudi = bidangstudi::all();  
        return view('bidangstudi.edit',compact('bidangstudi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $bidangstudi = new bidangstudi();
        $bidangstudi->bidang_kode = $request->bidang_kode;
        $bidangstudi->bidang_nama = $request->bidang_nama;

        $bidangstudi->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $bidangstudi->bidang_nama."</b>"
        ]);
        return redirect()->route('bidangstudi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = kategori::findOrfail($id);
    
        Session::flash("flash_notification",[
            "level" => "Success",
            "message" => "Berhasil menghapus<b>"
                         . $kategori->nama_kategori."</b>"
        ]);
        return redirect()->route('kategori.index');    
    }
    
}
