@extends('dashboard.layout.main')
@section('menuMatkul','active')
@section('container')

@if (session()->has('pesan'))
	<div class="alert alert-info alert-dismissible fade show" role="alert">
		<i class="fas fa-check"></i> {{ session('pesan') }}
	</div>
@endif
	<a href="/matkuldashboard/create" class="btn btn-sm btn-primary"><i class="fas fa-arrow-down"> Insert</i></a>
<div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4">
                        <div class="card">
                            <h5 class="card-header text-center">MATA KULIAH</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first text-center">
                                    <thead class="text-center">
                                       <tr>
											<th>No</th>
											<th>Nama</th>
											<th width="200">Aksi</th>
										</tr>
									</thead>
									<tbody>
									@foreach ($matkuls as $matkul)
										<tr>
											<td>{{ $loop->iteration}}</td>
											<td>{{ $matkul->nama}}</td>
											<td class="text-center">
												<a href="/matkuldashboard/{{ $matkul->id }}/edit" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"> Update</i></a>

												<form action="/matkuldashboard/{{ $matkul->id }}" method="post" class="d-inline">
													@method('DELETE')
													@csrf
													<button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Yakin akan menghapus data')"><i class=" fas fa-trash"> Delete</i></button>
												</form>
											</td>
										</tr>
									 @endforeach
									 </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{ $matkuls->links('pagination::bootstrap-5')}}

@endsection
