<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('producto_id') }}</label>
    <div>
        {{ Form::text('producto_id', $venta->producto_id, ['class' => 'form-control' .
        ($errors->has('producto_id') ? ' is-invalid' : ''), 'placeholder' => 'Producto Id']) }}
        {!! $errors->first('producto_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">venta <b>producto_id</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('cantidad') }}</label>
    <div>
        {{ Form::text('cantidad', $venta->cantidad, ['class' => 'form-control' .
        ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
        {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">venta <b>cantidad</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('fecha_venta', 'Fecha y Hora de Venta') }}</label>
    <div>
        {{ Form::datetimeLocal('fecha_venta', \Carbon\Carbon::now()->format('Y-m-d\TH:i'), ['class' => 'form-control' . ($errors->has('fecha_venta') ? ' is-invalid' : '')]) }}
        {!! $errors->first('fecha_venta', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Venta <b>fecha_venta</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('precio_unitario') }}</label>
    <div>
        {{ Form::text('precio_unitario', $venta->precio_unitario, ['class' => 'form-control' .
        ($errors->has('precio_unitario') ? ' is-invalid' : ''), 'placeholder' => 'Precio Unitario']) }}
        {!! $errors->first('precio_unitario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">venta <b>precio_unitario</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
