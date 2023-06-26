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
            <h3 class="mb-4">FEATURES & FACILITIES</h3>
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Features</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-toggle="modal" data-target="#feature-s">
                            <i class="fa-solid fa-plus"></i>ADD
                        </button>
                    </div>

                    <div class="table-responsive-md" style="height: 450px; overflow-y:scroll;">
                        <table class="table table-hover border">
                            <thead class="sticky-top">
                            <tr class="bg-dark text-light">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($features as $feature)
                                <tr>
                                    <td>{{$index = $index+1}}</td>
                                    <td>{{$feature->name}}</td>
                                    <td>
                                        <form action="{{ route('features.destroy', $feature->id) }}" method="POST">
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

    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overlow-hidden">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Facilities</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-toggle="modal" data-target="#facilities-s">
                            <i class="fa-solid fa-plus"></i>ADD
                        </button>
                    </div>

                    <div class="table-responsive-md" style="height: 450px; overflow-y:scroll;">
                        <table class="table table-hover border">
                            <thead class="sticky-top">
                            <tr class="bg-dark text-light">
                                <th scope="col">#</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($facilities as $facility)
                                    <tr>
                                        <td>{{$index2 = $index2+1}}</td>
                                        <td><img src="{{ asset('upload/'. $facility->icon) }}" alt="Facility Icon" width="50px"></td>
                                        <td>{{$facility->name}}</td>
                                        <td>{{$facility->description}}</td>
                                        <td>
                                            <form action="{{ route('facilities.destroy', $facility->id) }}" method="POST">
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

{{--    Modal form Features--}}

    <div class="modal fade" id="feature-s" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content w-75">
                <form method="POST" action="facilities/featureSubmit">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title text-body" id="staticBackdropLabel">Add Feature</h5>
                        <button type="reset" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Name</label>
                            <input type="text" class="form-control shadow-none" id="feature_name" name="name" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn bg-primary text-white shadow-none">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

{{--    Modal Form Facilities--}}

    <div class="modal fade" id="facilities-s" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content w-75">
                <form method="POST" action="facilities/facilitySubmit" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title text-body" id="staticBackdropLabel">Add Facility</h5>
                        <button type="reset" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Name</label>
                            <input type="text" class="form-control shadow-none" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Icon</label>
                            <input type="file" name="icon" accept=".svg" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Description</label>
                            <input type="text" class="form-control shadow-none" name="description" required>
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
