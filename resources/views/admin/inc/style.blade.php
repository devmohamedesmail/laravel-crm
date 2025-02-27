<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>{{ $setting->namear }}</title>
<meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
<link rel="icon" href="/uploads/setting/{{ $setting->logo }}" type="image/x-icon" />
<link rel="stylesheet" href="{{ asset('/template/styles/styles.css') }}">

{{-- *************************************** font awesome cdn **************************************** --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

{{-- *************************************** daisy ui cdn **************************************** --}}
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>


{{-- **************************************** datatables style **************************************** --}}
<link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />

<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- **************************************** htmx cdn **************************************** --}}
<script src="https://unpkg.com/htmx.org@2.0.4/dist/htmx.js"
    integrity="sha384-oeUn82QNXPuVkGCkcrInrS1twIxKhkZiFfr2TdiuObZ3n3yIeMiqcRzkIcguaof1" crossorigin="anonymous">
</script>

<style>
    :root {
        --primary: rgb(78, 2, 78);
        --secondary: rgb(78, 2, 78);
        --accent: rgb(78, 2, 78);
        --accent-focus: rgb(78, 2, 78);
        --accent-content: rgb(78, 2, 78);
    }





    .dt-layout-row {
        display: flex !important;
        flex-direction: row !important;
        justify-content: center;
        align-items: center;
        flex-wrap: nowrap
    }

    /* datatables styles start */
    .dt-length label,
    .dt-search label {
        display: none !important;
    }

    .dt-length select:focus {
        border: 1px solid var(--primary) !important;
    }

    .dt-input:focus {
        border: 1px solid var(--primary) !important;
        outline: none
    }

    /* datatables styles end */
</style>
