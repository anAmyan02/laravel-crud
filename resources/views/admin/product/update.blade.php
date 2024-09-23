<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Edit Product</h1>
                    <hr />
                    <form action="{{ route('admin/products/update', $products->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Category</label>
                                <input type="text" name="category" class="form-control" placeholder="Category" value="{{$products->category}}">
                                @error('category')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Product Name</label>
                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{$products->title}}">
                                @error('title')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Description</label>
                                <input type="text" name="desc" class="form-control" placeholder="Product Description" value="{{$products->desc}}">
                                @error('price')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Image</label>
                                <input type="text" name="photo" class="form-control" placeholder="Product Image" value="{{$products->photo}}">
                                @error('photo')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="d-grid">
                                <button class="btn btn-warning">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>