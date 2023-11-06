@extends('Admin.master')
        @section('content')
<div >
    <div class="main">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row1">
                        <div class="col-xs-6">
                            <h2>Manage <b>Categories</b></h2>
                        </div>
                        <div class="col-xs-6">
                            <a href="#deleteModal" class="btn" data-toggle="modal" style="background: rgb(138, 22, 22)">
                                <i class="material-icons">&#xE15C;</i> <span>Delete</span>
                            </a>
                            <a href="#addModal" class="btn" data-toggle="modal" style="background: #4e4032">
                                <i class="material-icons">&#xE147;</i> <span>Add New Category</span>
                            </a>
                        </div>
                    </div>
                </div>
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
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $item)
                        <tr>
                            <td>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox{{ $item->id }}" name="options[]" value="{{ $item->id }}">
                                    <label for="checkbox{{ $item->id }}"></label>
                                </span>
                            </td>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->category_name }}</td>
                            <td><img src="images/{{ $item->category_image }}" alt="{{ $item->category_name }}"></td>
                            <td>
                                <a href="#editModal{{ $item->id }}" class="edit" data-toggle="modal">
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
                <div class="clearfix">
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- add Modal HTML -->
    <div id="addModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST"  >
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Add Category</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="category_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="category_image" accept="image/*" class="form-control" required>
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
    @foreach($categories as $item)
    <div id="editModal{{ $item->id }}" class="modal fade">
        <div class="modal-dialog">
        <div class="modal-content">
        <form method="POST" action="{{ route('updateCategory', ['id' => $item->id]) }}" enctype="multipart/form-data">
        @csrf
        <div class="modal-header">
            <h4 class="modal-title">Edit Category</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="category_name" class="form-control" value="{{ $item->category_name }}" required>
            </div>
            <div class="form-group">
                <label>Current Image</label>
                <img src="images/{{ $item->category_image }}" alt="{{ $item->category_name }}" width="100">
                <input type="hidden" name="original_category_image" value="{{ $item->category_image }}">
            </div>
            <div class="form-group">
                <label>New Image </label>
                <input type="file" name="category_image" accept="image/*" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" style="background: #4e4032">Cancel</button>
            <button type="submit" class="btn" style="background: #4e4032">Edit</button>
        </div>
        </form>
        </div>
        </div>
        </div>
    @endforeach
    <!-- Delete Modal HTML for each category -->
    @foreach($categories as $item)
    <div id="deleteModal{{ $item->id }}" class="modal fade">
        <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('deleteCategory', ['id' => $item->id]) }}" >
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
    @foreach($categories as $item)
    <div id="deleteModal" class="modal fade">
        <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('deleteItems') }}">
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
