@extends('dashboard.layout.main')
@section('menuMahasiswa','active')
@section('container')

@if (session()->has('pesan'))
	<div class="alert alert-info alert-dismissible fade show" role="alert">
		<i class="fas fa-check"></i> {{ session('pesan') }}
	</div>
@endif
	<a href="/mahasiswadashboard/create" class="btn btn-sm btn-primary"><i class="fas fa-arrow-down"> Insert</i></a>
<div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4">
                        <div class="card">
                            <h5 class="card-header text-center">DATA MAHASISWA</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first text-center">
                                    <thead class="text-center">
                                       <tr>
											<th>No</th>
											<th>Nim</th>
											<th>Nama</th>
											<th>Jenis Kelamin</th>
									 		<th>Kelas</th>
											<th width="200">Aksi</th>
										</tr>
									</thead>
									<tbody>
									@foreach ($mahasiswas as $mahasiswa)
										<tr>
											<td>{{ $loop->iteration}}</td>
											<td>{{ $mahasiswa->nim}}</td>
											<td>{{ $mahasiswa->nama}}</td>
											<td>{{ $mahasiswa->jenis_kelamin}}</td>
											<td>{{ $mahasiswa->kelas->nama}}</td>
											<td class="text-center">
												<a href="/mahasiswadashboard/{{ $mahasiswa->id }}/edit" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"> Update</i></a>

												<form action="/mahasiswadashboard/{{ $mahasiswa->id }}" method="post" class="d-inline">
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
{{ $mahasiswas->links('pagination::bootstrap-5')}}

@endsection
