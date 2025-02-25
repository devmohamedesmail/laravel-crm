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










<div class="flex justify-between">
    <h4 class="card-title">{{ __('translate.show-invoices') }}</h4>
    <a href="{{ route('add.invoice') }}" class="btn btn-primary">{{ __('translate.add-invoice') }}</a>
</div>
   
<table  id="myTable" class="display table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th> 
            <th>{{ __('translate.name') }}</th>
            <th>{{ __('translate.phone') }}</th>
            <th>{{ __('translate.car-no') }}</th>
            <th>{{ __('translate.car-type') }}</th>
            <th>{{ __('translate.price') }}</th>
            <th>{{ __('translate.sales') }}</th>
            <th>{{ __('translate.actions') }}</th>


        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>{{ __('translate.name') }}</th>
            <th>{{ __('translate.phone') }}</th>
            <th>{{ __('translate.car-no') }}</th>
            <th>{{ __('translate.car-type') }}</th>
            <th>{{ __('translate.price') }}</th>
            <th>{{ __('translate.sales') }}</th>

        </tr>
    </tfoot>
    <tbody>

        @foreach ($invoices as $invoice)
            <tr>
                <td>{{ $invoice->id }}</td>
                <td>{{ $invoice->name }}</td>
                <td>{{ $invoice->phone }}</td>
                <td>{{ $invoice->carNo }}</td>
                <td>{{ $invoice->carType }}</td>
                <td>{{ $invoice->price }}</td>
                <td>{{ $invoice->sales }}</td>
                <td>
                    


                    <div class="dropdown">
                        <div tabindex="0" role="button" class="btn btn-primary m-1">  {{ __('translate.actions') }}</div>
                        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1]  p-2 shadow">
                          <li><a href="{{ route('edit.invoice', $invoice->id) }}">{{ __('translate.edit') }}</a></li>
                          <li><a href="{{ route('print.invoice', $invoice->id) }}">{{ __('translate.print') }}</a></li>
                          <li><a href="{{ route('delete.invoice', $invoice->id) }}" onclick="return confirm('Are You Sure To Delete This item')">{{ __('translate.delete') }}</a></li>
                        </ul>
                      </div>



                </td>

            </tr>
        @endforeach
    </tbody>
</table>

@endsection
