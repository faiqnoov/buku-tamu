@extends('layouts.app')

@section('container')
  <h2 class="text-2xl text-gray-900 text-center mb-5">Pilih Acara yang Sedang Aktif</h2>

  <div class="flex gap-3">
    @foreach ($events as $event)
      <a href="/form-tamu/{{$event["id"]}}">
        <div class="bg-white text-center p-5 rounded-lg">
          <p>{{ $event["nama_acara"] }}</p>
          <p>{{ $event["tgl"] }}</p>
        </div>
      </a>
    @endforeach
  </div>
@endsection