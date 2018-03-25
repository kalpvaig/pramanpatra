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

    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
        {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('email', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('age') ? 'has-error' : ''}}">
        {!! Form::label('age', 'Enter Age', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('age', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
            {!! $errors->first('age', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    
    <div class="form-group">
        <label for="gender" class="col-md-4" style="text-align:right;">Gender</label>
        <div class="col-md-6">
            <select name="gender" class="form-control">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
    </div>

    <div class="form-group {{ $errors->has('phone1') ? 'has-error' : ''}}">
        {!! Form::label('phone1', 'Phone ', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('phone1', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
            {!! $errors->first('phone1', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('phone2') ? 'has-error' : ''}}">
        {!! Form::label('phone2', 'Alternate Phone', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('phone2', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
            {!! $errors->first('phone2', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
        {!! Form::label('address', 'Address', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('address', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
            {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    
    <div class="form-group {{ $errors->has('enrolled_date') ? 'has-error' : ''}}">
            {!! Form::label('enrolled_date', 'Enrolled Date', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::date('enrolled_date', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                {!! $errors->first('enrolled_date', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

    <div class="form-group {{ $errors->has('verification_no') ? 'has-error' : ''}}">
        {!! Form::label('verification_no', 'Verification Number / Social Security Number / Adhar Number', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('verification_no', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
            {!! $errors->first('verification_no', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group">
        <label for="verification_doc" class="col-md-4">Choose Verification Document</label>
        <div class="col-md-6">
            <input type="file" name="verification_doc" class="form-control" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4" for="photo">Choose Student$quot;s Photo</label>
        <div class="col-md-6">
            <input type="file" name="photo" class="form-control" />
        </div>
    </div>

    <div class="form-group {{ $errors->has('social1_name') ? 'has-error' : ''}}">
        {!! Form::label('social1_name', 'Social Media Name E.g. Facebook', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('social1_name', null, ['class' => 'form-control']) !!}
            {!! $errors->first('social1_name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('social1_url') ? 'has-error' : ''}}">
        {!! Form::label('social1_url', 'Social Media URL E.g. https://facebook.com/kalpvaigtechnologies', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('social1_url', null, ['class' => 'form-control']) !!}
            {!! $errors->first('social1_url', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    
    
    <div class="form-group {{ $errors->has('social2_name') ? 'has-error' : ''}}">
        {!! Form::label('social2_name', '2nd Social Media Name E.g. Twitter', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('social2_name', null, ['class' => 'form-control']) !!}
            {!! $errors->first('social2_name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
     
    <div class="form-group {{ $errors->has('social2_url') ? 'has-error' : ''}}">
        {!! Form::label('social2_url', '2nd Social Media Url E.g. https://twitter.com/kalpvaig', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('social2_url', null, ['class' => 'form-control']) !!}
            {!! $errors->first('social2_url', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    
    <div class="form-group {{ $errors->has('social3_name') ? 'has-error' : ''}}">
        {!! Form::label('social1_name', '3rd Social Media Name E.g. LinkedIn', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('social3_name', null, ['class' => 'form-control']) !!}
            {!! $errors->first('social3_name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('social3_url') ? 'has-error' : ''}}">
        {!! Form::label('social3_url', 'Social Media Url E.g. https://linkedin.com/kalpvaig', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('social3_url', null, ['class' => 'form-control']) !!}
            {!! $errors->first('social3_url', '<p class="help-block">:message</p>') !!}
        </div>
    </div>