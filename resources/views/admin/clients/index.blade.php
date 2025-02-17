@extends('admin.layout')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4 class="card-title">{{ __('translate.show-clients') }}</h4>
                <a href="{{ route('add.invoice') }}" class="btn btn-primary">{{ __('translate.add-invoice') }}</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="multi-filter-select" class="display table table-striped table-hover">
                        <thead>
                            <tr>
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

                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->phone }}</td>
                                    <td>{{ $client->carNo }}</td>
                                    <td>{{ $client->carType }}</td>
                                    <td>{{ $client->price }}</td>
                                    <td>{{ $client->sales }}</td>
                              

                                </tr>
                            @endforeach






                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
