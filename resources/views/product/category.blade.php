@extends('product.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Podkategorie</h2>
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
        @foreach ($category as $cat)
            <tr>
                <td>{{ ++$i }}</td>
                <td><a  href="{{route('product.show',$cat->id)}}"> {{ $cat->name }}</a></td>

            </tr>
        @endforeach
    </table>


@endsection

