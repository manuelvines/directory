$("#country_id").change(function() {



    let $id = $("#country_id").val();

    $.ajax({

        //url: "http://hostfriendstravel.com/statesByCountry/" + $id,

        url: "http://localhost:8000/statesByCountry/" + $id,
        type: "GET", // podría ser get, post, put o delete.
        data: {}, // datos a pasar al servidor, en caso de necesitarlo
        dataType: 'JSON',
        beforeSend: function() {


            $("#state_id").html("");



        },
        success: function($data) {
            //param optional



            for (let $i = 0; $i <= $data.length - 1; $i++) {


                $("#state_id").append("<option value='" + $data[$i].id + "' >" + $data[$i].name + "</option>");


            }

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