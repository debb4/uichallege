@extends('vsga.templates.header')
<title>Setting Profile</title>
@section('title', 'Setting Profile')

@section('content')

<div class="text-start fw-semibold py-4 fs-3 m-0 d-flex justify-content-center">Akun Pegawai Perpustakaan</div>
<div class="container">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
</div>

@include('vsga.templates.footer')
@endsection
