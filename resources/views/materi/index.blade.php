@extends('layouts.main')

@section('container')
<div class="row">
  @if ($materis->count()>0)
    <div class="card mb-3 text-center mt-4">
    <center><img src="{{ url('/img/'.$materis[0]->gambar) }}" style="width: 200px"></center>
    <div class="card-body">
      <h5 class="card-title">{{$materis[0]->matkul->nama}}</h5>
      <p class="card-text">{{$materis[0]->ket }}</p>
      <p class="card-text"><small class="text-muted">{{$materis[0]->created_at->diffForHumans()}}</small></p>
    </div>
  </div>
  @endif

</div>

<div class="row">

@foreach($materis->skip(1) as $materi)
<div class="col-lg-4">

<div class="card" style="width: 18rem;">
  <img src="{{ url('/img/'.$materi->gambar) }}" class="card-img-top" alt="...">
  <div class="card-body">
      <h5 class="card-title">{{$materi->matkul->nama}}</h5>
      <p class="card-text">{{$materi->ket }}</p>
  </div>
</div>
</div>
@endforeach

</div>
{{ $materis->links('pagination::bootstrap-5')}}
@endsection