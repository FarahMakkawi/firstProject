@extends('layout.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">
          <h5 class="text-center" >Update Products</h5>
       <form class="row g-3" method="post" action="{{route('product.update',$product->id)}}">
            @csrf
            <div class="col-12">
              <label for="inputNanme4" class="form-label">Name </label>
              <input type="text" class="form-control" id="inputNanme4" name="name" value="{{$product->name}}"  class="@error('name') is-invalid @enderror">
              @error('name')
                 <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            
            
            <br>
            <div class="col-12">
              <label for="inputPassword4" class="form-label">Price </label>
              <input type="text" class="form-control" id="inputPassword4" name="price"  value="{{$product->price}}" class="@error('price') is-invalid @enderror">
              @error('price')
                 <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <br>

            <div class="col-12">
              <label for="inputPassword4" class="form-label">SerialNumber </label>
              <input type="number" class="form-control" id="inputPassword4" name="serial_number"  value="{{$product->serial_number}}" class="@error('serial_number') is-invalid @enderror">
              @error('serial_number')
                 <div class="text-danger">{{ $message }}</div>
              @enderror
              </div>
              <br>
            
              <label for="category_id"><b>category_id</b></label>
              <select name="category_id" id="cars" multiple>

                @foreach ($category as $category)
                <option value="{{$category->id}}" >{{$category->name}}</option>
                @endforeach
              </select>

            <div class="col-12">
              <label for="inputEmail4" class="form-label">Description</label>
              <textarea cols="30" rows="4" type="text" class="form-control" id="inputEmail4" name="description" class="@error('description') is-invalid @enderror">{{$product->description}}</textarea>
              @error('description')
                <div class="text-danger">{{ $message }}</div>
              @enderror
                <br>


            <div class="text-center">
              <button type="submit" class="btn btn-info">update</button>
            </div>
          </form>

@endsection