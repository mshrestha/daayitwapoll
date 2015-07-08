@extends('layouts.master')



@section('content')
    @foreach($candidate as $key => $val)
<div class="col-lg-8">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    
                                    <h5>{{ $val->name_np }}</h5> 
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

                                        <img src="/{{ $val->photo }}" class="img-responsive img-circle" alt="" width="150px" >
                                        </div>
                                        
                                        <h4>{{ $val->organization_np }}
                                            
                                        </h4>
                                        <p>{{ $val->detail_np }}</p>
                                        
                                        </div>
                                    </div>
                                <div class="ibox-title">
                                    
                                    <h5>{{ $val->name }}</h5> 
                                    
                                </div>
                                <div class="ibox-content">
                                    <div>

                                        
                                        
                                        <h4>{{ $val->organization }}
                                            
                                        </h4>
                                        <p>{{ $val->detail }}</p>
                                        
                                    </div>
                                    <div class="fb-share-button" data-href="{{ URL::to('profile/' . $val->id) }}" data-layout="button_count"></div>
                                    </div>
                                
                                </div>
                                

                        </div>
    @endforeach
@stop