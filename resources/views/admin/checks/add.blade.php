@extends('admin.layout')
@section('content')
<div class="row bg-white d-flex justify-content-between align-items-center p-2">
    <div class="col-6 d-flex align-items-center">
        <h6 class="fw-bold">{{ __('translate.add-check') }}</h6>
    </div>
    <div class="col-6 d-flex justify-content-end">
        <a href="{{ route('show.checks.page') }}">{{ __('translate.checks') }}</a>
    </div>
</div>




@if (session('success'))
<script>
    Toastify({
        text: "{{ session('success') }}",
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "green",
        stopOnFocus: true,
    }).showToast();
</script>
@endif







<form action="{{ route('add.check') }}" method="post">
    @csrf
    <div class="row bg-white my-3 p-3">


        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.branch') }}</label>
                <select class="form-select" name="branch">

                    @foreach ($branches as $branch)
                    <option value="{{ $branch->id }}"> {{ $branch->name }} </option>
                    @endforeach
                </select>
            </div>
        </div>

       





        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.issuer') }}</label>
                <input type="text" class="form-control" name="issuer" />

            </div>
        </div>



        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.amount') }}</label>
                <input type="text" class="form-control" name="amount" />

            </div>
        </div>



        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.statement') }}</label>
                <input type="text" class="form-control" name="statement" />

            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.number') }}</label>
                <input type="text" class="form-control" name="number" />

            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.date') }}</label>
                <input type="text" class="form-control" name="date" />

            </div>
        </div>


        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.credit') }}</label>
                <input type="text" class="form-control" name="credit" />

            </div>
        </div>


      


        <div class="col-12 ">
            <button type="submit" class="btn btn-primary w-100">{{ __('translate.add') }}</button>
        </div>



    </div>
</form>
@endsection