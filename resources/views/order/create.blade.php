@extends('layouts.app');

@section('content');
   <div class="contrainer">
    <h1>Nuevo pedido </h1>

    <form action="{{route('order.store')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="type_order" class="form-label">
                <i class="fas fa-heading text-primary"></i> Descripcion
            </label>
            <input type="text" class="form-control" id="type_order" name="type_order" required>
        </div>

        <div class="mb-3">
            <label for="register_date" class="form-label">
                <i class="fas fa-heading text-primary"></i> Fecha de registro
            </label>
            <input type="date" class="form-control" id="register_date" name="register_date" required>
        </div>

        <div class="mb-3">
            <label for="customer" class="form-label">
                <i class="fas fa-heading text-primary"></i> Cliente
            </label>
            <select name="customer" id="inputCustomer" class="form-control">
               <option value="">-- Elige un Cliente --</option>
            @foreach ($customers as $customer) 
               <option value="{{$customer['id'] }}">{{$customer['name'] }} </option>
               @endforeach
            </select> 
        </div>

        <button tyoe="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar
        </button>
        <a href="{{route('order.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Volver
        </a>
    </form>
</div>
@endsection