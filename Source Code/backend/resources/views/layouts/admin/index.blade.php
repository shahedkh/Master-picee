@extends('layouts.admin.app')
@section('content')
    {{-- Reservations --}}
    <div class="container-fluid pt-4 px-4">

        <div class="bg-light text-center rounded p-4">
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            {{-- <th scope="col"><input class="form-check-input" type="checkbox"></th> --}}
                            {{-- <th scope="col">Order ID</th> --}}
                            {{-- <th></th> --}}
                            <th scope="col">User Name</th>
                            <th scope="col">Movie</th>
                            <th scope="col">Seat Number</th>
                            <th scope="col">Day</th>
                            <th scope="col">Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($reservations as $reservation)
                                <td>{{ $reservation->user->name }}</td>
                                <td>{{ $reservation->movie->name }}</td>
                                <td>{{ $reservation->seat->seat_number }}</td>
                                <td>{{ $reservation->day }}</td>
                                <td>{{ $reservation->time }}</td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->
@endsection
