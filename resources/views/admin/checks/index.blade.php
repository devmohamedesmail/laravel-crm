@extends('admin.layout')
@section('content')

<div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4 class="card-title">{{ __('translate.checks') }}</h4>
                <a href="{{ route('add.check.page') }}" class="btn btn-primary">{{ __('translate.add-check') }}</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="multi-filter-select" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                            <th>ID</th>
                                <th>{{ __('translate.issuer') }}</th>
                                <th>{{ __('translate.amount') }}</th>
                                <th>{{ __('translate.statement') }}</th>
                                <th>{{ __('translate.number') }}</th>
                                <th>{{ __('translate.date') }}</th>
                                <th>{{ __('translate.credit') }}</th>


                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>{{ __('translate.issuer') }}</th>
                                <th>{{ __('translate.amount') }}</th>
                                <th>{{ __('translate.statement') }}</th>
                                <th>{{ __('translate.number') }}</th>
                                <th>{{ __('translate.date') }}</th>
                                <th>{{ __('translate.credit') }}</th>

                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach ($checks as $check)
                                <tr>
                                    <td>{{ $check->id }}</td>
                                    <td>{{ $check->issuer }}</td>
                                    <td>{{ $check->amount }}</td>
                                    <td>{{ $check->statement }}</td>
                                    <td>{{ $check->number }}</td>
                                    <td>{{ $check->date }}</td>
                                    <td>{{ $check->credit }}</td>
                                    
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                {{ __('translate.actions') }}
                                            </button>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item"
                                                        href="{{ route('edit.check', $check->id) }}">{{ __('translate.edit') }}</a>
                                                </li>
                                               
                                                <li><a class="dropdown-item"
                                                        href="{{ route('delete.check', $check->id) }}"
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