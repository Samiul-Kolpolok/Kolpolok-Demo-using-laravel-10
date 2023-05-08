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

    <form action="{{route('update.subscriber',['id'=>$subscriber->id])}}" method="POST" >
        @csrf
        <div class="modal-body">
            <div class="d-sm-flex align-items-center py-5">
                <a href="#">
                    <img src="asset/ui_image/kolpolok_modal_image.png" alt="kolpolok_modal_image" width="350 px" height="350 px" />
                </a>
                <div class="ms-auto">
                    <h5 class="modal-title mb-5 text-info" id="staticBackdropLabel">Update Subscriber</h5>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" value="{{$subscriber->name}}" id="exampleFormControlInput1" placeholder="Name">
                      </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" value="{{$subscriber->email}}"  id="exampleFormControlInput1" placeholder="Email (Required)*">
                      </div>
                      <div class="mb-3">
                        <input type="text" class="form-control" name="mobile" value="{{$subscriber->mobile}}" id="exampleFormControlInput1" placeholder="Mobile">
                      </div>
                      <div class="mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="message"  rows="5" placeholder="Write your message (Required)*">{{$subscriber->message}}</textarea>
                      </div>
                      <div class="d-sm-flex align-items-center justify-content-between py-3">
                        <h1>4+8 = </h1>
                        <div>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Required*">
                        </div>
                      </div>
                      <div class="mb-3">
                        <input type="text" class="form-control" name="status" value="{{$subscriber->status}}" id="exampleFormControlInput1" placeholder="Status">
                      </div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
