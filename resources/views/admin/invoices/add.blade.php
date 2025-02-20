@extends('admin.layout')
@section('content')
    <div class="row bg-white d-flex justify-content-between align-items-center p-2">
        <div class="col-6 d-flex align-items-center">
            <h6 class="fw-bold">{{ __('translate.add-invoice') }}</h6>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <a href="{{ route('show.invoices') }}">{{ __('translate.show-invoices') }}</a>
        </div>
    </div>




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




{{-- 
    <?php
    function form_input_template($label = null, $type='text' , $name )
    {
        echo '
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>' . $label .'</label>
                <input type="' . $type . '"  class="form-control" name="' . $name . '" />
            </div>
        </div>';
    }
    
    ?> --}}



    {{-- <?php form_input_template("Name", "text", "name"); ?> --}}




    <form action="{{ route('add.invoice') }}" method="post">
        @csrf
        <div class="row bg-white my-3 p-3">

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.branch') }}</label>
                    <select class="form-select @error('branch') is-invalid @enderror" name="branch">

                        @foreach ($branches as $branch)
                            <option value="{{ $branch->id }}"> {{ $branch->name }} </option>
                        @endforeach
                    </select>
                </div>
                @error('branch')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.invoiceType') }}</label>
                    <select class="form-select" name="invoiceType">

                        @foreach ($invoicesTypes as $type)
                            <option value="{{ $type->type }}"> {{ $type->type }} </option>
                        @endforeach
                    </select>
                </div>
            </div>





            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.name') }}</label>
                    <input type="text" class="form-control" name="name" />

                </div>
            </div>






            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.phone') }}</label>
                    <input type="text" class="form-control" name="phone" />

                </div>
            </div>



            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.car-no') }}</label>
                    <input type="text" class="form-control @error('carNo') is-invalid @enderror " name="carNo" />

                </div>
                @error('carNo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>











            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.car-type') }}</label>
                    <input type="text" class="form-control @error('carType') is-invalid @enderror" name="carType" />

                </div>
                @error('carType')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>




            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.price') }}</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" />

                </div>


                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.address') }}</label>
                    <input type="text" class="form-control" name="address" />

                </div>
            </div>


            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.car-service') }}</label>
                    <input type="text" class="form-control @error('carService') is-invalid @enderror"
                        name="carService" />

                </div>
                @error('carService')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>



            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.description') }}</label>
                    <input type="text" class="form-control" name="description" />

                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.note') }}</label>
                    <input type="text" class="form-control @error('note') is-invalid @enderror" name="note" />

                </div>
                @error('note')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.percent') }}</label>
                    <input type="text" class="form-control" name="percent" />

                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.trn_no') }}</label>
                    <input type="text" class="form-control" name="trn_no" />

                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.take-date') }}</label>
                    <input type="date" class="form-control" name="Rdate" />

                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.give-date') }}</label>
                    <input type="date" class="form-control" name="Ddate" />

                </div>
            </div>


            <div class="col-12 ">
                <button type="submit" class="btn btn-primary w-100">{{ __('translate.add') }}</button>
            </div>



        </div>
    </form>
@endsection
