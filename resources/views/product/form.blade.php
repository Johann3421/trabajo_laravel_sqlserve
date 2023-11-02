<div class="form-group mb-3">
        <label class="form-label">{{ Form::label('name', 'Nombre del Producto') }}</label>
        <div>
            {{ Form::text('name', $product->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del Producto']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            <small class="form-hint">Nombre del <b>Producto</b>.</small>
        </div>
    </div>

    <div class="form-group mb-3">
        <label class="form-label">{{ Form::label('description', 'Descripción del Producto') }}</label>
        <div>
            {{ Form::text('description', $product->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Descripción del Producto']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
            <small class="form-hint">Descripción del <b>Producto</b>.</small>
        </div>
    </div>

    <div class="form-group mb-3">
        <label class="form-label">{{ Form::label('stock', 'Existencias') }}</label>
        <div>
            {{ Form::text('stock', $product->stock, ['class' => 'form-control' . ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Existencias']) }}
            {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
            <small class="form-hint"><b>Existencias</b>.</small>
        </div>
    </div>

    <div class="form-group mb-3">
        <label class="form-label">{{ Form::label('price', 'Precio') }}</label>
        <div>
            {{ Form::text('price', $product->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
            <small class="form-hint"><b>Precio</b>.</small>
        </div>
    </div>

    <div class="form-group mb-3">
        <label class="form-label">{{ Form::label('category', 'Categoría') }}</label>
        <div>
            {{ Form::text('category', $product->category, ['class' => 'form-control' . ($errors->has('category') ? ' is-invalid' : ''), 'placeholder' => 'Categoría']) }}
            {!! $errors->first('category', '<div class="invalid-feedback">:message</div>') !!}
            <small class="form-hint"><b>Categoría</b>.</small>
        </div>
    </div>

    <div class="form-group mb-3">
        <label class="form-label">{{ Form::label('provider', 'Proveedor') }}</label>
        <div>
            {{ Form::text('provider', $product->provider, ['class' => 'form-control' . ($errors->has('provider') ? ' is-invalid' : ''), 'placeholder' => 'Proveedor']) }}
            {!! $errors->first('provider', '<div class="invalid-feedback">:message</div>') !!}
            <small class="form-hint"><b>Proveedor</b>.</small>
        </div>
    </div>

    <div class="form-group mb-3">
        <label class="form-label">{{ Form::label('image_path', 'Subir Imagen') }}</label>
        <div>
            {{ Form::file('image_path', ['class' => 'form-control' . ($errors->has('image_path') ? ' is-invalid' : '')]) }}
            {!! $errors->first('image_path', '<div class="invalid-feedback">:message</div>') !!}
            <small class="form-hint"><b>Subir Imagen</b>.</small>
        </div>
    </div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Guardar</button>
            </div>
        </div>
    </div>
