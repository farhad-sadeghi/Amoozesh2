@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('writer.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Edit Ourteam #{{ $ourteam->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/ourteams') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($ourteam, [
                            'method' => 'PATCH',
                            'url' => ['/ourteams', $ourteam->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('ourteams.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
