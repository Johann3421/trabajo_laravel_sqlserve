
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('user_id') }}</label>
    <div>
        {{ Form::text('user_id', $usp->user_id, ['class' => 'form-control' .
        ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
        {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">usp <b>user_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('venta_id') }}</label>
    <div>
        {{ Form::text('venta_id', $usp->venta_id, ['class' => 'form-control' .
        ($errors->has('venta_id') ? ' is-invalid' : ''), 'placeholder' => 'Venta Id']) }}
        {!! $errors->first('venta_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">usp <b>venta_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('producto_id') }}</label>
    <div>
        {{ Form::text('producto_id', $usp->producto_id, ['class' => 'form-control' .
        ($errors->has('producto_id') ? ' is-invalid' : ''), 'placeholder' => 'Producto Id']) }}
        {!! $errors->first('producto_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">usp <b>producto_id</b> instruction.</small>
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
