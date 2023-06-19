 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - User Queries</title>
    @include('partials._links')
</head>
<body class="bg-white">

@include('partials._sidebar');

<div class="container-fluid" style="margin-left: 200px;">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overlow-hidden">
            <h3 class="mb-4">USER QUERIES</h3>
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="table-responsive-md" style="height: 450px; overflow-y:scroll;">
                        <table class="table table-hover border">
                            <thead class="sticky-top">
                            <tr class="bg-dark text-light">
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                                <th scope="col">Date</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($queries as $query)
                                    <tr>
                                        <td>{{$query->name}}</td>
                                        <td>{{$query->email}}</td>
                                        <td>{{$query->subject}}</td>
                                        <td>{{$query->message}}</td>
                                        <td>{{$query->created_at}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
