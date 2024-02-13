@extends('crud.client.layouts.master')

@section('content')
    <div class="container">
        <div class="card" id="wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card-header">
                        <h2 class="card-title">Manage Client</h2>
                    </div>
    
                    <div class="card-body">
                        <div class="action-add pb-3">
                            <a href="{{ route('admin.add.create') }}" class="btn btn-primary">Add Client</a>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Phone Number</th>
                                    <th>City</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Imam Client</td>
                                    <td>imam-client</td>
                                    <td>098765438765</td>
                                    <td>Jakarta</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Edit</a> |
                                        <a href="#" class="btn btn-success">View</a> |
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection