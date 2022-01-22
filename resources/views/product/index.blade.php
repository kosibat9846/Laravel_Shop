@extends('product.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>
            </div>

        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Category</th>
            <th>Subcategory</th>
        </tr>
        @foreach ($product as $prod)
            <tr>
                <td>{{ ++$i }}</td>
                <td><a  href="{{route('product.show',$prod->id)}}"> {{ $prod->name }}</a></td>
                <td>{{ $prod->dimension }}</td>
                <td>{{ $prod->quantity }}</td>
                <td>{{ $prod->category_id }}</td>
                <td>{{ $prod->subcategory_id }}</td>



            </tr>
        @endforeach
    </table>


@endsection
