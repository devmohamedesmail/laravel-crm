@extends('admin.layout')
@section('content')
<div class="row bg-white d-flex justify-content-between align-items-center p-2">
    <div class="col-6 d-flex align-items-center">
        <h6 class="fw-bold">{{ __('translate.add-invoice') }}</h6>
    </div>
    <div class="col-6 d-flex justify-content-end">
        <a href="{{ route('show.invoices') }}">{{ __('translate.show-invoices') }}</a>
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







<form action="{{ route('add.invoice') }}" method="post">
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
                <label>{{ __('translate.invoiceType') }}</label>
                <select class="form-select" name="invoiceType">

                    @foreach ($invoicesTypes as $type)
                    <option value="{{ $type->type }}"> {{ $type->type }} </option>
                    @endforeach
                </select>
            </div>
        </div>





        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.name') }}</label>
                <input type="text" class="form-control" name="name" />

            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.phone') }}</label>
                <input type="text" class="form-control" name="phone" />

            </div>
        </div>



        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.car-no') }}</label>
                <input type="text" class="form-control" name="carNo" />

            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.car-type') }}</label>
                <input type="text" class="form-control" name="carType" />

            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.price') }}</label>
                <input type="text" class="form-control" name="price" />

            </div>
        </div>


        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.address') }}</label>
                <input type="text" class="form-control" name="address" />

            </div>
        </div>


        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.car-service') }}</label>
                <input type="text" class="form-control" name="carService" />

            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.description') }}</label>
                <input type="text" class="form-control" name="description" />

            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.note') }}</label>
                <input type="text" class="form-control" name="note" />

            </div>
        </div>


        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.percent') }}</label>
                <input type="text" class="form-control" name="percent" />

            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.trn_no') }}</label>
                <input type="text" class="form-control" name="trn_no" />

            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.take-date') }}</label>
                <input type="date" class="form-control" name="Rdate" />

            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.give-date') }}</label>
                <input type="date" class="form-control" name="Ddate" />

            </div>
        </div>


        <div class="col-12 ">
            <button type="submit" class="btn btn-primary w-100">{{ __('translate.add') }}</button>
        </div>



    </div>
</form>
@endsection