@extends('admin.layout')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4 class="card-title">{{ __('translate.show-invoices') }}</h4>
                <a href="{{ route('add.invoice') }}" class="btn btn-primary">{{ __('translate.add-invoice') }}</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="multi-filter-select" class="display table table-striped table-hover">
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
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                {{ __('translate.actions') }}
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href="{{ route('edit.invoice', $invoice->id) }}">{{ __('translate.edit') }}</a>
                                                </li>
                                                <li><a class="dropdown-item" href="{{ route('print.invoice', $invoice->id) }}">{{ __('translate.print') }}</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="{{ route('delete.invoice', $invoice->id) }}"
                                                        onclick="return confirm('Are You Sure To Delete This item')">{{ __('translate.delete') }}</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach






                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
