@extends('layouts.app')

@section('main')
    <div class="d-flex w-100 mb-5">
        <h3>Products</h3>
        <button class="btn btn-primary ms-auto" onclick="create()">Add Product</button>
    </div>
    <div class="card">
        <div id="show"></div>
    </div>
    @include('components.modal')
@endsection
