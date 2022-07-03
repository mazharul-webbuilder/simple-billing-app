@extends('master.master')
@section('title')
    All Products
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <h3 class="text-center text-secondary">Products</h3>
                    <table id="example" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Rate</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->code}}</td>
                                <td>{{$product->name}}</td>
                                <td>Tk. {{number_format($product->rate)}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
