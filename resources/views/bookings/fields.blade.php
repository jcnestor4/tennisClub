<!-- Bookingdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bookingdate', 'Bookingdate:') !!}
    {!! Form::date('bookingdate', null, ['class' => 'form-control','id'=>'bookingdate']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#bookingdate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Starttime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('starttime', 'Starttime:') !!}
    {!! Form::text('starttime', null, ['class' => 'form-control']) !!}
</div>

<!-- Endtime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endtime', 'Endtime:') !!}
    {!! Form::text('endtime', null, ['class' => 'form-control']) !!}
</div>

<!-- Memberid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('memberid', 'Memberid:') !!}
    <select name="memberid" class="form-control">
		@foreach ($members as $member)
			<option value="{{$member->id}}">{{$member}}</option>
		@endforeach
	</select>
</div>

<!-- Courtid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('courtid', 'Courtid:') !!}
    {!! Form::number('courtid', null, ['class' => 'form-control']) !!}
</div>

<!-- Fee Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fee', 'Fee:') !!}
    {!! Form::number('fee', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('bookings.index') }}" class="btn btn-default">Cancel</a>
</div>
