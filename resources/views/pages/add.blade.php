@extends('layouts.default')

@section('content')

<div class="col-12">
    <form action="{{url('save')}}" method="POST">
        @csrf
        <div class="card">
            <div class="card-body">
                <h3>Add New Product </h3>

                <div class="text-sm-end" style="float: right;">
                    <a href="home" style="font-size: 14px !important;cursor: pointer;" class="btn btn-primary">
                        <b>Back</b>
                    </a>
                </div>

                <br>
                <br>
                <div class="bd-example">
                <div class="form-group">
                    <label for=""><strong>Name</strong></label>
                    <input type="text" class="form-control" placeholder="Name" name="name">
                </div>
                <div class="form-group">
                    <label for=""><strong>Price (RM)</strong></label>
                    <input type="text" class="form-control" placeholder="99.90" name="price">
                </div>
                <div class="form-group">
                    <label for=""><strong>Details</strong></label>
                    <textarea type="text" class="form-control" placeholder="Details" name="details"></textarea>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="publish" value="1" checked>
                    <label class="form-check-label" for="">
                        Yes
                    </label>
                  </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="publish" value="2">
                    <label class="form-check-label" for="">
                        No
                    </label>
                </div>
                <br>
                <div style="text-align: center;">
                    <button class="btn btn-primary" style="font-size: 14px !important;cursor: pointer;" type="submit"><b>Submit</b></button>
                </div>
                </form>
                </div>
            </div>
        </div>
</div>

@endsection
