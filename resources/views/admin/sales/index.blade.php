@extends('admin.layout')
@section('content')




@php $total = 0 @endphp


<div>
    <h4 class="font-bold">{{ __('translate.name') }} : {{ $sales }}</h4>
    <h4 class="my-4">{{ __('translate.total') }} : {{ count($invoices) }}</h4>
    
</div>
<hr>

<div class="mt-4">
    <form action="{{ route('filter.sales.invoices',$sales) }}" method="GET">
        @csrf
       <div class="grid grid-cols-1 lg:grid-cols-6 gap-4 items-end">

        <div>
            <label
                class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.start') }}</label>
            <input type="date" class="input input-bordered input-primary w-full " name="start" required />
        </div>



        <div>
            <label
                class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.start') }}</label>
            <input type="date" class="input input-bordered input-primary w-full " name="end" required />
        </div>

        <div>
            <label class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.invoiceType') }}</label>
            <select class="select select-primary w-full" name="invoicetype">
                @foreach ($invoicesTypes as $type )
                <option value="{{ $type->type }}">{{ $type->type }}</option> 
                @endforeach 
              </select>
        </div>

        <div>
            <label class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.invoiceType') }}</label>
            <select class="select select-primary w-full" name="paidMethod">
                @foreach ($paymentMethods as $method )
                <option value="{{ $method->method }}">{{ $method->method }}</option> 
                @endforeach 
              </select>
        </div>



        <div class="mt-5">
            <button class="btn btn-primary w-full" type="submit">{{ __('translate.filter') }}</button>
        </div>
        <div class="mt-5">
            <button class="btn btn-primary btn-error w-full text-white" type="reset">{{ __('translate.reset') }}</button>
        </div>
       </div>
    </form>
</div>



<div>
    <table  id="myTable" class="table table-xs" >
        <thead>
            <tr>
                <th>{{ __('translate.car-no') }}</th>
                <th>{{ __('translate.car-type') }}</th>
                <th>{{ __('translate.price') }}</th>
            </tr>
        </thead>
      
        <tbody >
    
            @foreach ($invoices as $invoice)
                <tr>
                    <td>{{ $invoice->carNo }}</td>
                    <td>{{ $invoice->carType }}</td>
                    <td>{{ $invoice->price }}</td>
                </tr>
                @php $total += $invoice->price @endphp
            @endforeach
        </tbody>
    </table>
</div>
<div>
    <h4 class="my-4 bg-fuchsia-950 p-3 text-white">{{ __('translate.total') }} : {{ $total }}</h4>
</div>
@endsection