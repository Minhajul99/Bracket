@extends('backend.mastertemplate.template')

@section('content')

<div class="br-pagetitle">
  <i class="icon ion-ios-home-outline"></i>
  <div>
    <h4>Product Management</h4>
    <p class="mg-b-0">Manage your Product here</p>
  </div>

</div><!-- br-pagetitle -->

<div class="br-pagebody">
  <div class="row">
    <div class="col-md-12">
      <div class="card shadow-base bd-0 overflow-hidden">
        <table class="table">
          <thead>
            <tr>
              <th> #Sl </th>
              <th> Product Name </th>
              <th> Description </th>
              <th> Category </th>
              <th> Size </th>
              <th> Cost Price </th>
              <th> Sell Price </th>
              <th> Quantity </th>
              <th> Status </th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
            @php $sl=1; @endphp
            @foreach($products as $data)
            <tr>
            <td>{{ $sl}}</td>
             <td>{{ $data-> name}}</td>
             <td>{!! $data-> description!!}</td>
             <td>{{ $data-> category}}</td>
             <td>{{ $data-> size}}</td>
             <td>{{ $data-> costprice}}</td>
             <td>{{ $data-> sellprice}}</td>
             <td>{{ $data-> quantity}}</td>
             <td>
               @if($data-> status==1)
               <span class="badge badge-info">Active</span>
               @else
               <span class="badge badge-danger">Inactive</span>
               @endif
             </td>

             <td>
               <a href="{{Route('edit', $data->id)}}" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i></a>
               <button  class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{$data->id}}"> <i class="fa fa-trash"></i></button>
             </td>
            </tr>
            <!-- Modal For Delete -->
            <!-- Modal -->
<div class="modal fade" id="delete{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Confirmation Massage</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure want to delete this product?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="{{Route('delete',$data->id)}}" type="button" class="btn btn-danger">Confirm</a>
      </div>
    </div>
  </div>
</div>
            <!-- Modal For Delete end-->
            @php $sl++; @endphp
            @endforeach
          </tbody>
        </table>

      </div><!-- card -->
    </div> <!-- col-12 -->
  </div><!-- row -->
</div><!-- br-pagebody -->
@endsection
