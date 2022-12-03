@extends('dashboard.layout.main')
@section('menuMatkul','active')
@section('container')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header text-center">EDIT MATA KULIAH</h5>
            <div class="card-body">
                <form class="needs-validation" action ="/matkuldashboard/{{$matkuls->id}}" method="post">
                   @method('PATCH')
                   @csrf
                   <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="validationCustom01">Nama Mata Kuliah</label>
                        <input type="text" class="form-control  @error('nama') is-invalid @enderror" value="{{old('nama',$matkuls->nama)}}" name="nama" required>
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4 ">
                                                <button class="btn btn-primary btn-sm" type="submit" name="submit"><i class=" fas fa-edit"> Update</i></button>
                                                <a href="/matkuldashboard" class="btn btn-primary btn-sm"><i class=" fas fa-reply"> Back</i></a>
                                            </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
@endsection