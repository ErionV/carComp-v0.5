{{ Form::open(['url' => URL::route('post_advert'), 'method' => 'POST', 'class'=>'form-signup', 'file' => true]) }}

    {{ Form::text('number_plate', null, ['class'=>'form-control', 'placeholder'=>'Number plate']) }}
    {{ $errors->first('number_plate') }}

    {{ Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Title']) }}
    {{ $errors->first('title') }}

    {{ Form::text('price', null, ['class'=>'form-control', 'placeholder'=>'Price']) }}
    {{ $errors->first('price') }}



    {{Form::file('image')}}
    {{ $errors->first('image') }}


    {{ Form::text('make', null, ['class'=>'form-control', 'placeholder'=>'Make']) }}
    {{ $errors->first('make') }}

    {{ Form::text('model', null, ['class'=>'form-control', 'placeholder'=>'Model']) }}
    {{ $errors->first('model') }}

    {{ Form::text('gearbox', null, ['class'=>'form-control', 'placeholder'=>'Gearbox']) }}
    {{ $errors->first('gearbox') }}

    {{ Form::text('fuel_type', null, ['class'=>'form-control', 'placeholder'=>'Fuel type']) }}
    {{ $errors->first('fuel_type') }}



    {{ Form::text('mileage', null, ['class'=>'form-control', 'placeholder'=>'Mileage']) }}
    {{ $errors->first('mileage') }}

    {{ Form::text('colour', null, ['class'=>'form-control', 'placeholder'=>'Colour']) }}
    {{ $errors->first('colour') }}



    {{ Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Vehicle description']) }}
    {{ $errors->first('description') }}

    {{ Form::textarea('extras', null, ['class'=>'form-control', 'placeholder'=>'Vehicle Extras']) }}
    {{ $errors->first('extras') }}

    {{ Form::text('plus_points', null, ['class'=>'form-control', 'placeholder'=>'Vehicle plus points']) }}
    {{ $errors->first('plus_points') }}

    {{ Form::text('negative_points', null, ['class'=>'form-control', 'placeholder'=>'Vehicle negative points']) }}
    {{ $errors->first('negative_points') }}

    {{ Form::submit('Post ad!'); }}


{{Form::close()}}