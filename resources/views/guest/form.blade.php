@extends('layouts.app')

@section('container')
  <div class="bg-white w-full max-w-md p-5 rounded mx-auto">
    <h2 class="text-xl font-semibold text-center text-gray-900 mb-3">
      Data Tamu<br>"{{ $event->judul }}"
    </h2>

    <form>
      <div class="mb-6">
        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
        <input type="text" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
      </div>
      <div class="mb-6">
        <label for="instansi" class="block mb-2 text-sm font-medium text-gray-900">Instansi</label>
        <input type="text" id="instansi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
      </div>
      <div class="mb-6">
        <label for="jabatan" class="block mb-2 text-sm font-medium text-gray-900">Jabatan</label>
        <input type="text" id="jabatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
      </div>
      <div class="mb-6">
        <label for="no-hp" class="block mb-2 text-sm font-medium text-gray-900">No. HP</label>
        <input type="text" id="no-hp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
      </div>
      <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
      </div>
      <button type="submit" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 mx-auto">Simpan</button>
    </form>
  </div>

  <a href="/event-list" class="block text-blue-500 font-medium my-5 hover:underline">Kembali ke List Acara</a>
@endsection