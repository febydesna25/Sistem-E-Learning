@extends('dashboard.layout.main')
@section('menuDaftarb','active')
@section('container')

@if (session()->has('pesan'))
	<div class="alert alert-info alert-dismissible fade show" role="alert">
		<i class="fas fa-check"></i> {{ session('pesan') }}
	</div>
@endif
	<a href="/daftarbdashboard/create" class="btn btn-sm btn-primary"><i class="fas fa-arrow-down"> Insert</i></a>
<div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4">
                        <div class="card">
                            <h5 class="card-header text-center">DAFTAR KELAS B</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                    <thead class="text-center">
                                       <tr>
											<th>No</th>
											<th>Hari</th>
											<th>Jam</th>
									 		<th>Mata Kuliah</th>
									 		<th>Dosen</th>
											<th width="200">Aksi</th>
										</tr>
									</thead>
									<tbody>
									@foreach ($daftarbs as $daftarb)
										<tr>
											<td>{{ $loop->iteration}}</td>
											<td>{{ $daftarb->hari}}</td>
											<td>{{ $daftarb->jam}}</td>
											<td>{{ $daftarb->matkul->nama}}</td>
											<td>{{ $daftarb->dosen->nama}}</td>
											<td class="text-center">
												<a href="/daftarbdashboard/{{ $daftarb->id }}/edit" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"> Update</i></a>

												<form action="/daftarbdashboard/{{ $daftarb->id }}" method="post" class="d-inline">
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
{{ $daftarbs->links('pagination::bootstrap-5')}}

@endsection
