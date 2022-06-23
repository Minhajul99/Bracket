@extends('backend.mastertemplate.template')

@section('content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
            <h4>Items</h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>

    </div><!-- br-pagetitle -->

    <div class="br-pagebody">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-base p-3 bd-0 overflow-hidden">
                    <form action="{{ Route('items.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="item_code">Select Category</label>
                                    <select name="item_code" id="item_code" placeholder="Select Category" class="form-control">
                                        <option value="">-----Select Category-----</option>
                                        @foreach ($subcats as $subcat)
                                        <option value="{{$subcat->id}}">{{$subcat->subCatName}}</option>
                                        @endforeach
                                    </select>

                                    <span class="text-danger">
                                        @error('item_code')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="name">Item Name</label>
                                    <input type="text" placeholder="Enter Item Name" class="form-control" name="name"
                                        id="name" value="{{ old('name') }}">
                                    <span class="text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea type="text" placeholder="Enter Item Description" class="form-control" rows="4" name="des" id="des">{{ old('des') }}</textarea>
                                    <span class="text-danger">
                                        @error('des')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="image">Item Thumnail Images</label>
                                    <input type="file" placeholder="Upload Image" class="form-control" name="image"
                                        id="image">
                                    <span class="text-danger">
                                        @error('image')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-6">


                                <div class="form-group">
                                    <label for="gallery">Item Gallery Images</label>
                                    <input type="file" class="form-control" name="gallery[]" id="gallery" multiple>
                                    <span class="text-danger">
                                        @error('gallery')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="name">Enter Quantity</label>
                                    <input type="text" placeholder="Quantity of Items" class="form-control" name="quantity"
                                        id="quantity" value="{{ old('quantity') }}">
                                    <span class="text-danger">
                                        @error('quantity')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="name">Buy Price</label>
                                    <input type="text" placeholder="Buying Price of Items" class="form-control" name="buyprice"
                                        id="buyprice" value="{{ old('buyprice') }}">
                                    <span class="text-danger">
                                        @error('buyprice')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="name">Sell Price</label>
                                    <input type="text" placeholder="Price of Items" class="form-control" name="sellprice"
                                        id="sellprice" value="{{ old('sellprice') }}">
                                    <span class="text-danger">
                                        @error('sellprice')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="">-----Select Status-----</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>
                                </div> --}}

                                <div class="form-group">
                                    <button class="form-control btn btn-info">Add Item</button>
                                </div>
                            </div>
                        </div>
                    </form>


                </div><!-- card -->
            </div> <!-- col-12 -->
        </div><!-- row -->
    </div><!-- br-pagebody -->
@endsection
