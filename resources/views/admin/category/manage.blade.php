@extends('admin.layouts.layout')
@section('admin_page_title')
Manage category
@endsection

@section('admin_layout')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">All Category</h5>
            </div>

            @if(session('message'))
            <div class="alert alert-success my-2">
                {{session('message')}}
            </div>
            @endif

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $cat)
                            <tr>
                                <td>{{$cat->id}}</td>
                                <td>{{$cat->category_name}}</td>
                                <td>
                                    <a href="{{route('show.cat', $cat->id)}}" class="btn btn-info">Edit</a>
                               <form action="{{route('delete.cat', $cat->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form> 
                            </tr>
                        </td>
                            @endforeach
                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



{{-- <div class="col-12 col-lg-8 col-xxl-9 d-flex">
    <div class="card flex-fill">
        <div class="card-header">

            <h5 class="card-title mb-0">Latest Projects</h5>
        </div>
        <table class="table table-hover my-0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th class="d-none d-xl-table-cell">Start Date</th>
                    <th class="d-none d-xl-table-cell">End Date</th>
                    <th>Status</th>
                    <th class="d-none d-md-table-cell">Assignee</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Project Apollo</td>
                    <td class="d-none d-xl-table-cell">01/01/2023</td>
                    <td class="d-none d-xl-table-cell">31/06/2023</td>
                    <td><span class="badge bg-success">Done</span></td>
                    <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                </tr>
                <tr>
                    <td>Project Fireball</td>
                    <td class="d-none d-xl-table-cell">01/01/2023</td>
                    <td class="d-none d-xl-table-cell">31/06/2023</td>
                    <td><span class="badge bg-danger">Cancelled</span></td>
                    <td class="d-none d-md-table-cell">William Harris</td>
                </tr>
                <tr>
                    <td>Project Hades</td>
                    <td class="d-none d-xl-table-cell">01/01/2023</td>
                    <td class="d-none d-xl-table-cell">31/06/2023</td>
                    <td><span class="badge bg-success">Done</span></td>
                    <td class="d-none d-md-table-cell">Sharon Lessman</td>
                </tr>
                <tr>
                    <td>Project Nitro</td>
                    <td class="d-none d-xl-table-cell">01/01/2023</td>
                    <td class="d-none d-xl-table-cell">31/06/2023</td>
                    <td><span class="badge bg-warning">In progress</span></td>
                    <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                </tr>
                <tr>
                    <td>Project Phoenix</td>
                    <td class="d-none d-xl-table-cell">01/01/2023</td>
                    <td class="d-none d-xl-table-cell">31/06/2023</td>
                    <td><span class="badge bg-success">Done</span></td>
                    <td class="d-none d-md-table-cell">William Harris</td>
                </tr>
                <tr>
                    <td>Project X</td>
                    <td class="d-none d-xl-table-cell">01/01/2023</td>
                    <td class="d-none d-xl-table-cell">31/06/2023</td>
                    <td><span class="badge bg-success">Done</span></td>
                    <td class="d-none d-md-table-cell">Sharon Lessman</td>
                </tr>
                <tr>
                    <td>Project Romeo</td>
                    <td class="d-none d-xl-table-cell">01/01/2023</td>
                    <td class="d-none d-xl-table-cell">31/06/2023</td>
                    <td><span class="badge bg-success">Done</span></td>
                    <td class="d-none d-md-table-cell">Christina Mason</td>
                </tr>
                <tr>
                    <td>Project Wombat</td>
                    <td class="d-none d-xl-table-cell">01/01/2023</td>
                    <td class="d-none d-xl-table-cell">31/06/2023</td>
                    <td><span class="badge bg-warning">In progress</span></td>
                    <td class="d-none d-md-table-cell">William Harris</td>
                </tr>
            </tbody>
        </table>
    </div>
</div> --}}