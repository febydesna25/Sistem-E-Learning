@extends('dashboard.layout.main')
@section('menuDosen','active')
@section('container')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header text-center">EDIT DOSEN</h5>
            <div class="card-body">
                <form class="needs-validation" action ="/dosendashboard/{{$dosens->id}}" method="post">
                   @method('PATCH')
                   @csrf
                   <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="validationCustom01">NIP</label>
                        <input type="text" class="form-control  @error('nip') is-invalid @enderror" value="{{old('nip',$dosens->nip)}}" name="nip" required readonly>
                        @error('nip')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="validationCustom01">Nama</label>
                        <input type="text" class="form-control  @error('nama') is-invalid @enderror" value="{{old('nama',$dosens->nama)}}" name="nama" required>
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="validationCustom01">Email</label>
                        <input type="text" class="form-control  @error('email') is-invalid @enderror" value="{{old('email',$dosens->email)}}" name="email" required>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4 ">
                                                <button class="btn btn-primary btn-sm" type="submit" name="submit"><i class=" fas fa-edit"> Update</i></button>
                                                <a href="/dosendashboard" class="btn btn-primary btn-sm"><i class=" fas fa-reply"> Back</i></a>
                                            </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
@endsection