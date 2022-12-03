@extends('dashboard.layout.main')
@section('menuDaftara','active')
@section('container')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header text-center">EDIT DAFTAR KELAS A</h5>
            <div class="card-body">
                <form class="needs-validation" action ="/daftaradashboard/{{$daftaras->id}}" method="post">
                   @method('PATCH')
                   @csrf
                   <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="validationCustom01">Hari</label>
                        <input type="text" class="form-control  @error('hari') is-invalid @enderror" value="{{old('hari',$daftaras->hari)}}" name="hari" required >
                        @error('hari')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="validationCustom01">Jam</label>
                        <input type="text" class="form-control  @error('jam') is-invalid @enderror" value="{{old('jam',$daftaras->jam)}}" name="jam" required>
                        @error('jam')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="validationCustom01" >Mata Kuliah</label> 
                        <div >
                            <select class="form-control" aria-label="Default select example" name="matkul_id"><br><br>
                                <br>
                                @foreach($matkuls as $matkul)
                                @if (old('matkul_id',$daftaras->matkul_id)== $matkul->id)
                                <option value="{{ $matkul->id }}" selected>{{ $matkul->nama }}</option>
                                @else
                                <option value="{{ $matkul->id }}">{{ $matkul->nama }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="validationCustom01" >Dosen</label> 
                        <div >
                            <select class="form-control" aria-label="Default select example" name="dosen_id"><br><br>
                                <br>
                                @foreach($dosens as $dosen)
                                @if (old('dosen_id',$daftaras->dosen_id)== $dosen->id)
                                <option value="{{ $dosen->id }}" selected>{{ $dosen->nama }}</option>
                                @else
                                <option value="{{ $dosen->id }}">{{ $dosen->nama }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4 ">
                        <button class="btn btn-primary btn-sm" type="submit" name="submit"><i class=" fas fa-edit"> Update</i></button>
                        <a href="/daftaradashboard" class="btn btn-primary btn-sm"><i class=" fas fa-reply"> Back</i></a>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection