@extends('layouts.default')

@section('content')

<div class="col-12">
    <input type="hidden" name="id" value="{{$product->id}}">

    <div class="card">
        <div class="card-body">
            <h3>Show Product </h3>

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
                <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $product->name }}" disabled>
            </div>
            <div class="form-group">
                <label for=""><strong>Price (RM)</strong></label>
                <input type="text" class="form-control" placeholder="99.90" name="price" value="{{ $product->price }}" disabled>
            </div>
            <div class="form-group">
                <label for=""><strong>Details</strong></label>
                <textarea class="form-control" placeholder="Details" name="details" disabled>{{ $product->details }}</textarea>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="publish" value="1"  @if(data_get($product,'publish') == 1) checked @endif disabled>
                <label class="form-check-label" for="">
                    Yes
                </label>
                </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="publish" value="2" @if(data_get($product,'publish') == 2) checked @endif disabled>
                <label class="form-check-label" for="">
                    No
                </label>
            </div>
            {{-- <br>
            <div style="text-align: center;">
                <button class="btn btn-primary" style="font-size: 14px !important;cursor: pointer;" type="submit"><b>Submit</b></button>
            </div> --}}
            </div>
        </div>
    </div>
</div>

@endsection
