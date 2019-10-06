<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Pengumuman;
use App\KategoriPengumuman;
class PengumumanController extends Controller
{
    public function index(){
        //Eloquent
        $listPengumuman=Pengumuman::all(); //select*from artikel
        return view('pengumuman.index',compact('listPengumuman'));
        //return view('kategori_artikel.index')->with('data',$listKategoriArtikel);
    }
    public function show($id){
        //$kategoriArtikel=KategoriArtikel::where('id','$id')->first();
        $pengumuman=Pengumuman::find($id);
        return view('pengumuman.show',compact('pengumuman'));
    }
    public function create(){
        $kategoriPengumuman=KategoriPengumuman::pluck('nama','id');
        
        return view('pengumuman.create',compact('kategoriPengumuman'));
   }
   public function store(Request $request){
       $input=$request->all();
       Pengumuman::Create($input);
       return redirect(route('pengumuman.index'));
   }
}