@extends('Admin.master')

        @section('content')

        <div class="main">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row1">
                            <div class="col-xs-6">
                                <h2>Manage <b>orders</b></h2>
                            </div>
                            {{-- <div class="col-xs-6">
                                <a href="#deleteModal" class="btn" data-toggle="modal" style="background: rgb(138, 22, 22)">
                                    <i class="material-icons">&#xE15C;</i> <span>Delete</span>
                                </a>
                                <a href="#addOrderModal" class="btn" data-toggle="modal" style="background: #4e4032">
                                    <i class="material-icons">&#xE147;</i> <span>Add New Order</span>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                {{-- <th>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="selectAll" name="selectAll">
                                        <label for="selectAll"></label>
                                    </span>
                                </th> --}}
                                <th>Order ID</th>
                                <th>Customer ID</th>
                                <th>Order Date</th>
                                <th>Total Amount</th>
                                <th>City</th>
                                <th>Shipping Address</th>
                                <th>Payment Method</th>
                                <th>Order Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                {{-- <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox{{ $order->OrderID }}" name="options[]" value="{{ $order->OrderID }}">
                                        <label for="checkbox{{ $order->OrderID }}"></label>
                                    </span>
                                </td> --}}
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->UserID }}</td>
                                <td>{{ $order->OrderDate }}</td>
                                <td>{{ $order->TotalAmount }}</td>
                                <td>{{ $order->City }}</td>
                                <td>{{ $order->ShippingAddress }}</td>
                                <td>{{ $order->PaymentMethod }}</td>
                                <td>{{ $order->OrderStatus }}</td>
                                <td>
                                    <a href="#" class="edit" data-toggle="modal" data-target="#editOrderModal{{ $order->id }}">
                                        <i class="material-icons" data-toggle="tooltip" title="Edit" style="color: rgb(137, 116, 69)">&#xE254;</i>
                                    </a>
                                    <a href="#deleteModal{{ $order->id }}" class="delete" data-toggle="modal">
                                        <i class="material-icons" data-toggle="tooltip" title="Delete" style="color: rgb(138, 22, 22)">&#xE872;</i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="clearfix">
                        {{ $orders->links() }}
                    </div>
                </div>
            </div>
        </div>

    <!-- add Modal HTML -->
    {{-- <div id="addProductModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST"  >
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Add Product</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="ProductName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="Description" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="Price" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Category ID</label>
                            <input type="text" name="CategoryID" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Stock Quantity</label>
                            <input type="text" name="StockQuantity" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="ImageURL" accept="image/*" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Style</label>
                            <input type="text" name="style" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

   <!-- Edit Order Modal -->
   @foreach($orders as $order)
   <div id="editOrderModal{{ $order->id }}" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('updateorder', ['id' => $order->id]) }}" enctype="multipart/form-data">                @csrf
                @csrf

                <div class="modal-header">
                    <h4 class="modal-title">Edit Order</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Customer ID</label>
                        <input type="text" name="UserID" class="form-control" value="{{ $order->UserID }}" required>
                    </div>
                    <div class="form-group">
                        <label>Order Date</label>
                        <input type="text" name="OrderDate" class="form-control" value="{{ $order->OrderDate }}" required>
                    </div>
                    <div class="form-group">
                        <label>Total Amount</label>
                        <input type="text" name="TotalAmount" class="form-control" value="{{ $order->TotalAmount }}" required>
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" name="City" class="form-control" value="{{ $order->City }}" required>
                    </div>
                    <div class="form-group">
                        <label>Shipping Address</label>
                        <input type="text" name="ShippingAddress" class="form-control" value="{{ $order->ShippingAddress }}" required>
                    </div>
                    <div class="form-group">
                        <label>Payment Method</label>
                        <input type="text" name="PaymentMethod" class="form-control" value="{{ $order->PaymentMethod }}" required>
                    </div>
                    <div class="form-group">
                        <label>Order Status</label>
                        <input type="text" name="OrderStatus" class="form-control" value="{{ $order->OrderStatus }}" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="submit" class="btn btn-info">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

    @endforeach
    <!-- Delete Modal HTML for each category -->
    @foreach($orders as $item)
    <div id="deleteModal{{ $item->id }}" class="modal fade">
        <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('deleteorder', ['id' => $item->id]) }}" >
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <div class="modal-header">
                    <h4 class="modal-title">Delete Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" value="Delete">
                </div>
            </form>
        </div>
        </div>
        </div>
    @endforeach

</div>
</div>
</div>
@endsection
