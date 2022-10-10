@extends('layouts.app')

@section('container')
  @if(session()->has('success'))
    <div class="p-4 my-3 mx-auto max-w-md text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
      {{ session('success') }}
    </div>
  @endif

  @if(session()->has('loginError'))
    <div class="p-4 my-3 mx-auto max-w-md text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
      {{ session('loginError') }}
    </div>
  @endif

  <div class="bg-white w-full max-w-md p-5 rounded mx-auto">
    <h2 class="text-xl font-semibold text-center text-gray-900 mb-3">Login untuk kelola buku tamu</h2>

    <form method="post" action="/login">
      @csrf
      <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
        <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg outline-none focus:border-blue-500 block w-full p-2.5" value="{{ old('email') }}">
        @error('email')
          <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
        <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg outline-none focus:border-blue-500 block w-full p-2.5">
        @error('password')
          <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 mx-auto">Login</button>
    </form>

    <p class="block text-sm text-slate-500 mt-5">Belum punya akun? <a href="/register" class="font-medium text-blue-600 hover:underline">Register</a></p>
  </div>
@endsection