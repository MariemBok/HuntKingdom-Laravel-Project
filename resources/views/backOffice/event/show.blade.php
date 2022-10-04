

@extends('backOffice.base')


@section('title', 'Events')




@section('body')


<div class="col-lg-6">

              <div class="card">

                <div class="card-title  ">
                  
                  <h4>All events </h4> <a  href="{{ url('/back/events/create') }}" class="btn"><i class="fa fa-plus"></i> </a>
                  


                </div>
                  


                @foreach ($events as $event)

                <div class="recent-comment">
                  <div class="media">
                    <div class="media-left">
                      <a href="#">
                        <img class="media-object"  style="height: 50px;;width: 50px;" src="{{url($event->picture)}}" alt="...">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">{{$event->name}}</h4>
                      <p>{{$event->description}}</p>
                      <div class="comment-action">
                        <div class="badge badge-success">Coming</div>
                        <span class="m-l-10">
                          <a href="#">
                            <i class="ti-check color-success"></i>
                          </a>
                          <a href="{{ url('/back/events/delete/'.$event->id) }}" title="Update event" >
                            <i class="ti-close color-danger"></i>
                          </a>
                          <a href="{{ url('/back/event/'.$event->id.'/edit') }}" title="Update event" >
                            <i class="fa fa-edit color-primary"></i>
                          </a>
                          <a href="{{ url('/back/event/'.$event->id) }}" title="Show more details" >
                            <i class="fa fa-eye color-primary"></i>
                          </a>
                        </span>
                      </div>
                      <p class="comment-date">Start date: {{$event->startDate}}</p> <br>

                      
                    </div>
                  </div>
                
                </div>
                @endforeach

              </div>
              <!-- /# card -->
            </div>


            
           

@endsection