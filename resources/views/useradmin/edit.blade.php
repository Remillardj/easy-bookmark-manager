@extends('app')

@section('content')

    <div class='col-lg-4 col-lg-offset-4'>

        <h1>
            {{ trans('messages.user.edit') }}
            <a href="/admin/users" class="btn btn-default pull-right">
                {{ trans("messages.back") }}
            </a>
        </h1>

        {{ Form::model($user, ['role' => 'form', 'url' => '/admin/user/' . $user->id, 'method' => 'PUT']) }}

        @include('useradmin/userform')

        @include('partials/errors')

        <div class='form-group'>
            {{ Form::submit(trans('messages.save'), ['class' => 'btn btn-success']) }}
        </div>

        {{ Form::close() }}

    </div>

@stop


