@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">FHIR Playground</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">Your current ENVIRONMENT is : <b>{{ env('SATUSEHAT_ENV') }}</b></p>
                    {!! isset($token) ? '<p class="mb-0">Your current token is : <b>' . $token . '</b></p>' : '' !!}
                    {!! isset($encounter) ? '<p class="mb-0">Your encounter example is : </p><pre><code>' . json_encode($encounter, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</code></pre>' : '' !!}
                </div>
            </div>
        </div>
    </div>
@stop


@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endpush

@push('js')
    @if ($message = Session::get('success'))
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script>
            toastr.options = {
                "closeButton": true,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

            toastr.success('{{ $message }}')
        </script>
    @endif
@endpush