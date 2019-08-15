<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BidangStudi;
use Session;
class BidangStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bidangstudi = BidangStudi::all();  
        return view('backend.bidangstudi.index',compact('bidangstudi'));
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bidangstudi = BidangStudi::all();  
        return view('backend.bidangstudi.create',compact('bidangstudi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bidangstudi = new BidangStudi();
        $bidangstudi->bidang_kode = $request->bidang_kode;
        $bidangstudi->bidang_nama = $request->bidang_nama;
        $bidangstudi->save();
       Session::flash("flash_notification",[
           "level" => "success",
           "message" => "Berhasil menyimpan vosque <b>$bidangstudi->bidang_nama</b>"
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
        $bidangstudi = BidangStudi::findOrfail($id);
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
        $bidangstudi = BidangStudi::findOrfail($id);  
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
        
        $bidangstudi = bidangstudi::findOrfail($id);
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
        $bidangstudi = BidangStudi::findOrfail($id);
    
        Session::flash("flash_notification",[
            "level" => "Success",
            "message" => "Berhasil menghapus<b>"
                         . $bidangstudi->bidang_nama."</b>"
        ]);
        return redirect()->route('bidangstudi.index');    
    }
    
}
