<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Berita;
use App\KategoriBerita;
class BeritaController extends Controller
{
    public function index(){
        //Eloquent
        $listBerita=Berita::all(); //select*from artikel
        return view('berita.index',compact('listBerita'));
        //return view('kategori_artikel.index')->with('data',$listKategoriArtikel);
    }
    public function show($id){
        //$kategoriArtikel=KategoriArtikel::where('id','$id')->first();
        $berita=Berita::find($id);
        return view('berita.show',compact('berita'));
    }
    public function create(){
        $kategoriBerita=KategoriBerita::pluck('nama','id');
        
        return view('berita.create',compact('kategoriBerita'));
   }
   public function store(Request $request){
       $input=$request->all();
       Berita::Create($input);
       return redirect(route('berita.index'));
   }
}