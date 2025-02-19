@extends('admin.layout')
@section('content')



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







<form action="{{ route('add.purchase') }}" method="post">
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
                <label>{{ __('translate.department') }}</label>
                <select class="form-select" name="department">

                    @foreach ($departments as $department)
                    <option value="{{ $department->id }}"> {{ $department->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>





        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.title') }}</label>
                <input type="text" class="form-control" name="title" />

            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.quantity') }}</label>
                <input type="text" class="form-control" name="quantity" />

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
                <label>{{ __('translate.date') }}</label>
                <input type="date" class="form-control" name="carType" />

            </div>
        </div>

       




        <div class="col-12 ">
            <button type="submit" class="btn btn-primary w-100">{{ __('translate.add') }}</button>
        </div>



    </div>
</form>















@endsection