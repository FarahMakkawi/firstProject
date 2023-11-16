@extends('layout.master')

@section('title','Laravel')

@section('content')

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Laravel CRUD</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Hello from HomeContoller</h6>

    <a href="{{route('product.index')}}" class="card-link">show products</a>
  </div>
</div>

@endsection

@section('footer')
<div>

  {{-- hello from footer  --}}

</div>
@endsection


