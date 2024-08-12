<div class="form-row">
    <div class="form-group mb-4">

        <label for="name">Nombre</label>

        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }} mt-2" id="name" name="name" placeholder="" value="{{ isset($category) ? $category->name : old('name') }}">

        @if ($errors->has('name'))

        <div class="error invalid-feedback">

            <strong>{{ $errors->first('name') }}</strong>

        </div>

        @endif

    </div>

    <div class="form-group mb-4">
        <label for="description">Descripción</label>

        <textarea class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }} mt-2" 
        id="description" name="description" placeholder="Descripción de la categoría">{{ isset($category) ? $category->description : old('description') }}</textarea>

        @if ($errors->has('description'))

        <div class="error invalid-feedback">

            <strong>{{ $errors->first('description') }}</strong>

        </div>

        @endif
    </div>

    @if(isset($category))

        <button type="submit" class="btn btn-primary">Actualizar</button>

    @else

        <button type="submit" class="btn btn-primary">Guardar</button>

    @endif

    <a href="/category" class="btn btn-default"> Regresar</a>
</div>