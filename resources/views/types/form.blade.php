<div class="form-group{{ $errors->has('picture') ? 'has-error' : ''}}">
    {!! Form::label('picture', 'Picture', ['class' => 'control-label']) !!}
    {!! Form::file('picture', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('picture', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('price') ? 'has-error' : ''}}">
    {!! Form::label('price', 'Price', ['class' => 'control-label']) !!}
    {!! Form::number('price', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('property3') ? 'has-error' : ''}}">
    {!! Form::label('text', 'text', ['class' => 'control-label']) !!}
    {!! Form::textarea('text', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('text', '<p class="help-block">:text</p>') !!}
</div>

<div class="form-group{{ $errors->has('sale_id') ? 'has-error' : ''}}">
    <div class="col-md-6">
        <label class="col-md-4">دسته ی فروش :</label>
        <select class="form-control col-md-8" style="height: auto" name="sale_id"  required autofocus>
          @foreach($sales as $sale)
            <option value="{{$sale->id}}" {{old('sale_id')}}>{{$sale->name}}</option>
         @endforeach
        </select>
    </div>
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
