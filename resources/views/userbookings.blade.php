<x-layout>

    <div class="container-fluid" style="margin-left: 100px;">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overlow-hidden">
                <h3 class="mb-4">BOOKINGS</h3>
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover border">
                                <thead class="sticky-top">
                                <tr class="bg-dark text-light">
                                    <th scope="col">#</th>
                                    <th scope="col">Room Name</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Check-In</th>
                                    <th scope="col">Check-Out</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($bookings as $booking)
                                    <tr>
                                        <td>{{$index=$index+1}}</td>
                                        <td>{{$booking->room_name}}</td>
                                        <td>{{$booking->user_name}}</td>
                                        <td>{{$booking->phone}}</td>
                                        <td>{{$booking->address}}</td>
                                        <td>{{$booking->checkin}}</td>
                                        <td>{{$booking->checkout}}</td>
                                        <td>{{$booking->amount}}</td>
                                        <td>
                                            @if($booking->payment_status == "Pending")
                                                <button class="btn btn-sm btn-warning">{{$booking->payment_status}}</button>
                                            @elseif($booking->payment_status == "Canceled")
                                                <button class="btn btn-sm btn-danger">{{$booking->payment_status}}</button>
                                            @else
                                                <button class="btn btn-sm btn-success">{{$booking->payment_status}}</button>
                                            @endif
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
    </div>

</x-layout>
