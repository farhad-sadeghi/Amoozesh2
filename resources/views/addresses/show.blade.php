@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('writer.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Address {{ $address->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/addresses') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/addresses/' . $address->id . '/edit') }}" title="Edit Address"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['addresses', $address->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Address',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $address->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $address->name }} </td></tr>
                                    <tr><th> Family </th><td> {{ $address->family }} </td></tr>
                                    <tr><th> State </th><td> {{ $address->state }} </td></tr>
                                    <tr><th> city </th><td> {{ $address->city }} </td></tr>
                                    <tr><th> addres </th><td> {{ $address->addres }} </td></tr>
                                    <tr><th> phone </th><td> {{ $address->phone }} </td></tr>
                                    <tr><th> post_code </th><td> {{ $address->post_code }} </td></tr>
                                    <tr><th> email </th><td> {{ $address->email }} </td></tr>
                                    <tr><th> text </th><td> {{ $address->text }} </td></tr>
                                    <tr><th> product </th><td> {{ $address->product }} </td></tr>
                                    <tr><th> number </th><td> {{ $address->number }} </td></tr>
                                    <tr><th> price </th><td> {{ $address->price }} </td></tr>
                                    @if($address->status == 0)
                                    <tr><th> status </th><td style="color:red"> پرداخت نشده </td></tr>
                                    @else
                                    <tr><th> status </th><td style="color:green">پرداخت شده</td></tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
