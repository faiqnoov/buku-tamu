@extends('layouts.app')

@section('container')
  <div class="bg-white w-full max-w-md p-5 rounded mx-auto">
    <h2 class="text-xl font-semibold text-center text-gray-900 mb-3">Tambah Acara</h2>

    <form>
      <div class="mb-6">
        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Acara</label>
        <input type="text" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
      </div>
      <div class="mb-6">
        <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900">Tanggal</label>
        <input type="date" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
      </div>
      <div class="mb-6">
        <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900">Waktu</label>
        <input type="time" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
      </div>
      <button type="submit" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 mx-auto">Submit</button>
    </form>
  </div>
@endsection