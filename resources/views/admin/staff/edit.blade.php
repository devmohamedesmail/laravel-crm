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




<div class="flex justify-end">
    <a href="{{ route('show.staff.page') }}" class="btn btn-primary">{{ __('translate.show-staff') }}</a>
</div>







<form action="{{ route('edit.staff' , $staff->id ) }}" method="post">
    @csrf
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">





        <div>
            <label
                class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.department') }}</label>
            <select class="select select-primary w-full " name="department">
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}"> {{ $department->name }} </option>
                @endforeach
            </select>

        </div>








        <div>
            <label
                class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.name') }}</label>
            <input type="text" class="input input-bordered input-primary w-full " name="name" value="{{ $staff->name }}" />
        </div>




        <div>
            <label
                class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.salary') }}</label>
            <input type="text" class="input input-bordered input-primary w-full " name="salary" value="{{ $staff->salary }}" />
        </div>




        <div>
            <label
                class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.discount') }}</label>
            <input type="text" class="input input-bordered input-primary w-full " name="discount" value="{{ $staff->discount }}" />
        </div>









        <div>
            <label
                class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.advance') }}</label>
            <input type="text" class="input input-bordered input-primary w-full " name="advance" value="{{ $staff->advance }}" />
        </div>




        <div>
            <label
                class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.comments') }}</label>
            <textarea class="textarea textarea-primary w-full" name="comments">{{ $staff->comments }}</textarea>
        </div>





        <div class="col-12 ">
            <button type="submit" class="btn btn-primary w-full">{{ __('translate.edit') }}</button>
        </div>



    </div>
</form>
@endsection