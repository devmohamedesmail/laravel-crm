@extends('admin.layout')
@section('content')
    <div class="row bg-white d-flex justify-content-between p-2">
        <div class="col-6">
            <h4>{{ __('translate.add-invoice') }}</h6>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <a class="btn btn-primary" href="{{ route('show.invoices') }}">{{ __('translate.show-invoices') }}</a>
        </div>
    </div>



    <form action="{{ route('edit.invoice.confirmation', $invoice->id) }}" method="post">
        @csrf
        <div class="row">


            <div class="col-12 col-md-6">
               


                <div class="form-group">
                    <label for="exampleFormControlSelect1"
                      >{{ __('translate.branch') }}</label
                    >
                    <select
                      class="form-select"
                      
                    >
                    <option selected value="{{ $invoice->branch_id }}">{{ $invoice->branchName }}</option>
                    @foreach ($branches as $branch )
                 <option value="{{ $branch->id }}"> {{ $branch->name }} </option>
                 @endforeach
                    </select>
                  </div>
            </div>





            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.name') }}</label>
                    <input type="text" class="form-control" name="name" value="{{ $invoice->name }}" />

                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.phone') }}</label>
                    <input type="text" class="form-control" name="phone" value="{{ $invoice->phone }}" />

                </div>
            </div>



            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.car-no') }}</label>
                    <input type="text" class="form-control" name="carNo" value="{{ $invoice->carNo }}" />

                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.car-type') }}</label>
                    <input type="text" class="form-control" value="{{ $invoice->carType }}" />

                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.price') }}</label>
                    <input type="text" class="form-control" name="price" value="{{ $invoice->price }}" />

                </div>
            </div>


            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.address') }}</label>
                    <input type="text" class="form-control" name="address" value="{{ $invoice->address }}" />

                </div>
            </div>


            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.car-service') }}</label>
                    <input type="text" class="form-control" name="carService" value="{{ $invoice->carService }}" />

                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.description') }}</label>
                    <input type="text" class="form-control" name="description" value="{{ $invoice->description }}" />

                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.note') }}</label>
                    <input type="text" class="form-control" name="note" value="{{ $invoice->note }}" />

                </div>
            </div>


            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.percent') }}</label>
                    <input type="text" class="form-control" name="percent" value="{{ $invoice->percent }}" />

                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.trn_no') }}</label>
                    <input type="text" class="form-control" name="trn_no" value="{{ $invoice->trn_no }}" />

                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.take-date') }}</label>
                    <input type="date" class="form-control" name="Rdate" value="{{ $invoice->Rdate }}" />

                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label>{{ __('translate.give-date') }}</label>
                    <input type="date" class="form-control" name="Ddate" value="{{ $invoice->Ddate }}" />

                </div>
            </div>


            <div class="col-12 ">
                <button type="submit" class="btn btn-primary w-100">{{ __('translate.edit') }}</button>
            </div>



        </div>
    </form>
@endsection
