function submitSuggestion(country, suggestion, success, error){
  $.ajax({
          url: '/php/sqlAddSuggestion.php',
          type: "POST",
          data: { "country" : country,
                  "suggestion" : suggestion },
          dataType: 'json',
          success: function(){ success(); },
          error: function(err){ error(err); }
  });
}
