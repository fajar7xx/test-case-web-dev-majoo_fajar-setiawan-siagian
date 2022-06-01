@extends('layouts.admin')

@section('title', 'Add Product')

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
                <li class="breadcrumb-item" aria-current="page">Products</li>
                <li class="breadcrumb-item active" aria-current="page">Add</li>
            </ol>
        </nav>
        <h2 class="h4">Add Product</h2>
    </div>
</div>

<div class="row">
    <div class="col-12 col-xl-12 col-md-12">
        <div class="card card-body border-0 shadow mb-4">
            {{-- <h2 class="h5 mb-4">General information</h2> --}}
            <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="name">Product Name</label>
                            <input class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" type="text" placeholder="Enter name" value="{{old('name')}}"
                                required>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="category">Product category</label>
                            <select name="category" id="category" class="form-control @error('category') is-invalid @enderror"">
                                <option value="">select category</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="price">Product price</label>
                            <input class="form-control @error('price') is-invalid @enderror" id="price"
                                name="price" type="text" placeholder="Enter price" value="{{old('price')}}"
                                required>
                            @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    {{-- <div class="col-md-6 mb-3">
                        <label for="gender">Gender</label>
                        <select class="form-select mb-0" id="gender" aria-label="Gender select example">
                            <option selected>Gender</option>
                            <option value="1">Female</option>
                            <option value="2">Male</option>
                        </select>
                    </div> --}}
                </div>
                {{-- <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" type="email" placeholder="name@company.com" required>
                        </div>
                    </div>

                </div> --}}
                {{-- <h2 class="h5 my-4">Location</h2> --}}
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <div class="form-group">
                            <label for="descriptiion">Description</label>
                           <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('price') is-invalid @enderror">{!! old('description') !!}</textarea>
                           @error('description')
                           <div class="invalid-feedback">
                               {{ $message }}
                           </div>
                           @enderror
                        </div>
                    </div>
                    {{-- <div class="col-sm-3 mb-3">
                        <div class="form-group">
                            <label for="number">Number</label>
                            <input class="form-control" id="number" type="number" placeholder="No." required>
                        </div>
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="image">product image</label>
                            <input class="form-control" id="image" name="image" type="file" required>
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    {{-- <div class="col-sm-4 mb-3">
                        <label for="state">State</label>
                        <select class="form-select w-100 mb-0" id="state" name="state"
                            aria-label="State select example">
                            <option selected>State</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="zip">ZIP</label>
                            <input class="form-control" id="zip" type="tel" placeholder="ZIP" required>
                        </div>
                    </div> --}}
                </div>
                <div class="mt-3">
                    <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('css')
    <link rel="stylesheet" href="{{asset('modules/summernote/dist/summernote-bs4.min.css')}}">
@endpush

@push('scripts')
    <script src="{{asset('modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('modules/summernote/dist/summernote.min.js')}}"></script>
    <script>
        $(() =>{
            $('#description').summernote({
                tabsize: 2,
                height: 200
            })
        })
    </script>
@endpush
