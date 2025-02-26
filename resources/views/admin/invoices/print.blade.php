@extends('admin.layout')

<style>
    @media print {
        body * {
            visibility: hidden; /* Hide everything by default */
        }
        #invoice-paper, #invoice-paper * {
            visibility: visible; /* Show only the invoice */
        }
        #invoice-paper {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
        }
    }
    </style>


@section('content')
    <div class="flex justify-between items-center">  
        <h6 class="font-bold text-xl">{{ __('translate.print-invoice') }}</h6>
        <a href="{{ route('show.invoices') }}" class="btn btn-outline btn-primary">{{ __('translate.show-invoices') }}</a>   
    </div>





    <div>

        <div class="flex justify-end mt-2">
            <button class="btn btn-primary" id="print_button">{{ __('translate.print') }}</button>
        </div>
        <div class="invoice-paper mt-2 border bg-white py-2 px-1" id="invoice-paper">


            <div class="invoice-header">
                <div class="flex justify-between items-center">
                    <div>
                        <img src="/uploads/setting/{{ $setting->logo }}" width="100" height="100" alt="">
                    </div>
                    <div>
                        <h5 class="text-center text-xl font-extrabold">{{ $setting->namear }}</h5>
                        <h5 class="text-center text-xl font-extrabold">{{ $setting->nameen }}</h5>
                    </div>
                </div>
            </div>



            <!-- invoice type start -->
            <div class="flex  justify-center items-center mt-2">
                <p class=" px-5 py-2 border ">
                    {{ $invoice->invoiceType }}
                </p>
            </div>
            <!-- invoice type End -->




            <!-- trn start -->
            @if ($invoice->trn_no !== null)
                <div class="d-flex  justify-content-center align-items-center my-5">
                    <p class=" px-5 py-2">
                        TRN NO : {{ $invoice->trn_no }}
                    </p>
                </div>
            @endif
            <!-- trn End -->


            <!-- client info start -->
            <div class="grid grid-cols-2 my-2">
                <div class="flex justify-between items-center px-2 border py-2">
                    <div class="text-dark">{{ $invoice->phone }}</div>
                    <div class="text-dark"> رقم الهاتف </div>
                </div>
                <div class="flex justify-between items-center px-2 border py-2">
                    <div class="text-dark">{{ $invoice->name }}</div>
                    <div class="text-dark"> اسم العميل </div>
                </div>

                <div class="flex justify-between items-center px-2 border py-2">
                    <div class="text-dark">{{ $invoice->phone }}</div>
                    <div class="text-dark"> التاريخ </div>
                </div>
                <div class="flex justify-between items-center px-2 border py-2">
                    <div class="text-dark">{{ $invoice->invoiceNumber }}</div>
                    <div class="text-dark"> رقم الفاتورة </div>
                </div>

            </div>
            <!-- client info end -->

            <!-- car No Start -->

            <div class="flex  justify-end items-center my-2">
                <div class=" px-5 py-2" style="border:1px solid #000; border-left: 5px solid #000">
                    {{ $invoice->carNo }}
                </div>
            </div>

            <!-- car No End -->



            <!-- service info start -->
            <div class="grid grid-cols-2 my-2">
                <div class="flex justify-between items-center px-2 border py-2">
                    <div class="text-dark">Car Type</div>
                    <div class="text-dark">{{ $invoice->carType }}</div>
                    <div class="text-dark"> نوع السيارة </div>
                </div>

                <div class="flex justify-between items-center px-2 border py-2">
                    <div class="text-dark">Service Type</div>
                    <div class="text-dark">{{ $invoice->carService }}</div>
                    <div class="text-dark"> نوع الخدمه </div>
                </div>




                <div class="flex justify-between items-center px-2 border py-2">
                    <div class="text-dark">Ratio</div>
                    <div class="text-dark">{{ $invoice->percent }}</div>
                    <div class="text-dark"> النسبه </div>
                </div>

                <div class="flex justify-between items-center px-2 border py-2">
                    <div class="text-dark"> Price </div>
                    <div class="text-dark">{{ $invoice->price }}</div>
                    <div class="text-dark"> السعر </div>
                </div>




                <div class="flex justify-between items-center px-2 border py-2">
                    <div class="text-dark">VAT</div>
                    <div class="text-dark">{{ $invoice->price * 0.05 }} </div>
                    <div class="text-dark"> الضريبه </div>
                </div>

                <div class="flex justify-between items-center px-2 border py-2">
                    <div class="text-dark"> Total Price </div>
                    <div class="text-dark">{{ $invoice->price + $invoice->price * 0.05 }} </div>
                    <div class="text-dark"> الاجمالي </div>
                </div>

            </div>
            <!-- service info end -->



            <!-- description and notes start -->
            <div class=" mt-2">
                <div class="flex">
                    <div class="flex-1 border p-2" style="text-align: right">
                        {{ $invoice->description }}
                    </div>
                    <div class=" border p-2 w-32" style="text-align: right">
                        وصف السيارة
                    </div>

                </div>

                <div class="flex">
                    <div class="flex-1 border p-2 " style="text-align: right">
                        {{ $invoice->note }}
                    </div>
                    <div class=" border p-2 w-32" style="text-align: right">
                        الملاحظات
                    </div>
                </div>
            </div>
            <!-- description and notes end -->


            <!-- rules and condition start -->
            <h4 class="text-right mt-3">
                الشروط والاحكام
            </h4>
            <div class="mt-1">
                @foreach ($notes as $index => $note)
                    <p class="text-right" style="direction: rtl;font-size: 10px;margin-bottom: 5px"> {{ $index + 1 }} -
                        {{ $note->notear }}</p>
                @endforeach
            </div>
            <!-- rules and condition end -->



            <!-- signature start -->
            <div class="flex justify-between items-center mt-3">
                <div class="flex items-start justify-center flex-col">
                    <div>Authorized Signature</div>
                    <div> --------------------- </div>
                </div>
                <div class="col-6 d-flex align-items-end justify-content-center flex-column">
                    <div>Customer Signature</div>
                    <div> --------------------- </div>
                </div>
            </div>
            <!-- signature end -->



            <!----------------------- second page --------------- -->

            <div class="invoice-header">
                <div class="flex justify-between items-center">
                    <div>
                        <img src="/uploads/setting/{{ $setting->logo }}" width="100" height="100" alt="">
                    </div>
                    <div>
                        <h5 class="text-center text-xl font-extrabold">{{ $setting->namear }}</h5>
                        <h5 class="text-center text-xl font-extrabold">{{ $setting->nameen }}</h5>
                    </div>
                </div>
            </div>



            <!-- rules and condition start -->
            <h4 class=" mt-5">
                Terms and Conditions
            </h4>
            <div class="mt-4">
                @foreach ($notes as $index => $note)
                    <p style="font-size: 10px;margin-bottom: 5px"> {{ $index + 1 }} - {{ $note->noteen }}</p>
                @endforeach
            </div>
            <!-- rules and condition end -->


            <div class="mt-5 flex justify-end items-end flex-col">
                <p>
                    تم استلام السياره كما هو متفق عليه
                </p>
                <p>
                    التوقيع
                </p>

            </div>






            <!-- paper End -->
        </div>
    </div>



    <script>
        // const printButton = document.getElementById("print_button");
        const invoicePaper = document.getElementById("invoice-paper");

        // printButton.addEventListener("click", () => {
        //     const printContent = invoicePaper.innerHTML;
        //     const originalContent = document.body.innerHTML;

        //     document.body.innerHTML = printContent; 
        //     window.print(); 
        //     document.body.innerHTML = originalContent; 
        // });

        const printButton = document.getElementById("print_button");
        printButton.addEventListener("click", () => {
            window.print();
        });
    </script>
@endsection
