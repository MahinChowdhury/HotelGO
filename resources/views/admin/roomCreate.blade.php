<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Facilities</title>
    @include('partials._links')
</head>
<body class="bg-white">

@include('partials._sidebar');

<div class="container-fluid" style="margin-left: 200px;">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overlow-hidden">
            <h3 class="mb-4">ROOMS</h3>
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">

                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Created Rooms</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-toggle="modal" data-target="#add-room">
                            <i class="fa-solid fa-plus"></i>ADD
                        </button>
                    </div>

                    <div class="table-responsive-md" style="height: 450px; overflow-y:scroll;">
                        <table class="table table-hover border">
                            <thead class="sticky-top">
                            <tr class="bg-dark text-light">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Area</th>
                                <th scope="col">Guests</th>
                                <th scope="col">Category</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rooms as $room)
                                <tr>
                                    <td>{{$index = $index + 1}}</td>
                                    <td>{{$room->name}}</td>
                                    <td><img src="{{ asset('upload/rooms/'. $room->img) }}" width="40px"></td>
                                    <td>{{$room->area}}</td>
                                    <td>{{$room->guests}}</td>
                                    <td>{{$room->category}}</td>
                                    <td>{{$room->price}}</td>
                                    <td>{{$room->quantity}}</td>
                                    <td>
                                        <form action="{{ route('rooms.destroy', $room->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    Modal form--}}

    <div class="modal fade" id="add-room" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content w-75">
                <form method="POST" action="rooms/roomSubmit" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title text-body" id="staticBackdropLabel">Add Room</h5>
                        <button type="reset" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label fw-bold">Name</label>
                                <input type="text" class="form-control shadow-none" name="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label fw-bold">Area(sqft)</label>
                                <input type="number" class="form-control shadow-none" name="area" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label fw-bold">Guests</label>
                                <input type="number" class="form-control shadow-none" name="guests" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label fw-bold">Price</label>
                                <input type="number" class="form-control shadow-none" name="price" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label fw-bold">Quantity</label>
                                <input type="number" class="form-control shadow-none" name="quantity" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label mt-4 mb-2 fw-bold">Category</label>
                                <select name="category" class="ml-3 mt-3 mb-2 p-2">
                                    <option value="small">Small</option>
                                    <option value="medium">Medium</option>
                                    <option value="deluxe">Deluxe</option>
                                </select>
                                <br>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Image</label>
                                <input type="file" name="image" accept=".jpg , .png , .jpeg" class="form-control shadow-none">
                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Features</label>
                                <div class="row ml-3 mb-1">
                                    @foreach($features as $feature)
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="features[]" value="{{$feature->id}}" class="form-check-input shadow-none"
                                                @if(isset($selectedFeatured) && in_array($feature->id, $selectedFeatured)) checked @endif>
                                                {{$feature->name}}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Facilities</label>
                                <div class="row ml-3 mb-1">
                                    @foreach($facilities as $facility)
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="facilities[]" value="{{$facility->id}}" class="form-check-input shadow-none"
                                                       @if(isset($selectedFacilities) && in_array($facility->id, $selectedFacilities)) checked @endif>
                                                {{$facility->name}}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Description</label>
                                <textarea name="description" rows="4" class="form-control shadow-none" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn bg-primary text-white shadow-none">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
