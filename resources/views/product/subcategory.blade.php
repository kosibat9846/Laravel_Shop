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

        </tr>
        @foreach ($subcategory as $subcat)
            <tr>
                <td>{{ ++$i }}</td>
                <td><a  href="{{route('products.sybcategoryindex',$subcat->subcategory)}}"> {{ $subcat->name }}</a></td>

            </tr>
        @endforeach
    </table>


@endsection

