@extends('backOffice.base')


@section('title', 'Event')




@section('body')

<div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="user-profile">
                    <div class="row">
                      <div class="col-lg-4">
                       @if($event->picture)
                        <div class="user-photo m-b-30">
                          <img class="img-fluid" style="height:519px;width:600px" src="{{url($event->picture)}}" alt="" />
                        </div>
                        @endif
                        <div class="user-work">
                          <h4>Description</h4>
                          <div class="work-content">
                          <textarea class="mail-address" value="{{$event->description}}">{{$event->description}}</textarea>

                          
                          </div>
                            
                        </div>
                      
                      </div>
                      <div class="col-lg-8">
                        <div class="user-profile-name">{{$event->name}}</div>
                        
                        <div class="user-Location">
                          <i class="ti-location-pin"></i> {{$event->location}}</div>
                       
                      
                        <div class="custom-tab user-profile-tab">
                          
                          <div class="tab-content">
                          <form action="{{ url('back/event/update/'.$event->id) }}" method="Post" enctype="multipart/form-data">

                            <div role="tabpanel" class="tab-pane active" id="1">
                                        {!! csrf_field() !!}
                                <div class="contact-information">
                                <h4>Event information</h4>
                                <div class="phone-content">
                                  <span class="contact-title">Name:</span>
                                  <input class="mail-address" value="{{$event->name}}" name="name">

                                </div>
                                <div class="phone-content">
                                  <span class="contact-title">Location:</span>
                                  <input class="mail-address" value="{{$event->location}}" name="location">

                                </div>
                                <div class="phone-content">
                                  <span class="contact-title">Start date:</span>
                                  <input type="date" class="mail-address" value="{{$event->startDate}}" name="startDate">

                                </div>
                                <div class="address-content">
                                  <span class="contact-title">Time:</span>
                                  <input type="time" class="mail-address" value="{{$event->time}}" name="time">
                                </div>
                             
                                <div class="website-content">
                                  <span class="contact-title">Maximum number of participants:</span>
                                  <input class="mail-address" value="{{$event->nbrMax}}" name="nbrMax">
                                </div>
                                <div class="skype-content">
                                  <span class="contact-title">Current number of participants:</span>
                                  <span class="contact-skype">10</span>
                                </div>

                                <div class="website-content">
                                  <span class="contact-title">Picture:</span>
                                  <input type="file" class="mail-address" value="{{$event->picture}}" name="picture">
                                </div>
                              </div>
                              <div class="basic-information">
                                <h4>Other informations</h4>
                                <div class="birthday-content">
                                  <span class="contact-title">Organizer:</span>
                                  <span class="birth-date">{{$event->organizer}} </span>
                                </div>
                                <div class="gender-content">
                                  <span class="contact-title">Creation date:</span>
                                  <span class="gender">{{$event->creationDate}}</span>
                                </div>
                                <div class="user-send-message" style="display:flex;justify-content:center;">
                          <button class="btn btn-primary btn-addon" type="submit">
                            <i class="ti-check"></i>Confirm changes</button>
                        </div>
                              </div>
                            </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
