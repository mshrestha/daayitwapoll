@extends('layouts.master')



@section('content')
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
        
२०७२ बैशाखमा नया घर र एकीकृत ग्रामिण बिकास समाज (IRDS), गुल्मीको सहकार्यमा गुल्मी इनोवेशन प्रतियोगिता २०१५ आयोजना गरियो | उक्त प्रतियोगितामा जिल्लाका ३९ गाविसबाट २३१ उद्धमिहरुले लिखित निवेदन मार्फत भाग लिनु भयो | उद्धमिहरुको निवेदनको आधारमा नयाधर र IRDSको टोलीले ले उत्कृष्ट ४० उद्धमिहरु छनौट गरेको छ | यो मतदानको नतिजाको आधारमा उत्कृष्ट २० उद्धमीहरु छनौट गरिनेछन |  उक्त २० उद्धमिहरु अर्को चरणको प्रतियोगिताको लागि छनौट हुनेछन जसमा उत्कृष्ट १० उद्धमिले पुरस्कार स्वरूप रू. २५,००० प्राप्त गर्नुहुनेछ | 
                
<br /><br />
            उद्धमिको व्यवसाय बिवरणको आधारमा आफ्नो अमुल्य मतदान दिनुहुन हार्दिक अनुरोध गरिन्छ |
    
        </div>
        
    </div>
    
</div>
 @foreach($candidates as $key => $val)
<div class="col-lg-4">
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

                                        <img src="{{ $val->photo }}" class="img-responsive img-circle" alt="" width="50px">
                                        </div>
                                        
                                        <h4>{{ $val->organization_np }}
                                            <br/>
                                            
                                            <small class="m-r"><a href="/profile/{{ $val->id }}"> Full Profile </a> </small>
                                        </h4>
                                        <p>{{ $val->detail_np }}</p>
                                        <button class="btn btn-sm btn-primary vote-button" data-id="{{ $val->id }}">
                                        <i class="fa fa-arrow-circle-o-right"></i> 
                                        VOTE
                                        </button>
                                        
                                        </div>
                                    </div>
                                
                                </div>

                        </div>
    @endforeach
@stop
