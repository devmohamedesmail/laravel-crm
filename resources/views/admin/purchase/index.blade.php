@extends('admin.layout')
@section('content')
    <div class="flex justify-between items-center">
        <h4 class="card-title">{{ __('translate.purchases') }}</h4>
        <a href="{{ route('add.purcheases.page') }}" class="btn btn-primary">{{ __('translate.add-purchase') }}</a>
    </div>

    <div class="table-responsive">
        <table id="myTable" class="display table table-striped table-hover">
            <thead>
                <tr>
                    <th>{{ __('translate.branch') }}</th>
                    <th>{{ __('translate.department') }}</th>
                    <th>{{ __('translate.title') }}</th>
                    <th>{{ __('translate.quantity') }}</th>
                    <th>{{ __('translate.price') }}</th>
                    <th>{{ __('translate.total') }}</th>
                    <th>{{ __('translate.date') }}</th>

                </tr>
            </thead>


            <tbody>


                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->branch->name }}</td>
                        <td>{{ $item->department->name }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->total }}</td>
                        <td>{{ $item->date }}</td>

                    </tr>
                @endforeach







            </tbody>
        </table>
    </div>
@endsection
