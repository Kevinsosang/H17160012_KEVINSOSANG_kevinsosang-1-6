@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kategori Berita</div>
                <div class="card-body">
       
                    <table class="table table-bordered">
                    	<thead class="bg-warning">
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Name</th>
								<th scope="col">User_id</th>
								<th scope="col">Create</th>
								<th scope="col">Details</th>
							</tr>
						</thead>
							@foreach($listKategoriBerita as $item)
								<tr>
									<td>{!! $item->id !!}</td>
									<td>{!! $item->nama !!}</td>
									<td>{!! $item->users_id !!}</td>
									<td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
									<td>
										<a href="{!! route('kategori_berita.show',[$item->id]) !!}"class="btn btn-sm btn-primary" > Lihat </a>
									</td>
								</tr>
							@endforeach
					</table>

					 <a href="{!! route('kategori_berita.create') !!}" class="btn btn-primary">
           				 Tambah
        			</a> 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection