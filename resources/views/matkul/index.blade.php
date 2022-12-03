@extends('layouts.main')
@section('menuMatkul','active')
@section('container')
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
										</tr>
									</thead>
									<tbody>
									@foreach ($matkuls as $matkul)
										<tr>
											<td>{{ $loop->iteration}}</td>
											<td>{{ $matkul->nama}}</td>
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