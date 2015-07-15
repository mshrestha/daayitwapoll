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
                    toastr.success('Thankyou for voting. Your vote has been acknowledged');      
              }
              if (msg == 'ALREADY VOTED'){
                    toastr.error('The user associated with this facebook account has already voted.', 'You have already voted');   
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

            toastr.error('Please log in through facebook login in order to vote on this site.', 'You\'re not logged in');
          FB.login();
      }
    });
    
});