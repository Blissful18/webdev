@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <hr class="my-4">
                    <h4 class="row justify-content-center">New Census Records</h4>
                    <hr class="my-4">
                </div>
                <div class="container">
                <div class="form-group">
                    <form action="new-rec" method='POST'>
                    @csrf
                        <input type="hidden" name="record" value="0">
                        <div class="form-row">
                            <div class="col"><br>
                                <label for="formGroupExampleInput">First Name:</label>
                                <input type="text" class="form-control" name="fname" placeholder="First Name">
                            </div>
                            <div class="col"><br>
                                <label for="civilStatus">Last Name:</label>
                                <input type="text" class="form-control" name="lname" placeholder="Last Name">
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="civilStatus">Age:</label>
                                <input type="number" class="form-control" name="age" placeholder="Age">
                            </div>
                            <div class="col">
                                <label for="gender">Gender:</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="civilStatus">Civil Status:</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="female">Date of Birth:</label>
                                <input type="date" class="form-control" name="dateOfBirth">
                            </div>
                            <div class="col">
                                <label for="role">Household Role:</label>
                                <select class="form-control" name="role" id="role">
                                    <option value="Head">Head</option>
                                    <option value="Member">Member</option>
                                </select>
                            </div>
                        </div><br>
                        <label for="educational">Highest Educational Attainment:</label>
                        <input type="text" class="form-control" name="educational" placeholder="Educational Attainment"><br>
                        <label for="sourceOfIncome">Annual Income</label>
                        <input type="number" class="form-control" name="sourceOfIncome" placeholder="Annual Income"><br>
                        <label for="add">Address:</label>
                        <input type="text" class="form-control" name="add" placeholder="Address">
                        <br>
                        <input type="submit" name="newRecSubmit" class="btn btn-primary">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</div>
@endsection