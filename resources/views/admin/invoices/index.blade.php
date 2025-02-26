@extends('admin.layout')
@section('content')




@if (session('success'))
      
        
<dialog id="my_modal_1" class="modal">
    <div class="modal-box">
        <h3 class="text-3xl font-bold text-center">{{ __('translate.thank-you') }} {{ auth()->user()->name }} 👋</h3>
        <p class="py-4 text-center">{{ session('success') }}</p>
        <div class="modal-action">
            <form method="dialog">
                
                <button class="btn btn-primary">ok</button>
            </form>
        </div>
    </div>
</dialog>

<script>
  document.getElementById("my_modal_1").showModal()
</script>
@endif










<div class="flex justify-between">
    <h4 class="card-title">{{ __('translate.show-invoices') }}</h4>
    <a href="{{ route('add.invoice') }}" class="btn btn-primary">{{ __('translate.add-invoice') }}</a>
</div>
   
<div class="hidden lg:block">
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
      
        <tbody id="invoice-table-body">
    
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
    
</div>






<div class="block lg:hidden">
    <table  id="myTable" class="display table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th> 
                <th>{{ __('translate.phone') }}</th>
                <th>{{ __('translate.car-no') }}</th>
                <th>{{ __('translate.car-type') }}</th>
                <th>{{ __('translate.price') }}</th>
                <th>{{ __('translate.actions') }}</th>
    
    
            </tr>
        </thead>
      
        <tbody id="invoice-table-body">
    
            @foreach ($invoices as $invoice)
                <tr>
                    <td>{{ $invoice->id }}</td>
                    
                    <td>{{ $invoice->phone }}</td>
                    <td>{{ $invoice->carNo }}</td>
                    <td>{{ $invoice->carType }}</td>
                    <td>{{ $invoice->price }}</td>
                 
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
    
</div>





<script>
    import Echo from 'laravel-echo';
    import Pusher from 'pusher-js';

    window.Pusher = Pusher;

    const echo = new Echo({
        broadcaster: 'pusher',
        key: '{{ env("PUSHER_APP_KEY") }}',
        cluster: '{{ env("PUSHER_APP_CLUSTER") }}',
        forceTLS: true
    });

    echo.channel('invoices')
        .listen('InvoiceCreated', (event) => {
            const invoice = event.invoice;
            const newRow = `
                <tr id="invoice-row-${invoice.id}">
                    <td>${invoice.id}</td>
                    <td>${invoice.name}</td>
                    <td>${invoice.phone}</td>
                    <td>${invoice.carNo}</td>
                    <td>${invoice.carType}</td>
                    <td>${invoice.price}</td>
                    <td>${invoice.sales}</td>
                    <td>
                        <div class="dropdown">
                            <div tabindex="0" role="button" class="btn btn-primary m-1"> {{ __('translate.actions') }}</div>
                           <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] p-2 shadow">
                                <li><a href="${window.routes.edit}${invoice.id}">{{ __('translate.edit') }}</a></li>
                                <li><a href="${window.routes.print}${invoice.id}">{{ __('translate.print') }}</a></li>
                                <li><a href="${window.routes.delete}${invoice.id}" onclick="return confirm('Are You Sure To Delete This item')">{{ __('translate.delete') }}</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            `;
            document.getElementById('invoice-table-body').innerHTML += newRow;
        });
</script>




@endsection
