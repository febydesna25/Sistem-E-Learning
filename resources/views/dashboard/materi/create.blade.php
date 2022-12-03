@extends('dashboard.layout.main')
@section('menuMateri','active')
@section('container')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header text-center">FORM MATERI</h5>
            <div class="card-body">
                <form class="needs-validation" action ="/materidashboard" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01" >Mata Kuliah</label> 
                            <div >
                                <select class="form-control" aria-label="Default select example" name="matkul_id"><br><br>
                                    <br>
                                    @foreach($matkuls as $matkul)
                                    @if (old('matkul_id')== $matkul->id)
                                    <option value="{{ $matkul->id }}" selected>{{ $matkul->nama }}</option>
                                    @else
                                    <option value="{{ $matkul->id }}">{{ $matkul->nama }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" name="gambar" value="{{old('gambar')}}" class="form-control @error('gambar') is-invalid @enderror">
                            @error('gambar')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Keterangan</label>
                            <input type="text" class="form-control  @error('ket') is-invalid @enderror" value="{{old('ket')}}" name="ket" required>
                            @error('ket')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4 ">
                            <button class="btn btn-primary btn-sm" type="submit" name="submit"><i class=" fas fa-save"> Submit</i></button>
                             <a href="/materidashboard" class="btn btn-primary btn-sm"><i class=" fas fa-reply"> Back</i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection