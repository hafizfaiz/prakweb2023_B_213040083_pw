<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index(){
        $data = Buku::all();
        return view('dataPreview',compact('data'));
    }
    public function tambahBuku(){
        return view('indexAdmin');
    }
    public function insertData(Request $request){
        $data = Buku::create($request->all());
        return redirect()->route('dataPreview');

        if($request->hasFile('img')){
            $request->file('img')->move('fotoBuku/', $request->file('img')->getClientOriginalName());
            $data->img = $request->file('img')->getClientOriginalName();
            $data->save();
        }
    }
}