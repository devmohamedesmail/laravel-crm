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






    <div class="flex bg-white justify-between items-center">
        <h4>{{ __('translate.edit') }}</h6>
            <a class="btn btn-primary" href="{{ route('show.invoices') }}">{{ __('translate.show-invoices') }}</a>
    </div>



    <form action="{{ route('edit.invoice.confirmation', $invoice->id) }}" method="post">
        @csrf



        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mt-10">


            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.branch') }}</label>
                <select class="select select-primary w-fullr" name="branch">
                    <option selected value="{{ $invoice->branch_id }}">{{ $invoice->branchName }}</option>
                    @foreach ($branches as $branch)
                        <option value="{{ $branch->id }}"> {{ $branch->name }} </option>
                    @endforeach
                </select>
              
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
                <input type="text" class="input input-bordered input-primary w-full " name="name" value="{{ $invoice->name }}" />
            </div>




            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.phone') }}</label>
                <input type="text" class="input input-bordered input-primary w-full " name="phone" value="{{ $invoice->phone }}" />
            </div>




            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.car-no') }}</label>
                <input type="text"
                    class="input input-bordered input-primary w-full @error('carNo') is-invalid @enderror "
                    name="carNo" value="{{ $invoice->carNo }}" />
                @error('carNo')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>




            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.car-type') }}</label>
                <input type="text"
                    class="input input-bordered input-primary w-full @error('carType') is-invalid @enderror "
                    name="carType" value="{{ $invoice->carType }}" />
                @error('carType')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>








            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.price') }}</label>
                <input type="text"
                    class="input input-bordered input-primary w-full @error('price') is-invalid @enderror "
                    name="price"  value="{{ $invoice->price }}" />
                @error('price')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>







            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.address') }}</label>
                <input type="text" class="input input-bordered input-primary w-full  " name="address" value="{{ $invoice->address }}" />

            </div>






            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.car-service') }}</label>
                <input type="text"
                    class="input input-bordered input-primary w-full @error('carService') is-invalid @enderror "
                    name="carService"  value="{{ $invoice->carService }}" />
                @error('carService')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>









            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.description') }}</label>
                <textarea class="textarea textarea-primary w-full" name="description">{{ $invoice->description }}</textarea>

            </div>










            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.note') }}</label>
                <input type="text"
                    class="input input-bordered input-primary w-full @error('note') is-invalid @enderror "
                    name="note" value="{{ $invoice->note }}" />
                @error('note')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>






            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.percent') }}</label>
                <input type="text" class="input input-bordered input-primary w-full  " name="percent" value="{{ $invoice->percent }}" />

            </div>





            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.trn_no') }}</label>
                <input type="text" class="input input-bordered input-primary w-full  " name="trn_no" value="{{ $invoice->trn_no }}" />

            </div>






            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.take-date') }}</label>
                <input type="date" class="input input-bordered input-primary w-full  " name="Rdate" />

            </div>


            <div>
                <label
                    class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.give-date') }}</label>
                <input type="date" class="input input-bordered input-primary w-full  " name="Ddate" />

            </div>






            <div class="col-span-2">
                <button type="submit" class="btn btn-primary w-full">{{ __('translate.edit') }}</button>
            </div>



        </div>




     
    </form>
@endsection
