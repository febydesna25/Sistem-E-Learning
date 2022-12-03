@extends('layouts.main')
@section('menuMahasiswa','active')
@section('container')
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