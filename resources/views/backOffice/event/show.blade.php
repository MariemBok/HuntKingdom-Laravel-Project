

@extends('backOffice.base')


@section('title', 'Events')




@section('body')

<div class="col-lg-6">
              <div class="card">
                <div class="card-title">
                  <h4>All events </h4>

                </div>
                @foreach ($events as $event)

                <div class="recent-comment">
                  <div class="media">
                    <div class="media-left">
                      <a href="#">
                        <img class="media-object" src="{{url('backOffice/images/avatar/1.jpg')}}" alt="...">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">{{$event->name}}</h4>
                      <p>{{$event->description}}</p>
                      <div class="comment-action">
                        <div class="badge badge-success">Approved</div>
                        <span class="m-l-10">
                          <a href="#">
                            <i class="ti-check color-success"></i>
                          </a>
                          <a href="#">
                            <i class="ti-close color-danger"></i>
                          </a>
                          <a href="#">
                            <i class="fa fa-reply color-primary"></i>
                          </a>
                        </span>
                      </div>
                      <p class="comment-date">{{$event->startDate}}</p> <br>

                      
                    </div>
                  </div>
                
                </div>
                @endforeach
              </div>
              <!-- /# card -->
            </div>


@endsection