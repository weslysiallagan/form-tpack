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
        $komponen = Komponen::all();
        $pertanyaan = Pertanyaan::with('komponen')->get();
        $pertanyaan = Pertanyaan::paginate(4);
        return view('admin.tabelpertanyaan', compact(['pertanyaan','komponen']));
    }

    public function create(): View {

        return view('admin.tabelpertanyaan', compact('komponen'));
    }

    public function store(Request $request) {
        // dd($request->all());
        $this->validate($request,[
            'id_komponen'  => 'required',
            'pertanyaan' => 'required'
        ]);

        // Komponen::create([
        //     'id' => $request->id,
        //     'nama_komponen'=> $request->nama_komponen
        // ]);
        
        $pertanyaan = Pertanyaan::create([
            'id_komponen' => $request->id_komponen,
            'pertanyaan' => $request->pertanyaan
        ]);

        // $pertanyaan->listKomponen()->saveMany($komponen);
        
        // 'komponen' => Komponen::collection($this->whenLoaded('komponen')->slice(0,3)),
        
        return view('admin.tabelpertanyaan')->with(['success' => 'Data berhasil ditambahkan']);
    }

    public function formPertanyaan () {
        $komponen = Komponen::all();
        $pertanyaan = Pertanyaan::with('komponen')->get();
        $pertanyaan = Pertanyaan::paginate(4);
        return view('user.formpertanyaan',compact('pertanyaan','komponen'));
    }

    function admin() {
        return view('admin.admin');
    }

    function user() {
        return view('user.form');
    }
}
