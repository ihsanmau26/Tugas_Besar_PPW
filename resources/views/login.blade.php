@extends('layouts.auth-layout')

@section('title', 'Login')

@section('content')
<div class="text-center mt-3">
    <i class="fa-solid fa-square-plus text-danger fs-1"></i>
    <h4 class="mt-3">TELKOM MEDIKA</h4>
    <p>Silahkan login untuk melanjutkan!</p>
</div>

<form action="/home" method="#" class="mt-4">
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text">
                <i class="fa-solid fa-envelope"></i>
            </span>
            <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
    </div>
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text">
                <i class="fa-solid fa-lock"></i>
            </span>
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
    </div>
    <div class="form-check d-flex align-items-center justify-content-between mb-3">
        <div class="d-flex align-items-center">
            <input class="form-check-input me-2" type="checkbox" id="ingatSaya">
            <label class="form-check-label" for="ingatSaya">Ingat Saya</label>
        </div>
        <a href="#" class="text-decoration-none">Lupa Password?</a>
    </div>
    <button type="submit" class="btn btn-success w-100 mt-3">Login</button>
</form>

<div class="mt-4">
    <p class="text-center">Belum punya akun? <a href="#" class="text-decoration-none">Daftar Sekarang</a></p>
</div>
@endsection
