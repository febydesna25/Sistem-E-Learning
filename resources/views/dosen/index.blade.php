@extends('layouts.main')
@section('menuDosen','active')
@section('container')
<div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4">
                        <div class="card">
                            <h5 class="card-header text-center">DATA DOSEN</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                    <thead class="text-center">
                                       <tr>
											<th>No</th>
											<th>NIP</th>
											<th>Nama</th>
									 		<th>Email</th>
										</tr>
									</thead>
									<tbody>
									@foreach ($dosens as $dosen)
										<tr>
											<td>{{ $loop->iteration}}</td>
											<td>{{ $dosen->nip}}</td>
											<td>{{ $dosen->nama}}</td>
											<td>{{ $dosen->email}}</td>
										</tr>
									 @endforeach
									 </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{ $dosens->links('pagination::bootstrap-5')}}
@endsection