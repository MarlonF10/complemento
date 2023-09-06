@extends('layouts.app')

@section('template_title')
    {{ $order->name ?? "{{ __('Show') Order" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Order</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('order.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Type Order:</strong>
                            {{ $order->type_order }}
                        </div>
                        <div class="form-group">
                            <strong>Register Date:</strong>
                            {{ $order->register_date }}
                        </div>
                        <div class="form-group">
                            <strong>Customer:</strong>
                            {{ $order->customer }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
