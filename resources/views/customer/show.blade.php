@extends('layouts.app')

@section('template_title')
    {{ $customer->name ?? "{{ __('Show') Customer" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Customer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('customer.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $customer->name }}
                        </div>
                        <div class="form-group">
                            <strong>Age:</strong>
                            {{ $customer->age }}
                        </div>
                        <div class="form-group">
                            <strong>Numbero Phone:</strong>
                            {{ $customer->numbero_phone }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
