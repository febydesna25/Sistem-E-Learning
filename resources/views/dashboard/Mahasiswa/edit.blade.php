@extends('dashboard.layout.main')
@section('menuMahasiswa','active')
@section('container')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header text-center">EDIT MAHASISWA</h5>
            <div class="card-body">
                <form class="needs-validation" action ="/mahasiswadashboard/{{$mahasiswas->id}}" method="post">
                   @method('PATCH')
                   @csrf
                   <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="validationCustom01">Nim</label>
                        <input type="text" class="form-control  @error('nim') is-invalid @enderror" value="{{old('nim',$mahasiswas->nim)}}" name="nim" required readonly>
                        @error('nim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="validationCustom01">Nama</label>
                        <input type="text" class="form-control  @error('nama') is-invalid @enderror" value="{{old('nama',$mahasiswas->nama)}}" name="nama" required>
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="card-body border-top">
                        <label for="validationCustom01">Jenis kelamin</label>
                        <br>
                        <form>
                           <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio"  class="custom-control-input" name="jenis_kelamin" value="L" checked="{{ old('jenis_kelamin',$mahasiswas->jenis_kelamin)=='L' ? 'checked' : ''}}" checked><span class="custom-control-label">Laki-laki</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="jenis_kelamin" value="P" checked="(old('jenis_kelamin',$mahasiswas->jenis_kelamin)=='P')" class="custom-control-input"><span class="custom-control-label">Perempuan</span>
                        </label>
                    </form>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <label for="validationCustom01" >Kelas</label> 
                    <div >
                        <select class="form-control" aria-label="Default select example" name="kelas_id"><br><br>
                            <br>
                            @foreach($kelas as $kela)
                            @if (old('kelas_id',$mahasiswas->kelas_id)== $kela->id)
                            <option value="{{ $kela->id }}" selected>{{ $kela->nama }}</option>
                            @else
                            <option value="{{ $kela->id }}">{{ $kela->nama }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4 ">
                                                <button class="btn btn-primary btn-sm" type="submit" name="submit"><i class=" fas fa-edit"> Update</i></button>
                                                <a href="/mahasiswadashboard" class="btn btn-primary btn-sm"><i class=" fas fa-reply"> Back</i></a>
                                            </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
@endsection