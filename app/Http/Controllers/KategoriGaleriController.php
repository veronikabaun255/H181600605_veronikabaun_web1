<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\KategoriGaleri;
class KategoriGaleriController extends Controller
{
    public function index(){
        //Eloquent
        $listKategoriGaleri=KategoriGaleri::all(); //select*from kategori_galeri
        return view('kategori_galeri.index',compact('listKategoriGaleri'));
        //return view('kategori_artikel.index')->with('data',$listKategoriArtikel);
    }
    public function show($id){
        //$kategoriArtikel=KategoriArtikel::where('id','$id')->first();
        $kategoriGaleri=KategoriGaleri::find($id);
        return view('kategori_galeri.show',compact('kategoriGaleri'));
    }
    public function create(){
        return view('kategori_galeri.create');
    }
    public function store(Request $request){
        $input= $request->all();
            KategoriGaleri::create($input);
        return redirect(route('kategori_galeri.index'));
    }
}
 