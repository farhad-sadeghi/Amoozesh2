@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('writer.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Abouts</div>
                    <div class="card-body">
                        <a href="{{ url('/abouts/create') }}" class="btn btn-success btn-sm" title="Add New About">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>


                        <form class="form-inline my-2 my-lg-0 float-right" action="{{route('abouts.index')}}" method="get">
                        @csrf

                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                      </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Header</th><th>Text</th><th>Picture</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($abouts as $item)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $item->header }}</td><td>{{ $item->text }}</td><td></td>
                                        <td>
                                            <a href="{{ url('/abouts/' . $item->id) }}" title="View About"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/abouts/' . $item->id . '/edit') }}" title="Edit About"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/abouts', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete About',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $abouts->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
