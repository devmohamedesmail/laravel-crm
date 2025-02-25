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

    <div class="flex flex-col lg:flex-row justify-between items-center">
        <h4 class="card-title">{{ __('translate.staff') }}</h4>
        <div>
            <a href="{{ route('reset.staff.data') }}" onclick="return confirm('Are You Sure To Reset Staff Data')"
                class="btn btn-danger">{{ __('translate.reset-staff') }}</a>
            <a href="{{ route('add.staff.page') }}" class="btn btn-primary">{{ __('translate.add-staff') }}</a>
        </div>
    </div>



    <div class="table-responsive">
        <table id="myTable" class="display table table-striped table-hover">
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
                                <div tabindex="0" role="button" class="btn btn-primary m-1"> {{ __('translate.actions') }}</div>
                                <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1]  p-2 shadow">
                                  <li><a href="{{ route('edit.staff', $item->id) }}">{{ __('translate.edit') }}</a></li>
                                  <li><a href="{{ route('delete.staff', $item->id) }}" onclick="return confirm('Are You Sure To Delete This item')">{{ __('translate.delete') }}</a></li>
                                </ul>
                              </div>
                        </td>

                    </tr>
                @endforeach






            </tbody>
        </table>
    </div>

@endsection
