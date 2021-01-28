@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-info mb-3">
                <div class="card-header">
                    <hr class="my-4">
                    <h4 class="row justify-content-center">Verified Census Records</h4>
                    <hr class="my-4">
                    <div align="right">
                    <form action="searchVerified" method='GET'>
                        @csrf
                        <input type="text" name='searcVerified' placeholder="Search Record">
                        <input type="submit" name='searchVerified' class="btn-primary">
                    </form>
                    </div>  
                </div>
                <div class="table-responsive" style="margin-right:20px; margin-left:20px;">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                            <td scope="col">Record No.</td>
                            <td scope="col">Head of Household</td>
                            <td scope="col">Address</td>
                            </tr>
                        </thead>
                        <tbody>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if(!empty($records))
                            @foreach($records as $value)
                    <tr>
                        <td>{{$value['record_id']}}</td>
                        <td>{{$value['lname']}}, {{$value['fname']}}</td>
                        <td>{{$value['address']}}</td>
                        <td><a href="/censusRecord/{{$value['record_id']}}">View</td>
                        <td>
                            <form action="census-delete" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$value['id']}}">
                            <input type="submit" value="Delete" class="btn-danger">
                            </form>
                        </td>
                    </tr>
                            @endforeach

                        @endif
                    </div>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

@endsection