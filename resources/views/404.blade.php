@extends('admin.layout')
@section('content')

<div class="d-flex flex-column align-items-center justify-content-center h-100 mt-5">
    <h1 class="text-danger fs-1">404</h1>
    <h2>Page Not Found</h2>
    <h3>{{ $th->getMessage() }}</h3>
</div>

@endsection