function getVoteData(success, error){
    $.ajax({
            url: '/php/sqlAccess.php',
            data: "",
            dataType: 'json',
            success: function(data){ success(data); },
            error: function(err){ error(err); }
    });
}
