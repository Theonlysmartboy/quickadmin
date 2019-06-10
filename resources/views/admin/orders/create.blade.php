@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.order.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.orders.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('service') ? 'has-error' : '' }}">
                <label for="service">{{ trans('cruds.order.fields.service') }}*</label>
                <select id="service" name="service" class="form-control" required>
                    <option value="" disabled {{ old('service', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Order::SERVICE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('service', null) === (string)$key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('service'))
                    <p class="help-block">
                        {{ $errors->first('service') }}
                    </p>
                @endif
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="description">{{ trans('cruds.order.fields.description') }}*</label>
                <input type="text" id="description" name="description" class="form-control" value="{{ old('description', isset($order) ? $order->description : '') }}" required>
                @if($errors->has('description'))
                    <p class="help-block">
                        {{ $errors->first('description') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.order.fields.description_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection