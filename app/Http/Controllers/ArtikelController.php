<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Artikel;
use App\KategoriArtikel;
class ArtikelController extends Controller
{
    public function index(){
        //Eloquent
        $listArtikel=Artikel::all(); //select*from artikel
        return view('artikel.index',compact('listArtikel'));
        //return view('kategori_artikel.index')->with('data',$listKategoriArtikel);
    }
    public function show($id){
        //$kategoriArtikel=KategoriArtikel::where('id','$id')->first();
        $artikel=Artikel::find($id);
        return view('artikel.show',compact('artikel'));
    }
    public function create(){
        $kategoriArtikel=KategoriArtikel::pluck('nama','id');
        
        return view('artikel.create',compact('kategoriArtikel'));
   }
   public function store(Request $request){
       $input=$request->all();
       Artikel::Create($input);
       return redirect(route('artikel.index'));
   }
}
