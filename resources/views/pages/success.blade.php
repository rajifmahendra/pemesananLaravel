@extends('layouts.checkout')
@section('title', 'Halaman Success')

@section('content')
<main>
  <div class="section-succes d-flex align-items-center">
    <div class="col text-center">
      <img src="{{ url('frontend/images/ic_mail.png') }}" alt=" /">
      <h1>Berhasil</h1>
      <p>Anda berhasil menyimpan <br> Selamat silahkan kembali</p>
      <a href="{{ url('/') }}" class="btn btn-home-page mt-3 px-5" style="border-radius: 4px;
      background-color: #071C4D;
      color: #fff; ">
        Halaman Page
      </a>
    </div>
  </div>
</main>
@endsection
