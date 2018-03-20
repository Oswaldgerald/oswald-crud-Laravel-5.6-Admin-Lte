@extends('products.layout')
@section('content')
    <div class="row">
        <div class="col-lg-8 margin-tb">
            <div class="pull-left">
                <h2>Products Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


 <div class="box-bordered">
     <table id="example1" class="table table-bordered table-striped">
         <tr>
             <th>No</th>
             <th>Name</th>
             <th>Details</th>
             <th width="280px">Action</th>
         </tr>
         @foreach ($products as $product)
             <tr>
                 <td>{{ ++$i }}</td>
                 <td>{{ $product->name }}</td>
                 <td>{{ $product->detail }}</td>
                 <td>
                     <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                         <a class="btn btn-primary btn-flat" href="{{ route('products.show',$product->id) }}">Show</a>
                         <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>


                         {{csrf_field()}}
                         {{--@method('DELETE')--}}
                         {{method_field('DELETE')}}


                         <button type="submit" class="btn btn-danger btn-flat">Delete</button>
                     </form>
                 </td>
             </tr>
         @endforeach
     </table>

 </div>


    {!! $products->links() !!}


@endsection