@extends('layouts.admin')

@section('title', 'Products')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
        <h2 class="h4">All Products</h2>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="{{route('products.create')}}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            New Products
        </a>
    </div>
</div>

@include('components.alert')

<div class="card card-body border-0 shadow table-wrapper table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="border-gray-200">Image</th>
                <th class="border-gray-200">Name</th>
                <th class="border-gray-200">Category</th>
                <th class="border-gray-200">Price</th>
                <th class="border-gray-200">Description</th>
                <th class="border-gray-200">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td><img src="{{asset('storage/'.$product->image)}}" class="img-fluid lazy" width="120px"></td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>Rp. {{$product->price}}</td>
                    <td>{!!\Str::limit($product->description, 20)!!}</td>
                    <td class="">
                        <a href="{{route('products.edit', $product)}}" class="btn btn-info btn-sm">Edit</a>
                        <a href="{{route('products.show', $product)}}" class="btn btn-success btn-sm">Detail</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="100%" class="text-center">No Data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
        {{$products->links()}}
    </div>
</div>
@endsection
