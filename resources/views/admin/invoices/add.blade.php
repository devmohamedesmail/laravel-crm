@extends('admin.layout')
@section('content')
    <div class=" bg-white flex justify-between px-5 bg-whiite ">
        <div class="col-6 d-flex align-items-center">
            <h6 class="font-bold">{{ __('translate.add-invoice') }}</h6>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <a href="{{ route('show.invoices') }}" class="btn btn-primary">{{ __('translate.show-invoices') }}</a>
        </div>
    </div>




    @if (session('success'))
      
        
        <dialog id="my_modal_1" class="modal">
            <div class="modal-box">
                <h3 class="text-3xl font-bold text-center">{{ __('translate.thank-you') }} {{ auth()->user()->name }} 👋</h3>
                <p class="py-4 text-center">{{ session('success') }}</p>
                <div class="modal-action">
                    <form method="dialog">
                        
                      <div class="flex">
                        <button class="btn btn-primary w-full mx-1">{{ __('translate.close') }}</button>
                        
                         <a href="{{ route('print.invoice', session('invoice_id')) }}"  class="btn btn-primary btn-outline w-full mx-1">
                            {{ __('translate.print') }}
                        </a> 
                      </div>
                    </form>
                </div>
            </div>
        </dialog>

        <script>
          document.getElementById("my_modal_1").showModal()
        </script>
    @endif







    <form action="{{ route('add.invoice') }}" method="post">
        @csrf
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mt-10">


            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.branch') }}</label>
                <select class="select select-primary w-full @error('branch') is-invalid @enderror" name="branch">

                    @foreach ($branches as $branch)
                        <option value="{{ $branch->id }}"> {{ $branch->name }} </option>
                    @endforeach
                </select>
                @error('branch')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.invoiceType') }}</label>

                <select class="select select-primary w-full " name="invoiceType">

                    @foreach ($invoicesTypes as $type)
                        <option value="{{ $type->type }}"> {{ $type->type }} </option>
                    @endforeach
                </select>

            </div>


            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.name') }}</label>
                <input type="text" class="input input-bordered input-primary w-full " name="name" value="{{ old('name') }}" />
            </div>




            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.phone') }}</label>
                <input type="text" class="input input-bordered input-primary w-full " name="phone" value="{{ old('phone') }}" />
            </div>




            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.car-no') }}</label>
                <input type="text"
                    class="input input-bordered input-primary w-full @error('carNo') is-invalid @enderror "
                    name="carNo" value="{{ old('carNo') }}" />
                @error('carNo')
                    <div class="text-red-600 text-sm">{{ $message }}</div>
                @enderror
            </div>




            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.car-type') }}</label>
                <input type="text"
                    class="input input-bordered input-primary w-full @error('carType') is-invalid @enderror "
                    name="carType" value="{{ old('carType') }}" />
                @error('carType')
                    <div class="text-red-600 text-sm">{{ $message }}</div>
                @enderror
            </div>








            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.price') }}</label>
                <input type="number"
                    class="input input-bordered input-primary w-full @error('price') is-invalid @enderror "
                    name="price" value="{{ old('price') }}" />
                @error('price')
                    <div class="text-red-600 text-sm">{{ $message }}</div>
                @enderror
            </div>







            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.address') }}</label>
                <input type="text" class="input input-bordered input-primary w-full  " name="address" value="{{ old('address') }}" />

            </div>






            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.car-service') }}</label>
                <input type="text"
                    class="input input-bordered input-primary w-full @error('carService') is-invalid @enderror "
                    name="carService" value="{{ old('carService') }}" />
                @error('carService')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>









            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.description') }}</label>
                <textarea class="textarea textarea-primary w-full" name="description">{{ old('description') }}</textarea>

            </div>










            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.note') }}</label>
                <input type="text"
                    class="input input-bordered input-primary w-full @error('note') is-invalid @enderror "
                    name="note" value="{{ old('note') }}" />
                @error('note')
                    <div class="text-red-600 text-sm">{{ $message }}</div>
                @enderror
            </div>






            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.percent') }}</label>
                <input type="text" class="input input-bordered input-primary w-full  " name="percent" value="{{ old('percent') }}" />

            </div>





            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.trn_no') }}</label>
                <input type="text" class="input input-bordered input-primary w-full  " name="trn_no" value="{{ old('trn_no') }}" />

            </div>






            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.take-date') }}</label>
                <input type="date" class="input input-bordered input-primary w-full  " name="Rdate" value="{{ old('Rdate') }}"  />

            </div>


            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.give-date') }}</label>
                <input type="date" class="input input-bordered input-primary w-full  " name="Ddate" value="{{ old('Ddate') }}" />

            </div>



        </div>
        <div class="mt-10">
            <button type="submit" class="btn btn-primary w-full">{{ __('translate.add') }}</button>
        </div>
    </form>
@endsection
