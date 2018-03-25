<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
        {!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('name', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
        {!! Form::label('description', 'Description', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('description', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
            {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group">
        <label for="duration_type" class="col-md-4" style="text-align:right;">Course Duration Type</label>
        <div class="col-md-6">
            <select name="duration_type" class="form-control">
                <option value=0>Hours</option>
                <option value=1>Days</option>
            </select>
        </div>
    </div>

    <div class="form-group {{ $errors->has('duration_days') ? 'has-error' : ''}}">
        {!! Form::label('duration_days', 'Duration Days', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::number('duration_days',null,  ['class' => 'form-control']) !!}
            {!! $errors->first('duration_days', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('duration_hours') ? 'has-error' : ''}}">
        {!! Form::label('duration_hours', 'Duration Hours', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::number('duration_hours',null, ['class' => 'form-control']) !!}
            {!! $errors->first('duration_hours', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group">
        <label for="duration_type" class="col-md-4" style="text-align:right;">Gender</label>
        <div class="col-md-6">
            <select name="instructor_id" class="form-control">
                @foreach($instructors as $instructor)
                    <option value="{{$instructor->id}}">{{$instructor->name}}  ID. {{$instructor->id}}</option>
                @endforeach
            </select>
        </div>
    </div>
    