@extends('admin.layout')
@section('content')






@if (session('success'))
<script>
    Toastify({
        text: "{{ session('success') }}",
        duration: 3000, // Duration in milliseconds
        close: true, // Show close button
        gravity: "top", // Position top of the screen
        position: "right", // Position right side
        backgroundColor: "green", // Custom background color
        stopOnFocus: true, // Stop toast on focus
    }).showToast();
</script>
@endif




<div class="d-flex justify-content-end">
    <a href="{{ route('show.staff.page') }}" class="btn btn-primary">{{ __('translate.show-staff') }}</a>
</div>







<form action="{{ route('edit.staff' , $staff->id ) }}" method="post">
    @csrf
    <div class="row bg-white my-3 p-3">


        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.department') }}</label>
                <select class="form-select" name="department">

                    @foreach ($departments as $department)
                    <option value="{{ $department->id }}"> {{ $department->name }} </option>
                    @endforeach
                </select>
            </div>
        </div>







        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.name') }}</label>
                <input type="text" class="form-control" name="name" value="{{ $staff->name }}" />

            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.salary') }}</label>
                <input type="number" class="form-control" name="salary" value="{{ $staff->salary }}" />

            </div>
        </div>



        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.discount') }}</label>
                <input type="text" class="form-control" name="discount" value="{{ $staff->discount }}" />

            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.advance') }}</label>
                <input type="text" class="form-control" name="advance" value="{{ $staff->advance }}" />

            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>{{ __('translate.comments') }}</label>

                <textarea type="text" class="form-control" name="comments"> {{ $staff->comments }} </textarea>
            </div>
        </div>











        <div class="col-12 ">
            <button type="submit" class="btn btn-primary w-100">{{ __('translate.add') }}</button>
        </div>



    </div>
</form>
@endsection