@extends('layouts.app')

@section('container')
  <a href="/events" class="block text-blue-500 font-medium my-5 hover:underline">Kembali ke Daftar Acara</a>

  <div class="bg-white w-full rounded p-5">
    <table class="text-left font-medium text-gray-700">
      <tr>
        <th>Nama Acara</th>
        <th class="px-2">:</th>
        <td>{{ $event->judul }}</td>
      </tr>
      <tr>
        <th>Tanggal</th>
        <th class="px-2">:</th>
        <td>{{ $event->tanggal }}</td>
      </tr>
      <tr>
        <th>Waktu</th>
        <th class="px-2">:</th>
        <td>{{ $event->waktu }}</td>
      </tr>
    </table>

    <h3 class="text-xl font-medium mt-5 mb-3">Daftar Hadir Tamu</h3>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
          <tr>
            <th scope="col" class="py-3 px-6">
              No
            </th>
            <th scope="col" class="py-3 px-6">
              Nama
            </th>
            </th>
            <th scope="col" class="py-3 px-6">
              Instansi
            </th>
            <th scope="col" class="py-3 px-6">
              Jabatan
            </th>
            <th scope="col" class="py-3 px-6">
              No. HP
            </th>
            <th scope="col" class="py-3 px-6">
              Email
            </th>
            {{-- <th scope="col" class="py-3 px-6">
              Ttd
            </th> --}}
            <th scope="col" class="py-3 px-6">
              Action
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white border-b">
            <td class="py-4 px-6">
              1
            </td>
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
              Dadang Suherman
            </th>
            <td class="py-4 px-6">
              PENS
            </td>
            <td class="py-4 px-6">
              Mahasiswa
            </td>
            <td class="py-4 px-6">
              086754257864
            </td>
            <td class="py-4 px-6">
              dadangs@gmail.com
            </td>
            {{-- <td class="py-4 px-6">
              -
            </td> --}}
            <td class="py-4 px-6">
              <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection