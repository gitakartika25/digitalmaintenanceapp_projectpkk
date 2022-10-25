@extends('master.index')

@section('title', 'dashboard')

@section('content')
<h1>Data User</h1>


<div class="col-lg-12 grid-margin stretch-card">

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tabel data user</h4>
        <a href="{{ url('userCRUD/create') }}" class="btn btn-primary">Add User</a>
        
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                            
                            <th>Id</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>password</th>
                            <th>address</th>
                            <th>telephone</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $d)
              <tr>
                <td> <img src="{{ asset('storage/'.$d->image) }}" alt="">
                
                </td>
                <td> {{ $d->id }}</td>
                <td> {{ $d->photo }}</td>
                <td> {{ $d->name }}</td>
                <td> {{ $d->email }}</td>
                <td> {{ $d->password }}</td>
                <td> {{ $d->address }}</td>
                <td> {{ $d->telephone }}</td>
                <td class="">
                    <div class="d-flex align-items-center list-user-action">
                        <a class="btn btn-sm btn-icon btn-primary py-2"
                        href="{{ url('user/' . $d->id . '/edit') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path
                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                    </svg>
                </a>
                <a>
                    <form action="{{ route('user.destroy', $d->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-icon btn-danger mx-3"
                        onclick="return confirm('Are you sure you want to delete this item ?')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path
                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                        <path fill-rule="evenodd"
                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                    </svg>
                </button>
            </form>
        </a>
    </div>
</td>
<td scope="row">
    {{ $loop->iteration }}
</td>
<td> {{ $d->id }}</td>
<td> {{ $d->photo }}</td>
<td> {{ $d->name }}</td>
<td> {{ $d->email }}</td>
<td> {{ $d->password }}</td>
<td> {{ $d->address }}</td>
<td> {{ $d->telephone }}</td>
</tr>
@endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


  @endsection