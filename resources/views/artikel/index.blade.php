@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Artikel</div>

                <div class="card-body">
                <a href="{!! route('artikel.create')!!}" class="btn btn-primary">
                Tambah Data
                </a>
                <table border="1">
    <tr>
    <td>ID</td>
    <td>Judul</td>
    <td>Isi</td>
    <td>Users ID</td>
    <td>Kategori Artikel ID</td>
    <td>Create</td>
    
    <td>Aksi</td>
    </tr>
    @foreach($listArtikel as $item)
    <tr>
    <td>{!! $item->id !!}</td>
    <td>{!! $item->judul !!}</td>
    <td>{!! $item->isi !!}</td>
    <td>{!! $item->users_id !!}</td>
    <td>{!! $item->kategori_artikel_id !!}</td>
    <td>{!! $item->created_at->format('d/M/Y H:i') !!}</td>
    
    <td>
    <a href="{!! route('artikel.show',[$item->id]) !!}" class="btn btn-primary">Lihat</a>
    </td>
    </tr>
    @endforeach
    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Artikel</title>
</head>
<body>

</body>
</html>