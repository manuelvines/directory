<script>
$("#country_id").change(function() {


$.ajax({
    url: "{{ url('/statesByCountry') }}" + statesByCountry,
    type: "GET", // podría ser get, post, put o delete.
    data: {}, // datos a pasar al servidor, en caso de necesitarlo
    dataType: 'JSON',
    beforeSend: function() {



    },
    success: function($data) {
        //param optional


    },
    error: function(jqXHR, exception) {
        var msg = '';
        if (jqXHR.status === 0) {
            msg = 'Not connect.\n Verify Network.';
        } else if (jqXHR.status == 404) {
            msg = 'Requested page not found. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Internal Server Error [500].';
        } else if (exception === 'parsererror') {
            msg = 'Requested JSON parse failed.';
        } else if (exception === 'timeout') {
            msg = 'Time out error.';
        } else if (exception === 'abort') {
            msg = 'Ajax request aborted.';
        } else {
            msg = 'Uncaught Error.\n' + jqXHR.responseText;
        }
        console.log(msg);
    },
});



});
</script>