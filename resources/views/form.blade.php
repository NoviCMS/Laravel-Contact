{!! Form::open(['route' => 'ds.contact.handle', 'class' => 'contact-form']) !!}
    {!! Form::hidden('from', Request::path()) !!}

    @if (session()->has('contact_form_message'))
        <div class="alert alert-success">
            {!! session('contact_form_message') !!}
        </div>
    @endif

    @foreach (config('contact.fields') as $fieldName => $options)
        <div class="form-group{!! $errors->has($fieldName) ? ' has-error' : '' !!}">
            {!! Form::label($fieldName, trans('contact::form.labels.'.$fieldName), [
                'class' => 'control-label contact-form-'.$fieldName.'-label'
            ]) !!}

            @if ($options['type'] == 'textarea')
                {!! Form::textarea($fieldName, old($fieldName), [
                    'class'       => 'form-control contact-form-'.$fieldName,
                    'placeholder' => trans('contact::form.placeholders.'.$fieldName)
                ]) !!}
            @elseif ($options['type'] == 'select')
                {!! Form::select($fieldName, $options['choices'], old($fieldName), [
                    'class'       => 'form-control contact-form-'.$fieldName
                ]) !!}
            @else
                {!! Form::text($fieldName, old($fieldName), [
                    'class'       => 'form-control contact-form-'.$fieldName,
                    'placeholder' => trans('contact::form.placeholders.'.$fieldName)
                ]) !!}
            @endif

            @if ($errors->has($fieldName))
                <span class="help-block">{!! $errors->first($fieldName) !!}</span>
            @endif
        </div>
    @endforeach

    {!! Form::submit(trans('contact::form.submit'), [
        'class' => 'btn btn-primary pull-right contact-form-submit'
    ]) !!}
{!! Form::close() !!}
