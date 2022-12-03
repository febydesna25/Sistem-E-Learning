@extends('layouts.main')
@section('menuDaftara','active')
@section('container')
<div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4">
                        <div class="card">
                            <h5 class="card-header text-center">DAFTAR KELAS A</h5>
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
										</tr>
									</thead>
									<tbody>
									@foreach ($daftaras as $daftara)
										<tr>
											<td>{{ $loop->iteration}}</td>
											<td>{{ $daftara->hari}}</td>
											<td>{{ $daftara->jam}}</td>
											<td>{{ $daftara->matkul->nama}}</td>
											<td>{{ $daftara->dosen->nama}}</td>
										</tr>
									 @endforeach
									 </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{ $daftaras->links('pagination::bootstrap-5')}}

@endsection