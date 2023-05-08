@extends('admin.master')

@section('content')

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center text-primary">Subscribers Information</h4>
                    </div>
                    <span class="text-success text-center">{{Session::has('message') ? Session::get('message'):''}}</span>
                    <div class="card-body">
                        <div class="table-responsive ">

                            <table class="table table-bordered table-hover text-primary">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($subscribers as $subscriber)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$subscriber->name}}</td> 
                                        <td>{{$subscriber->email}}</td>
                                        <td>{{$subscriber->mobile}}</td>
                                        <td>{{$subscriber->message}}</td>
                                        <td>{{$subscriber->status == 1 ? 'Active':'Inactive'}}</td>
                                        <td>
                                            <a href="{{route('edit.subscriber',['id'=>$subscriber->id])}}"><button class="btn btn-success">Edit</button></a>
                                            <a href="{{route('delete.subscriber',['id'=>$subscriber->id])}}"><button class="btn btn-danger">Del</button></a>
                                        </td>
                                    </tr>
                                     @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
