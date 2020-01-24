@extends("layouts.main")

@section('content')
    <h1>Students - Create page</h1>
    <br>

    <!-- Default form register -->
    <form class="text-center border border-light p-5" action="#!">
        <p class="h4 mb-4">Add Student</p>
        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
            </div>
            <div class="col">
                <!-- Last name -->
                <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
            </div>
        </div>
        <!-- E-mail -->
        <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">
        <!-- Phone number -->
        <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
        <!-- Sign up button -->
        <button class="btn btn-info my-4 btn-block" type="submit">Add Data</button>
    </form>
    <!-- Default form register -->
    <br><br>
@endsection
