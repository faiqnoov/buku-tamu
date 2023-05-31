@extends('layouts.app')

@section('container')
  <h2 class="text-2xl text-gray-900 text-center mb-5">Pilih Acara yang Sedang Aktif</h2>

  <div class="flex flex-wrap gap-5">
    @foreach ($events as $event)
      <a href="/form-tamu/{{$event->id}}">
        <div class="bg-white text-center p-5 rounded-lg shadow-lg hover:-translate-y-1">
          <p>{{ $event->judul }}</p>
          <p>{{ $event->tanggal }}</p>
        </div>
      </a>
    @endforeach
  </div>

  <div class="absolute bottom-0 inset-x-0 border-t py-5">
    <p class="text-center text-slate-500"><a href="/login" class="text-blue-600 font-medium hover:underline">Login</a> untuk dapat mengelola buku tamu.</p>
  </div>
@endsection