@extends('seller.layouts.layout')
@section('seller_page_title')
Create New Store
@endsection

@section('seller_layout')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Create New Store</h5>
            </div>
            <div class="card-body">
                {{-- have any error show below --}}           
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
           @endif
     
           {{-- this below function for success message --}}
            @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
              <form action="{{route('create.store')}}" method="POST">
                  @csrf
                  <label for="store_name" class="fw-bold mb-2">Give Name of Your Store</label>
                  <input type="text" class="form-control" name="store_name" placeholder="Shadhin Store">

                  <label for="details" class="fw-bold mb-2">Description Of Your Store</label>
                 <textarea name="details" id="details" cols="30" rows="10" class="form-control"></textarea>

                  <label for="slug" class="fw-bold mb-2">Slug</label>
                  <input type="text" class="form-control" name="slug" placeholder="shadhin-store">

                  {{-- <label for="user_id" class="fw-bold mb-2">Give Name of Your Store</label>
                  <input type="text" class="form-control" name="user_id" placeholder="Shadhin Store"> --}}


                  <button type="submit" class="btn btn-primary w-100 mt-2">Create Store</button>
              </form>
            </div>
        </div>
    </div>
</div>
    
@endsection
