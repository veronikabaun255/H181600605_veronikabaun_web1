<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\KategoriPengumuman;
class KategoriPengumumanController extends Controller
{
    public function index(){
        //Eloquent
        $listKategoriPengumuman=KategoriPengumuman::all(); //select*from kategori_pengumuman
        return view('kategori_pengumuman.index',compact('listKategoriPengumuman'));
        //return view('kategori_artikel.index')->with('data',$listKategoriArtikel);
    }
    public function show($id){
        //$kategoriArtikel=KategoriArtikel::where('id','$id')->first();
        $kategoriPengumuman=KategoriPengumuman::find($id);
        return view('kategori_pengumuman.show',compact('kategoriPengumuman'));
    }
    public function create(){
        return view('kategori_pengumuman.create');
    }
    public function store(Request $request){
        $input= $request->all();
            KategoriPengumuman::create($input);
        return redirect(route('kategori_pengumuman.index'));
    }
}
 