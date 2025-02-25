@extends('admin.layout')
@section('content')



@if (session('success'))
<div role="alert" class="alert my-5">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info h-6 w-6 shrink-0">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
    </svg>
    <span>{{ session('success') }}</span>
    <button class="btn btn-sm btn-primary" onclick="this.parentElement.remove()"><i class="fa-solid fa-xmark"></i></button>
</div>
@endif








  <div>
    <form action="{{ route('add.purchase') }}" method="post">
        @csrf
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">



            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.branch') }}</label>
                <select class="select select-primary w-full " name="branch">
                    @foreach ($branches as $branch)
                        <option value="{{ $branch->id }}"> {{ $branch->name }} </option>
                    @endforeach
                </select>

            </div>





            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.department') }}</label>
                <select class="select select-primary w-full " name="department">
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}"> {{ $department->name }}</option>
                    @endforeach
                </select>

            </div>










            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.title') }}</label>
                <input type="text" required class="input input-bordered input-primary w-full "
                    name="title" />
            </div>





            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.quantity') }}</label>
                <input type="text" required class="input input-bordered input-primary w-full "
                name="quantity" />
            </div>




            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.price') }}</label>
                <input type="text" required class="input input-bordered input-primary w-full "
                 name="price"  />
            </div>






           

            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.date') }}</label>
                <input type="date"  class="input input-bordered input-primary w-full "
                 name="date"  />
            </div>







            <div class="col-span-2 ">
                <button type="submit" class="btn btn-primary w-full">{{ __('translate.add') }}</button>
            </div>



        </div>
    </form>
  </div>
@endsection
