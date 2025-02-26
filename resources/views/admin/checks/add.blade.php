@extends('admin.layout')
@section('content')
    <div class="flex justify-between items-center">
        <h6 class="fw-bold">{{ __('translate.add-check') }}</h6>
        <a href="{{ route('show.checks.page') }}" class="btn btn-primary">{{ __('translate.checks') }}</a>
    </div>




    @if (session('success'))
      
        
    <dialog id="my_modal_1" class="modal">
        <div class="modal-box">
            <h3 class="text-3xl font-bold text-center">{{ __('translate.thank-you') }} {{ auth()->user()->name }} 👋</h3>
            <p class="py-4 text-center">{{ session('success') }}</p>
            <div class="modal-action">
                <form method="dialog">
                    
                  <div class="flex">
                    <button class="btn btn-primary w-full mx-1">{{ __('translate.close') }}</button>
                    
                  </div>
                </form>
            </div>
        </div>
    </dialog>

    <script>
      document.getElementById("my_modal_1").showModal()
    </script>
@endif







    <form action="{{ route('add.check') }}" method="post">
        @csrf
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">


          

            <div>
                <label class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.branch') }}</label>
                <select class="select select-primary w-full" name="branch">
                    @foreach ($branches as $branch)
                    <option value="{{ $branch->id }}"> {{ $branch->name }} </option>
                @endforeach
                  </select>
            </div>







            

            <div>
                <label class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.issuer') }}</label>
                <input type="text" placeholder="Type here" class="input input-bordered input-primary w-full " name="issuer" required />
            </div>



            <div>
                <label class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.amount') }}</label>
                <input type="number" placeholder="Type here" class="input input-bordered input-primary w-full " name="amount" required />
            </div>



            
            <div>
                <label class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.statement') }}</label>
                <input type="text" placeholder="Type here" class="input input-bordered input-primary w-full " name="statement" required />
            </div>


                
            <div>
                <label class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.number') }}</label>
                <input type="text" placeholder="Type here" class="input input-bordered input-primary w-full " name="number" required />
            </div>




    

            <div>
                <label class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.date') }}</label>
                <input type="date" placeholder="Type here" class="input input-bordered input-primary w-full " name="date" required />
            </div>


           


            <div>
                <label class="mb-2 font-bold block @if (app()->getlocale() === 'ar') text-right @endif">{{ __('translate.credit') }}</label>
                <input type="text" placeholder="Type here" class="input input-bordered input-primary w-full " name="credit" required />
            </div>





           



        </div>
        <div class="mt-10 ">
            <button type="submit" class="btn btn-primary w-full">{{ __('translate.add') }}</button>
        </div>
    </form>
@endsection
