<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Foods Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foods', 'Foods:') !!}
    {!! Form::text('foods', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>