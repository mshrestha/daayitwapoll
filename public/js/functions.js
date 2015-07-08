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
                console.log(msg);
              if(msg == 'SUCCESS'){
                    toastr.success('Thank you for your vote.');      
              }
              if (msg == 'ALREADY VOTED'){
                    toastr.error('You have already voted for a candidate on this app.', 'Already Voted');   
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

            toastr.error('You need to be logged in through facebook in order to Vote', 'Not logged in');
      }
    });
    
});