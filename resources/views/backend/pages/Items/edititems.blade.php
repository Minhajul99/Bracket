@extends('backend.mastertemplate.template')

@section('content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
            <h4>Edit Items</h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>

    </div><!-- br-pagetitle -->

    <div class="br-pagebody">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-base p-3 bd-0 overflow-hidden">
                    <form action="{{ Route('items.update', $items->id) }} " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="item_code">Item Code</label>
                                    <input type="text" readonly placeholder="Enter Item ode" class="form-control" name="item_code"
                                        id="item_code" value="{{ $items->item_code }}">
                                    <span class="text-danger">
                                        @error('item_code')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="name">Item Name</label>
                                    <input type="text" placeholder="Enter Item Name" class="form-control" name="name"
                                        id="name" value="{{ $items->name }}">
                                    <span class="text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea type="text" placeholder="Enter Item Description" class="form-control" rows="4" name="des"
                                        id="des">{{ $items->des }}</textarea>
                                    <span class="text-danger">
                                        @error('des')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="name">Enter Quantity</label>
                                    <input type="text" placeholder="Quantity of Items" class="form-control" name="quantity"
                                        id="quantity" value="{{ $items->quantity }}">
                                    <span class="text-danger">
                                        @error('quantity')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="name">Buy Price</label>
                                    <input type="text" placeholder="Buying Price of Items" class="form-control" name="buyprice"
                                        id="buyprice" value="{{ $items->buyprice }}">
                                    <span class="text-danger">
                                        @error('buyprice')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="name">Sell Price</label>
                                    <input type="text" placeholder="Price of Items" class="form-control" name="sellprice"
                                        id="sellprice" value="{{ $items->sellprice }}">
                                    <span class="text-danger">
                                        @error('sellprice')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <img height="100" src="{{ asset('backend/items/' . $items->pic) }}" alt="">
                                    <label for="image">Item Thumnail Images</label>
                                    <input type="file" placeholder="Upload Image" class="form-control" name="image"
                                        id="image">
                                    <span class="text-danger">
                                        @error('image')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

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
                                    <button class="form-control btn btn-info">Update Item</button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                @foreach ($galleries as $gallery )
                                <div class="row m-3 border ">
                                   <a href="{{Route('items.gallery_delete.delete',$gallery->id)}}"> <i class="fas fa-times"></i></a>
                                    <div class="images text-center m-auto">
                                        <img height="160" src="{{asset('backend/items/gallery/'.$gallery->gallery_pic)}}" alt="">
                                    </div>
                                    <h3>{{$gallery->id}}</h3>
                                </div>

                                @endforeach
                            </div>
                        </div>
                    </form>
                </div><!-- card -->
            </div> <!-- col-12 -->
        </div><!-- row -->
    </div><!-- br-pagebody -->
@endsection
