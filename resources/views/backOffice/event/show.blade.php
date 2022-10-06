

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
                      @if(Carbon\Carbon::now()>$event->startDate)
                      <div class="badge badge-danger">Finished</div>
                      @endif
                      @if(Carbon\Carbon::now()<$event->startDate)
                      <div class="badge badge-success">Coming</div>
                      @endif
                        <span class="m-l-10">
                          <a href="#">
                            <i class="ti-check color-success"></i>
                          </a>
                          <a data-toggle="modal" data-target="#exampleModal" title="Update event" >
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
                    @if(Carbon\Carbon::now()>$event->startDate)
                      <p class="comment-date" style="color:red;">Start date: {{ $event->startDate}}</p> <br>
                      @endif
                      @if(Carbon\Carbon::now()<$event->startDate)
                      <p class="comment-date">Start date: {{ $event->startDate}}</p> <br>
                      @endif

                      
                    </div>
                  </div>
                
                </div>
                @endforeach

              </div>
              <!-- /# card -->
            </div>


            @if(count($events))

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Event participation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      You are about to delete this event
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a type="submit" class="btn btn-primary" href="{{ url('/back/events/delete/'.$event->id) }}" >Confirm</a>
      </div>
    </div>
  </div>
</div>
@endif

@endsection