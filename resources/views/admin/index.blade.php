@extends('admin.layout')
@section('content')
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-10">


        <div class="bg-green-800 flex flex-col justify-center items-center py-10 rounded-2xl">
            <i class="fa-solid fa-users text-6xl text-white"></i>
            <h5 class="font-bold mt-10 text-white text-2xl">{{ count($clientData) }}</h5>
        </div>


        <div class="bg-fuchsia-900 flex flex-col justify-center items-center py-10 rounded-2xl">
            <i class="fa-solid fa-code-branch text-6xl text-white"></i>
            <h5 class="font-bold mt-10 text-white text-2xl">{{ count($branches) }}</h5>
        </div>

        <div class="bg-blue-900 flex flex-col justify-center items-center py-10 rounded-2xl">
            <i class="fa-solid fa-user-nurse text-6xl text-white"></i>
            <h5 class="font-bold mt-10 text-white text-2xl">{{ count($staff) }}</h5>
        </div>


        <div class="bg-green-500 flex flex-col justify-center items-center py-10 rounded-2xl">
            <i class="fa-solid fa-receipt text-6xl text-white"></i>
            <h5 class="font-bold mt-10 text-white text-2xl">{{ count($invoicesData) }}</h5>
        </div>

    </div>
@endsection
