@extends('admin.layout')
@section('content')
    <div class="flex justify-between items-center">
        <h4 class="card-title">{{ __('translate.checks') }}</h4>
        <a href="{{ route('add.check.page') }}" class="btn btn-primary">{{ __('translate.add-check') }}</a>
    </div>



    <div class="table-responsive">
        <table id="myTable" class="display table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>{{ __('translate.issuer') }}</th>
                    <th>{{ __('translate.amount') }}</th>
                    <th>{{ __('translate.statement') }}</th>
                    <th>{{ __('translate.number') }}</th>
                    <th>{{ __('translate.date') }}</th>
                    <th>{{ __('translate.credit') }}</th>
                    <th>{{ __('translate.actions') }}</th>


                </tr>
            </thead>
            
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
                                <div tabindex="0" role="button" class="btn m-1"> {{ __('translate.actions') }}</div>
                                <ul tabindex="0"
                                    class="dropdown-content menu bg-base-100 rounded-box z-[1]  p-2 shadow">
                                    <li><a href="{{ route('edit.check', $check->id) }}">{{ __('translate.edit') }}</a>
                                    </li>
                                    <li><a href="{{ route('delete.check', $check->id) }}"
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
@endsection
