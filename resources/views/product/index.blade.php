@extends('layout.master')

@section('content')

<div class="container">
    <div class="row">
      <div class="my-3">
        
          @if(session('success'))
          <div class="alert alert-success" >
              {{session('success')}} 
          </div>
          @endif
       
      </div>
<table class="table table-hover" >
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">price</th>
        <th scope="col">description</th>
        <th scope="col">serial_number</th>
        <th scope="col">category_id</th>
        <th scope="col" >opreation</th>



      </tr>
    </thead>
    <tbody>
       
        @forelse ($products as $product)
            
        <tr>
             {{--  فيني اكتب الهطريقة  --}}
            <td>{{$product['id']}}</td> 
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->serial_number }}</td>
            <td>{{$product->category_id}}</td>

            <td>
                <a class="btn btn-info" href="{{route('product.edit',$product->id)}}" >update</a>
               {{-- ( 1 ) <a class="btn btn-primary" href="{{url('/product/delete').'/'.$product->id}}" >delete</a> --}}
               <a class="btn btn-danger" href="{{route('product.delete',['id'=>$product->id])}}" >delete</a>
            
            </td>

        </tr>

        @empty
        <tr>
            <td colspan="100">
                there are no racords
                        </td>
        </tr>
        
        @endforelse
       
    </tbody>
    
  </table>
  <div class="my-3" >
  <a href="{{route('product.create')}}" class="btn btn-warning">Add product</a>
@endsection