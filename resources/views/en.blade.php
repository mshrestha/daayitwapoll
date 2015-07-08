@extends('layouts.enmaster')



@section('content')
 @foreach($candidates as $key => $val)
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
        <h5>Welcome to Naya Ghar Gulmi Innovation Challenge 2015 Poll </h5>
            <br /><br /><p>
Naya Ghar and Integrated Rural Development Society (IRDS) launched Gulmi Innovation Challenge 2015 in April. 231 entrepreneurs from 39 VDCs of Gulmi participated in this district-wide competition. Based on their written application  Naya Ghar and IRDS have selected top 40 entrepreneurs in June. This poll has been organised to select top 20 entrepreneurs in the Innovation Challenge. Selected top 20 entrepreneurs will qualify for next round of selection process where top 10 will receive Rs 25,000 each. 

<br /><br />
Please vote your favorite entrepreneur based on their business description. 

            </p>
    
        </div>
        
    </div>
    
</div>
                        <div class="col-lg-4">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    
                                    <h5>{{ $val->name }}</h5> 
                                    <span class="label label-primary vote-button" data-id="{{ $val->id }}">
                                        <i class="fa fa-arrow-circle-o-right"></i> 
                                        VOTE
                                    </span>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>  
                                        <a class="close-link">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <div>

                                        <div class="pull-right text-right">

                                        <img src="{{ $val->photo }}" class="img-responsive img-circle" alt="" width="50px">
                                        </div>
                                        
                                        <h4>{{ $val->organization }}
                                            <br/>
                                            
                                            <small class="m-r"><a href="/profile/{{ $val->id }}"> Full Profile </a> </small>
                                        </h4>
                                        <p>{{ $val->detail }}</p>
                                        <div class="fb-share-button" data-href="{{ URL::to('profile/' . $val->id) }}" data-layout="button_count"></div>
                                        </div>
                                    </div>
                                
                                </div>

                        </div>
    @endforeach
@stop
