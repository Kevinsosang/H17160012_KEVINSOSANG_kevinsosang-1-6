@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kategori Pengumuman</div>

                <div class="card-body">
                    <div class="form-group row">
                    	<label class="col-md-4 col-form-label text-md-right">ID</label>
                    	<label class="col-md-8 col-form-label text-md-left">{!! $KategoriPengumuman->id !!}</label>
                    </div>
                    <div class="form-group row">
                    	<label class="col-md-4 col-form-label text-md-right">Nama</label>
                    	<label class="col-md-8 col-form-label text-md-left">{!! $KategoriPengumuman->nama !!}</label>
                    </div>
                    <div class="form-group row">
                    	<label class="col-md-4 col-form-label text-md-right">Users</label>
                    	<label class="col-md-8 col-form-label text-md-left">{!! $KategoriPengumuman->users_id !!}</label>
                    </div>
                    <div class="form-group row">
                    	<label class="col-md-4 col-form-label text-md-right">Create</label>
                    	<label class="col-md-8 col-form-label text-md-left">{!! $KategoriPengumuman->created_at->format('d/m/Y H:i:s') !!}</label>
                    </div>
                    <div class="form-group row">
                    	<label class="col-md-4 col-form-label text-md-right">Update</label>
                    	<label class="col-md-8 col-form-label text-md-left">{!! $KategoriPengumuman->updated_at->format('d/m/Y H:i:s') !!}</label>
                    </div>
                    <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{!! route('kategori_pengumuman.index') !!}" class="btn btn-primary">
                                    Kembali
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection