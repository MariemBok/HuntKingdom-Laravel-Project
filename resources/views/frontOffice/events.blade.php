
@extends('frontOffice.base')


@section('title', 'Events')




@section('body')

    <link rel="stylesheet" href="{{url('frontOffice/css/templatemo-style.css')}}">
<div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                Our events
            </h2>
           
        </div>

        <div class="row tm-mb-90 tm-gallery">
        @if(count($events)!=0)
        @foreach ($events as $event)
        @if(Carbon\Carbon::now()<$event->startDate)


            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="{{url($event->picture)}}"  alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>{{$event->name}} </h2>
                        <a href="video-detail.html">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span>{{$event->startDate}}</span>
                    @php ($nbr=0)
                    @php ($exist=false)


                    @foreach ($allParticipations as $part)
                    @if($part->event==$event->id)
                    @php ($nbr++)
                    @endif

                    @if($part->event==$event->id && $part->participant==Auth::user()->id)
                    @php ($exist=true)
                    @endif

                    @endforeach



                  @if($nbr>=$event->nbrMax)
                  <h5 style="color:red"> FULL</h5>
                   
                  @else
                  @if($exist==false)
                  <a  data-toggle="modal" data-target="#exampleModal"  class="btn"><i class="fa fa-plus"></i> </a>
                  @else 
                  <h5 style="color:red"> Joined</h5>

                  @endif


                  @endif

                    <span>{{$event->location}}</span>
                </div>
            </div>
            @endif
            @endforeach
            @else
            <h4>No events</h4>
            @endif
     
        </div> <!-- row -->
       
    </div> 
      
    </div>
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
      You are about to confirm your participation
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a type="submit" class="btn btn-primary" href="{{ url('/events/participate/'.$event->id) }}">Confirm</a>
      </div>
    </div>
  </div>
</div>
@endif

@endsection