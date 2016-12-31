function getVoteData(success, error){
    $.ajax({
            url: '/php/sqlAccess.php',
            data: "",
            dataType: 'json',
            success: function(data){ success(data); },
            error: function(err){ error(err); }
    });
}
function castVote(country, success, error){
  $.ajax({
          url: '/php/sqlCastVote.php',
          type: "POST",
          data: { "country" : country },
          dataType: 'json',
          success: function(data){ success(data); },
          error: function(err){ error(err); }
  });
}
