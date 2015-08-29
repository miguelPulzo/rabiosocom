function sendMessage(){

    var msg_expresate= $("#expresate").val();
    var request = $.ajax({
        url: "success_sm.php",
        method: "POST",
        data: { data : msg_expresate},
        dataType: "html"
    });

    request.done(function( msg ) {
        /*
        var cur_data = $( "#all_messages" ).html();
        $( "#all_messages" ).html(' ');
        $( "#all_messages" ).html( msg + cur_data);
        */
        $( "#expresate" ).html('');
        $( "#all_messages" ).html( msg );

    });

    request.fail(function( jqXHR, textStatus ) {
        //alert( "Request failed: " + textStatus );
        var msg = 'Error Send Message: ' + textStatus;
        var request_fm = $.ajax({
            url: "fail_sm.php",
            method: "POST",
            data: { data : msg },
            dataType: "html"
        });
        request_fm.done(function( msg ) {
            $( "#errorMessage" ).html('');
            var cur_data = $( "#errorMessage" ).html();
            $( "#log" ).html( msg );
        });

    });

}

$(document).ready(
    function(){
        getAllMessages();

        var widthDevice = window.innerWidth;
        alert( widthDevice );
    }
);

function getAllMessages(){
    var msg_expresate= $("#expresate").val();
    var request = $.ajax({
        url: "getAllMessages.php",
        method: "POST",
        data: { data : msg_expresate},
        dataType: "html"
    });
    request.done(function( msg ) {
        $( "#all_messages" ).html( msg );
    });
}

function countChar(val) {
    var len = val.value.length;
    var maxlen = 200;
    if (len >= maxlen) {
        val.value = val.value.substring(0, maxlen);
    } else {
        $('#charNum').text((maxlen - len) + ' Characters');
    }
};

function setEmpty( element ){
    element.text = "";
    element.value = "";
}

$(document).ajaxError(
    function (event, jqXHR, ajaxSettings, thrownError) {
        alert('[event:' + event + '], [jqXHR:' + jqXHR + '], [ajaxSettings:' + ajaxSettings + '], [thrownError:' + thrownError + '])');
    });