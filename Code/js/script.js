$('#openNav').on('click', function() {
    $('#myNav').css("width", "100%");
  });
  
  $('#closeNav').on('click', function() {
    $('#myNav').css("width", "0%");
  });
  $(document).ready(function(){
    $(".buttonslide-1x").click(function(){
      $(".plusvues").hide();
      $(".nouveaux").hide();
      $(".populaires").show();
    });
    $(".buttonslide-2x").click(function(){
      $(".plusvues").hide();
      $(".nouveaux").show();
      $(".populaires").hide();
    });
    $(".buttonslide-3x").click(function(){
      $(".plusvues").show();
      $(".nouveaux").hide();
      $(".populaires").hide();
    });
    $(".imglivre").hover(function(){
      $(this).find("div").show();
      }, function(){
      $(this).find("div").hide();
    });
  });
  
  