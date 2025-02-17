@extends('admin.layout')
@section('content')


@if (session('success'))
<script>
    Toastify({
        text: "{{ session('success') }}",
        duration: 3000, 
        close: true, 
        gravity: "top", 
        position: "right", 
        backgroundColor: "green", 
        stopOnFocus: true, 
    }).showToast();
</script>
@endif








<div class="col-md-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4 class="card-title">{{ __('translate.staff') }}</h4>
            <div>
                <a href="{{ route('reset.staff.data') }}" onclick="return confirm('Are You Sure To Reset Staff Data')" class="btn btn-danger">{{ __('translate.reset-staff') }}</a>
                <a href="{{ route('add.staff.page') }}" class="btn btn-primary">{{ __('translate.add-staff') }}</a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table id="multi-filter-select" class="display table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>{{ __('translate.name') }}</th>
                            <th>{{ __('translate.salary') }}</th>
                            <th>{{ __('translate.discount') }}</th>
                            <th>{{ __('translate.advance') }}</th>
                            <th>{{ __('translate.netsalary') }}</th>
                            <th>{{ __('translate.comments') }}</th>
                            <th>{{ __('translate.actions') }}</th>


                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>{{ __('translate.name') }}</th>
                            <th>{{ __('translate.salary') }}</th>
                            <th>{{ __('translate.discount') }}</th>
                            <th>{{ __('translate.advance') }}</th>
                            <th>{{ __('translate.netsalary') }}</th>
                            <th>{{ __('translate.comments') }}</th>
                            <th>{{ __('translate.sales') }}</th>

                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach ($staff as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->salary }}</td>
                                <td>{{ $item->discount }}</td>
                                <td>{{ $item->advance }}</td>
                                <td>{{ $item->netsalary }}</td>
                                <td>{{ $item->comments }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            {{ __('translate.actions') }}
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="{{ route('edit.staff', $item->id) }}">{{ __('translate.edit') }}</a>
                                            </li>
                                           
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('delete.staff', $item->id) }}"
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