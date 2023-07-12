<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Komponen;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    function index() {
        return view('admin.admin');
    }

    public function skor() {
        return view('admin.skorTpack');
    }

    public function listKomponen() {
        $komponen = Komponen::with('pertanyaan')->get();
        return view('admin.komponenlist',compact('komponen'));
    }

    public function getAllKomponen(){
        $komponen = Komponen::all();
        
        return response()->json(['komponen' => $komponen]);
    }

    public function tabelPertanyaan() {
        $pertanyaan = Pertanyaan::with('komponen')->get();
        $pertanyaan = Pertanyaan::paginate(4);
        return view('admin.tabelpertanyaan', compact('pertanyaan'));
    }

    public function create(): View {

        return view('admin.tabelpertanyaan', compact('komponen'));
    }

    public function store(Request $request):RedirectResponse {
        dd($request->all());
        // $this->validate($request,[
        //    'id_komponen'  => 'required',
        //    'pertanyaan' => 'required'
        // ]);

        $pertanyaan = Pertanyaan::create([
            'id_komponen' => $request->id_komponen,
            'pertanyaan' => $request->pertanyaan
        ]);
        
        return redirect()->route('admin.tabelpertanyaan')->with(['success' => 'Data berhasil ditambahkan']);
    }

    function admin() {
        return view('admin.admin');
    }

    function user() {
        return view('user.form');
    }
}
