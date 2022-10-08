@extends('layouts.app')

@section('container')
  <a href="/dashboard/events" class="inline-block text-blue-500 font-medium my-5 hover:underline">Kembali ke Daftar Acara</a>

  @if(session()->has('success'))
    <div class="p-4 mb-3 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
      {{ session('success') }}
    </div>
  @endif

  <div class="bg-white w-full rounded p-5">
    <div class="md:flex md:justify-between">
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
      <div class="flex items-center justify-center gap-3">
        <a href="/dashboard/events/{{ $event->id }}/edit" class="inline-block font-medium text-blue-500 border border-blue-500 px-4 py-1 rounded hover:text-white hover:bg-blue-500 ">Edit</a>
        <form action="/dashboard/events/{{ $event->id }}" method="post">
          @method('delete')
          @csrf
          <button class="inline-block font-medium text-red-500 border border-red-500 px-4 py-1 rounded hover:text-white hover:bg-red-500" onclick="return confirm('Yakin hapus acara beserta data tamu di dalamnya?')">Hapus Acara</button>
        </form>
      </div>
    </div>

    <h3 class="text-xl font-medium mt-5 mb-3">Daftar Hadir Tamu</h3>
    @if ($guests->count())
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
            @foreach ($guests as $guest)
              <tr class="bg-white border-b">
                <td class="py-4 px-6">
                  {{ $loop->iteration }}
                </td>
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                  {{ $guest->nama }}
                </th>
                <td class="py-4 px-6">
                  {{ $guest->instansi }}
                </td>
                <td class="py-4 px-6">
                  {{ $guest->jabatan }}
                </td>
                <td class="py-4 px-6">
                  {{ $guest->no_hp }}
                </td>
                <td class="py-4 px-6">
                  {{ $guest->email }}
                </td>
                {{-- <td class="py-4 px-6">
                  -
                </td> --}}
                <td class="py-4 px-6">
                  <form action="/dashboard/events/{{ $guest->event_id }}/{{ $guest->id }}" method="post">
                    @method('delete')
                    @csrf
                    <button class="font-medium text-red-600 hover:underline" onclick="return confirm('Yakin hapus data tamu?')">Hapus</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    @else
      <p class="text-center py-6">Data tamu tidak ditemukan.</p>
    @endif
  </div>
@endsection