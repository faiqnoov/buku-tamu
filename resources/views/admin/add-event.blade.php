@extends('layouts.app')

@section('container')
  <div class="bg-white w-full max-w-md p-5 rounded mx-auto">
    <h2 class="text-xl font-semibold text-center text-gray-900 mb-3">Tambah Acara</h2>

    <form method="post" action="/dashboard/events">
      @csrf
      <div class="mb-6">
        <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">Judul Acara</label>
        <input type="text" id="judul" name="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg outline-none focus:border-blue-500 block w-full p-2.5" autofocus value="{{ old('judul') }}">
        @error('judul')
          <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-6">
        <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900">Tanggal</label>
        <input type="date" id="tanggal" name="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg outline-none focus:border-blue-500 block w-full p-2.5" value="{{ old('tanggal') }}">
        @error('tanggal')
          <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-6">
        <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900">Waktu</label>
        <input type="time" id="tanggal" name="waktu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg outline-none focus:border-blue-500 block w-full p-2.5" value="{{ old('waktu') }}">
        @error('waktu')
          <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 mx-auto">Buat Acara</button>
    </form>
  </div>
@endsection