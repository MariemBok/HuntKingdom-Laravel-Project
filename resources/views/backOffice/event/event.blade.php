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
                            <h3>{{$event->description}} </h3>
                          
                          </div>
                            
                        </div>
                      
                      </div>
                      <div class="col-lg-8">
                        <div class="user-profile-name">{{$event->name}}</div>
                        <div class="user-Location">
                          <i class="ti-location-pin"></i> {{$event->location}}</div>
                       
                      
                        <div class="custom-tab user-profile-tab">
                          
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="1">
                              <div class="contact-information">
                                <h4>Event information</h4>
                                <div class="phone-content">
                                  <span class="contact-title">Start date:</span>
                                  <span class="phone-number">{{$event->startDate}}</span>
                                </div>
                                <div class="address-content">
                                  <span class="contact-title">Time:</span>
                                  <span class="mail-address">{{$event->time}}</span>
                                </div>
                             
                                <div class="website-content">
                                  <span class="contact-title">Maximum number of participants:</span>
                                  <span class="contact-website">{{$event->nbrMax}}</span>
                                </div>
                                <div class="skype-content">
                                  <span class="contact-title">Current number of participants:</span>
                                  <span class="contact-skype">{{$participations}}</span>
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
          </div>
@endsection
