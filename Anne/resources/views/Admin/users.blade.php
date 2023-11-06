@extends('Admin.master')
        @section('content')
        <div>
            <div class="main">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row1">
                                <div class="col-xs-6">
                                    <h2>Manage <b>Users</b></h2>
                                </div>
                                <div class="col-xs-6">
                                    <!-- Add buttons for managing users, such as adding a new user or deleting users -->
                                    {{-- <a href="#addUserModal" class="btn" data-toggle="modal" style="background: #4e4032">
                                        <i class="material-icons">&#xE147;</i> <span>Add New User</span>
                                    </a> --}}
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
                                    <th>Email</th>
                                    <th>User Type</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>created at</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="checkbox{{ $user->id }}" name="options[]" value="{{ $user->id }}">
                                            <label for="checkbox{{ $user->id }}"></label>
                                        </span>
                                    </td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>

                                    <td>
                                        @if($user->usertype == 1)
                                            Admin
                                        @else
                                            User
                                        @endif
                                    </td>

                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>{{ $user->created_at}}</td>
                                    <td>
                                        <a href="#editUserModal{{ $user->id }}" class="edit" data-toggle="modal">
                                            <i class="material-icons" data-toggle="tooltip" title="Edit" style="color: rgb(137, 116, 69)">&#xE254;</i>
                                        </a>

                                        <a href="#deleteUserModal{{ $user->id }}" class="delete" data-toggle="modal">
                                            <i class="material-icons" data-toggle="tooltip" title="Delete" style="color: rgb(138, 22, 22)">&#xE872;</i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="clearfix">
                            {{ $users->links() }}
                        </div>
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

<!-- edit.blade.php -->
@foreach($users as $user)

<div id="editUserModal{{ $user->id }}" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{ route('updateuser', $user->id) }}">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Edit User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                <div class="modal-body">
                    <!-- Add form fields for editing user information -->
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                    </div>
                    <div class="form-group">
                        <label>phone</label>
                        <input type="phone" name="phone" class="form-control" value="{{ $user->phone }}" required>
                    </div>
                    <div class="form-group">
                        <label>address</label>
                        <input type="text" name="address" class="form-control" value="{{ $user->address }}" required>
                    </div>
                    <div class="form-group">
                        <label>User Type</label>


                        <select name="usertype" class="form-control" style="border: 1px solid #dddddd">
                            <option>Role  ▼</option>
                            <option value="0" {{ $user->usertype === 0 ? 'selected' : '' }}>User</option>
                            <option value="1" {{ $user->usertype === 1 ? 'selected' : '' }}>Admin</option>
                        </select>



                    </div>



                     </div>

                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="submit" class="btn btn-info">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endforeach

    {{-- @endforeach --}}
    <!-- Delete Modal HTML for each category -->
    {{-- @foreach($orders as $item)
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
    @endforeach --}}

</div>
</div>
</div>
@endsection
