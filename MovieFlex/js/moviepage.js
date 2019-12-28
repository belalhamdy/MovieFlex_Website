  var numberOfLikes = 0;
  initializeRatings();
  function initializeRatings() {

      $('#rate').shieldRating({
          max: 10,
          step: 0.1,
          value: 0,
          markPreset: false
      });
    }
    $(document).ready(function(){

      $("#heart").click(function(){
        if($("#heart").hasClass("liked")){
          numberOfLikes--;
          $("#heart").html('<i class="fa fa-heart-o" aria-hidden="true">' + ' ' + numberOfLikes + '</i> ');
          $("#heart").removeClass("liked");
          alert('Disliked');
        }else{
          numberOfLikes++;
          $("#heart").html('<i class="fa fa-heart" aria-hidden="true">' + ' ' + numberOfLikes + '</i>');
          $("#heart").addClass("liked");
          alert('Liked');
        }
    });
});