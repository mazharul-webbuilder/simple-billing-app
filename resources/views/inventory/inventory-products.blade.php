@extends('master.master')
@section('title')
    Add Inventory Product
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h4 class="text-center text-secondary mb-4">Add Inventory Product</h4>
                    <form action="{{route('addProductInInvetory')}}" method="POST">
                        <p class="text-center text-success">{{Session::get('message')}}</p>
                        @csrf
                        <div class="row mb-4">
                            <div class="col-md-3">
                                <label for="" class="form-label">Product Id</label>
                            </div>
                            <div class="col-md-9">
                                <select name="productID" class="form-control">
                                    <option>-------Select Product Id--------</option>
                                    @foreach($products as $product)
                                    <option value="{{$product->id}}">Product ID-: {{$product->id}} Name-: {{$product->name}} Price:- {{$product->rate}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-3">
                                <label for="" class="form-label">Rate</label>
                            </div>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="rate">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-3">
                                <label for="" class="form-label">Quantity</label>
                            </div>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="qty">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-3">
                                <label for="" class="form-label">Discount</label>
                            </div>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="discount" placeholder="example for 10% type 10">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-9">
                                <p class="text-center"><input type="submit" class="btn btn-success w-50"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
