@extends('admin.layout')
@section('content')
    @if (session('success'))
        <div role="alert" class="alert my-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info h-6 w-6 shrink-0">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span>{{ session('success') }}</span>
            <button class="btn btn-sm btn-primary" onclick="this.parentElement.remove()"><i
                    class="fa-solid fa-xmark"></i></button>
        </div>
    @endif




    <div class="flex justify-end">

        <a href="{{ route('show.staff.page') }}" class="btn btn-primary">{{ __('translate.show-staff') }}</a>
    </div>







    <form action="{{ route('add.staff') }}" method="post">
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
                <input type="text" class="input input-bordered input-primary w-full " name="name" />
            </div>




            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.salary') }}</label>
                <input type="text" class="input input-bordered input-primary w-full " name="salary" />
            </div>




            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.discount') }}</label>
                <input type="text" class="input input-bordered input-primary w-full " name="discount" />
            </div>









            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.advance') }}</label>
                <input type="text" class="input input-bordered input-primary w-full " name="advance" />
            </div>




            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.comments') }}</label>
                <textarea class="textarea textarea-primary w-full" name="comments"></textarea>
            </div>





            <div class="col-12 ">
                <button type="submit" class="btn btn-primary w-full">{{ __('translate.add') }}</button>
            </div>



        </div>
    </form>
@endsection
