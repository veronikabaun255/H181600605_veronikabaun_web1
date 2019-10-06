<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Galeri;
use App\KategoriGaleri;
class GaleriController extends Controller
{
    public function index(){
        //Eloquent
        $listGaleri=Galeri::all(); //select*from artikel
        return view('galeri.index',compact('listGaleri'));
        //return view('kategori_artikel.index')->with('data',$listKategoriArtikel);
    }
    public function show($id){
        //$kategoriArtikel=KategoriArtikel::where('id','$id')->first();
        $galeri=Galeri::find($id);
        return view('galeri.show',compact('galeri'));
    }
    public function create(){
        $kategoriGaleri=KategoriGaleri::pluck('nama','id');
        
        return view('galeri.create',compact('kategoriGaleri'));
   }
   public function store(Request $request){
       $input=$request->all();
       Galeri::Create($input);
       return redirect(route('galeri.index'));
   }
}