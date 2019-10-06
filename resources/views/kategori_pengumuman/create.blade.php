@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Kategori Pengumuman</div>
                    <form method="post" action="{!! route('kategori_pengumuman.store') !!}">
                    @include('kategori_pengumuman.form')
                    </form>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection