@extends('dashboard.layout.main')
@section('menuKelas','active')
@section('container')
<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header text-center">EDIT KELAS</h5>
                                <div class="card-body">
                                    <form class="needs-validation" action ="/kelasdashboard/{{$kelas->id}}" method="post">
                                    	@method('PATCH')
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">Nama</label>
                                                <input type="text" class="form-control  @error('nama') is-invalid @enderror" value="{{old('nama',$kelas->nama)}}" name="nama" required>
                                                @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4 ">
                                                <button class="btn btn-primary btn-sm" type="submit" name="submit"><i class=" fas fa-edit"> Update</i></button>
                                                <a href="/kelasdashboard" class="btn btn-primary btn-sm"><i class=" fas fa-reply"> Back</i></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection