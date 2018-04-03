    <div class="form-group" >
        <label class="col-md-6 control-label" >Select Course</label>
        <div class="col-md-6">
        <select name="course_id" class="form-control">
            @foreach($courses as $course)
                <option value="{{$course->id}}">{{$course->name}}</option>
            @endforeach
        </select>
        </div>
    </div>
    
    <div class="form-group" >
        <label class="col-md-6 control-label" >Select Student</label>
        <div class="col-md-6">
        <select name="student_id" class="form-control">
            @foreach($students as $student)
                <option value="{{$student->id}}">{{$student->name}}</option>
            @endforeach
        </select>
        </div>
    </div>

    <div class="form-group {{ $errors->has('rating') ? 'has-error' : ''}}">
        {!! Form::label('rating', 'Rating Out of 10', ['class' => 'col-md-6 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('rating', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
            {!! $errors->first('rating', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('comment') ? 'has-error' : ''}}">
        {!! Form::label('comment', 'Comment', ['class' => 'col-md-6 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('comment', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
            {!! $errors->first('comment', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('valid_from') ? 'has-error' : ''}}">
        {!! Form::label('valid_from', 'Valid From', ['class' => 'col-md-6 control-label']) !!}
        <div class="col-md-6">
            {!! Form::date('valid_from', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
            {!! $errors->first('valid_from', '<p class="help-block">:message</p>') !!}
        </div>
    </div>