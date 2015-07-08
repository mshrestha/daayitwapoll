$(document).ready(function(){
    $( ".vote-button" ).on( "click", function() {
        var candidateId = $( this ).attr( "data-id" );
        var userid = FB.getUserID();
      if (FB.getUserID()){
            
            var request = $.ajax({
              url: "/vote/"+candidateId+'/'+userid,
              method: "GET"
              
            });
             
            request.done(function( msg ) {
                
              if(msg == 'SUCCESS'){
                    toastr.success('धन्यवाद | तपाइको मत गणती मा गईसकेको छ ');      
              }
              if (msg == 'ALREADY VOTED'){
                    toastr.error('तपाइको मत पहिलेनै खसिसकेको छ | कृपया एक जनाले एउटा मात्रै मत खसाल्नु होला | धन्यवाद', 'एकजनालाई मात्रै मत ');   
              }
              if (msg == 'FAILURE')
              {
                  toastr.error('There was an error while casting your vote. Please try voting again.', 'Failure to cast vote');   
              }
            });
             
            request.fail(function( jqXHR, textStatus ) {
              alert( "Request failed: " + textStatus );
            });
          
            
      }else{

            toastr.error('यस मतदान कार्यक्रममा सहभागीहुन कृपया फेसबुकबाट लग-इन गर्नुहोला |', 'लग-इन छैन');
      }
    });
    
});