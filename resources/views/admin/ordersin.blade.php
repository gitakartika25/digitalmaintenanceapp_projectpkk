@extends('master.index')
@section('title', 'Orders In')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Orders In</h4>

        {{-- <a href="{{ url('ordersin/create') }}" class="btn btn-primary">Add Orders</a> --}}


        <div class="table-responsive">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>No</th>
                        <th>Product</th>
                        <th>Customer</th>
                        <th>Quantity</th>
                        <th>Rent Date</th>
                        <th>Rturn Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orderin as $o)
                        <tr>
                            <td class="">
                                <div class="d-flex align-items-center list-user-action">
                                    {{-- @foreach ($transaction as $t)
                                        {{$t->id}}
                                    @endforeach --}}
                                    <form action="{{route('ordersin.update', $o->idt)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" value="{{Auth::user()->id}}" name="employ">
                                        <input type="hidden" value="selesai" name="status">
                                        <button class="btn btn-sm btn-icon btn-success py-2" type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td> {{ $o->product_name }}</td>
                            <td> {{ $o->name }}</td>
                            <td> {{ $o->quantity }}</td>
                            <td> {{ $o->rent_date }}</td>
                            <td> {{ $o->return_date }}</td>
                            <td> 
                                @if ($o->status == 'orderin')
                                    <label class="badge badge-warning">{{ $o->status }}</label>
                                @endif
                                @if($o->status == 'Panding')
                                    <label class="badge badge-danger">{{ $o->status }}</label>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection