@extends('layouts.app')

@section('container')
  @if(session()->has('success'))
    <div class="p-4 my-3 mx-auto max-w-md text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
      {{ session('success') }}
    </div>
  @endif

  <div class="bg-white w-full max-w-md p-5 rounded mx-auto">
    <h2 class="text-xl font-semibold text-center text-gray-900 mb-3">
      Data Tamu<br>"{{ $event->judul }}"
    </h2>

    <form method="post" action="/form-tamu/{event}">
      @csrf
      <input type="hidden" name="event_id" value="{{ $event->id }}">
      <div class="mb-6">
        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-blue-500 block w-full p-2.5" autofocus value="{{ old('nama') }}">
        @error('nama')
          <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-6">
        <label for="instansi" class="block mb-2 text-sm font-medium text-gray-900">Instansi</label>
        <input type="text" id="instansi" name="instansi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-blue-500 block w-full p-2.5" value="{{ old('instansi') }}">
        @error('instansi')
          <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-6">
        <label for="jabatan" class="block mb-2 text-sm font-medium text-gray-900">Jabatan</label>
        <input type="text" id="jabatan" name="jabatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-blue-500 block w-full p-2.5" value="{{ old('jabatan') }}">
        @error('jabatan')
          <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-6">
        <label for="no_hp" class="block mb-2 text-sm font-medium text-gray-900">No. HP</label>
        <input type="number" id="no_hp" name="no_hp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-blue-500 block w-full p-2.5" value="{{ old('no_hp') }}">
        @error('no_hp')
          <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
        <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-blue-500 block w-full p-2.5" value="{{ old('email') }}">
        @error('email')
          <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 mx-auto">Simpan</button>
    </form>
  </div>

  <a href="/" class="block text-blue-500 font-medium my-5 hover:underline">Kembali ke List Acara</a>
@endsection