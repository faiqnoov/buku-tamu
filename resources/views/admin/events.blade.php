@extends('layouts.app')

@section('container')
  <h2 class="text-xl italic">Admin Dashboard</h2>
  <div class="flex justify-between items-center">
    <h3 class="text-xl font-medium">Daftar Acara</h3>
    <a href="/events/add" class="inline-block px-3 py-2 rounded bg-blue-700 text-white mt-5 mb-3">Tambah Acara</a>
  </div>

  <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
          <th scope="col" class="py-3 px-6">
            No
          </th>
          <th scope="col" class="py-3 px-6">
            Acara
          </th>
          </th>
          <th scope="col" class="py-3 px-6">
            Tanggal
          </th>
          <th scope="col" class="py-3 px-6">
            Waktu
          </th>
          <th scope="col" class="py-3 px-6">
            Aksi
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="bg-white border-b">
          <td class="py-4 px-6">
            1
          </td>
          <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
            Workshop Kewirausahaan
          </th>
          <td class="py-4 px-6">
            20-08-2022
          </td>
          <td class="py-4 px-6">
            08:00
          </td>
          <td class="py-4 px-6">
            <a href="/events/detail" class="font-medium text-blue-600 hover:underline">Detail</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection