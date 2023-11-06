@extends('Admin.master')

@section('content')
<div class="main">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row1">
                    <div class="col-xs-6">
                        <h2>Search result</h2>
                    </div>
                </div>
            </div>
            <div >
                
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
                            <th>CategoryID</th>
                            <th>Stock Quantity</th>
                            <th>Image</th>
                            <th>Style</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($searchproduct as $item)
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
                            <td>{{ $item->CategoryID }}</td>
                            <td>{{ $item->StockQuantity }}</td>

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
                {{ $searchproduct->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
