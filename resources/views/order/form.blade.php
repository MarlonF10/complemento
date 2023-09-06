<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('type_order') }}
            {{ Form::text('type_order', $order->type_order, ['class' => 'form-control' . ($errors->has('type_order') ? ' is-invalid' : ''), 'placeholder' => 'Type Order']) }}
            {!! $errors->first('type_order', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('register_date') }}
            {{ Form::text('register_date', $order->register_date, ['class' => 'form-control' . ($errors->has('register_date') ? ' is-invalid' : ''), 'placeholder' => 'Register Date']) }}
            {!! $errors->first('register_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('customer') }}
            {{ Form::text('customer', $order->customer, ['class' => 'form-control' . ($errors->has('customer') ? ' is-invalid' : ''), 'placeholder' => 'Customer']) }}
            {!! $errors->first('customer', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>