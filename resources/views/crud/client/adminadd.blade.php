@extends('crud.client.layouts.master')

@section('content')
    <div class="container">
        <div class="card" id="wrapper">
            <div class="row d-flex justify-content-center">
                <div class="col-12">
                    <div class="card-header">
                        <h2 class="card-title">Add Manage Client</h2>
                    </div>
    
                    <div class="card-body">
                        <div class="col-8">
                            <div class="action-add pb-3">
                                <a href="{{ route('admin') }}" class="btn btn-primary">Back</a>
                            </div>
                            <div class="form-add">
                                <form>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="u_name">
                                    </div>
    
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="is_project">
                                        <label class="form-check-label" for="is_project">Is Project</label>
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea name="address" id="address" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="phone_number" class="form-label">Phone Number</label>
                                        <input type="number" class="form-control" id="phone_number">
                                    </div>

                                    <div class="mb-3">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control" id="city">
                                    </div>
    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection