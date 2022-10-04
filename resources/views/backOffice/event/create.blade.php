@extends('backOffice.base')


@section('title', 'Event')




@section('body')
<div class="col-lg-6">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Add new event</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="{{ url('back/event/store') }}" method="post" enctype="multipart/form-data">
                                        {!! csrf_field() !!}
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="Name" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" class="form-control" placeholder="Description" name="description">
                                            </div>
                                            <div class="form-group">
                                                <label>Maximum number of participants:</label>
                                                <input type="text" class="form-control" placeholder="Maximum number of participants" name="nbrMax">
                                            </div>
                                            <div class="form-group">
                                                <label>Start Date:</label>
                                                <input type="date" class="form-control" name="startDate">
                                            </div>
                                          
                                            <div class="form-group">
                                                <label>Time:</label>
                                                <input type="time" class="form-control" placeholder="Time" name="time">
                                            </div>
                                            <div class="form-group">
                                                <label>Location:</label>
                                                <input type="text" class="form-control" placeholder="Location" name="location">
                                            </div>
                                            <div class="form-group">
                                                <label>Picture:</label>
                                                <input type="file" class="form-control" name="picture">
                                            </div>
                                          
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection