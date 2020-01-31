@extends('layouts.main')

@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endforeach
    @endif

    <h1>Students - Edit page</h1>
    <br>

    <!-- Default form register -->
    <form class="text-center border border-light p-5" action="{{ route('student_update', $student->id) }}" method="POST">
        {{ csrf_field() }}
        <p class="h4 mb-4">Add Student</p>
        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input type="text" id="defaultRegisterFormFirstName" name="first_name" class="form-control" value="{{ $student->first_name }}" placeholder="First name">
            </div>
            <div class="col">
                <!-- Last name -->
                <input type="text" id="defaultRegisterFormLastName" name="last_name" class="form-control" value="{{ $student->last_name }}" placeholder="Last name">
            </div>
        </div>
        <!-- E-mail -->
        <input type="email" id="defaultRegisterFormEmail" name="email" class="form-control mb-4" value="{{ $student->email }}" placeholder="E-mail">
        <!-- Phone number -->
        <input type="text" id="defaultRegisterPhonePassword" name="phone" class="form-control" value="{{ $student->phone }}" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
        <!-- Sign up button -->
        <button class="btn btn-info my-4 btn-block" type="submit">Update Data</button>
    </form>
    <!-- Default form register -->
    <br><br>
@endsection
