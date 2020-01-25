@extends("layouts.main")

@section('content')
    @if (session('successMsg'))
        <div class="alert alert-success" role="alert">
            {{ session('successMsg') }}
        </div>
    @endif
    <h1>Home Page</h1>
    <br>
    <table class="table">
        <thead class="black white-text">
        <tr class="text-center">
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <th scope="row">{{ $student->id }}</th>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>
                        <a href="{{ route('student_edit', $student->id) }}" class="btn btn-raised btn-sm btn-primary">Edit <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> ||
                        <a href="{{ route('student_delete', $student->id) }}" class="btn btn-raised btn-sm btn-danger">Delete <i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
