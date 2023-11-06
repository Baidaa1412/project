@extends('Admin.master')
@section('content')
<div class="main">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row1">
                    <div class="col-xs-6">
                        <h2>Manage <b>products</b></h2>
                    </div>
                    <div class="col-xs-6">
                        <a href="#deleteModal" class="btn" data-toggle="modal" style="background: rgb(138, 22, 22)">
                            <i class="material-icons">&#xE15C;</i> <span>Delete</span>
                        </a>
                        <a href="#addProductModal" class="btn" data-toggle="modal" style="background: #4e4032">
                            <i class="material-icons">&#xE147;</i> <span>Add New Product</span>
                        </a>
                    </div>
                </div>            </div>
            <div  style="overflow-x: auto;">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll" name="selectAll">
                                    <label for="selectAll"></label>
                                </span>
                            </th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Discount Price</th>
                            <th>Category</th>
                            <th>Stock Quantity</th>
                            <th>Image</th>
                            <th>Style</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                       <tbody>
                        @foreach($products as $item)
                        <tr>
                            <td>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox{{ $item->id }}" name="options[]" value="{{ $item->id }}">
                                    <label for="checkbox{{ $item->id }}"></label>
                                </span>
                            </td>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->ProductName }}</td>
                            <td>{{ $item->Description }}</td>
                            <td>{{ $item->Price }} JD</td>
                            <td>{{ $item->DiscountPrice }} JD</td>
                            <td>{{ $item->category->category_name }}</td>
                            <td>{{ $item->StockQuantity}}</td>

                            <td><img src="images/{{ $item->ImageURL }}" alt="{{ $item->ProductName }}"></td>
                            <td>{{ $item->style }}</td>

                            <td>
                                <a href="#editProductModal{{ $item->id }}" class="edit" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip" title="Edit" style="color: rgb(137, 116, 69)">&#xE254;</i>
                                </a>

                                <a href="#deleteModal{{ $item->id }}" class="delete" data-toggle="modal">
                                    <i class="material-icons" data-toggle="tooltip" title="Delete" style="color: rgb(138, 22, 22)">&#xE872;</i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="clearfix">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>

    <!-- add Modal HTML -->
    <div id="addProductModal" class="modal fade">
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
                            <label>Discount Price</label>
                            <input type="text" name="DiscountPrice" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="CategoryID">Category</label>
                            <select name="CategoryID" id="CategoryID" class="form-control" required>
                                <option value="">Select a category</option>
                                @foreach ($categories as $category)
                                    <option style="color: black" value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
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
    </div>

    <!-- Edit Modal HTML for each category -->
    @foreach($products as $item)
    <div id="editProductModal{{ $item->id }}" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('updateProduct', ['id' => $item->id]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Product</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="ProductName" class="form-control" value="{{ $item->ProductName }}" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="Description" class="form-control" required>{{ $item->Description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="Price" class="form-control" value="{{ $item->Price }}" required>
                        </div>
                        <div class="form-group">
                            <label>Discount Price</label>
                            <input type="text" name="Price" class="form-control" value="{{ $item->DiscountPrice }}" required>
                        </div>

                        <div class="form-group">
                            <label for="CategoryID">Category</label>
                            <select name="CategoryID" id="CategoryID" class="form-control" required>
                                <option value="">Select a category</option>
                                @foreach ($categories as $category)
                                    <option style="color: black" value="{{ $category->id}}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Stock Quantity</label>
                            <input type="text" name="StockQuantity" class="form-control" value="{{ $item->StockQuantity }}" required>
                        </div>
                        <div class="form-group">
                            <label>Current Image</label>
                            <img src="images/{{ $item->ImageURL }}" alt="{{ $item->ProductName }}" width="100">
                            <input type="hidden" name="original_image" value="{{ $item->ImageURL }}">
                        </div>
                        <div class="form-group">
                            <label>New Image</label>
                            <input type="file" name="ImageURL" accept="image/*" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Style</label>
                            <input type="text" name="style" class="form-control" value="{{ $item->style }}" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endforeach
    <!-- Delete Modal HTML for each category -->
    @foreach($products as $item)
    <div id="deleteModal{{ $item->id }}" class="modal fade">
        <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('deleteProduct', ['id' => $item->id]) }}" >
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


