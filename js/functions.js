
//Function Makes and executes query of Messages each for 5 seconds
$(document).ready(
    function(){
        getAllMessages();
        var widthDevice = window.innerWidth;
        $('#expresate').css('width', (widthDevice - (widthDevice/2)));
        $('.all_messages').css('width', (widthDevice - 200));
        $('.sendMessage').css('width', (widthDevice - 200));

        //alert("Your location is: " + geoplugin_countryName() + ", " + geoplugin_region() + ", " + geoplugin_city());

        setInterval(function () {
            console.log('it works :: ' + new Date());
            getAllMessages();
        },5000);
    }
);

//Function to alert of errors
$(document).ajaxError(
    function (event, jqXHR, ajaxSettings, thrownError) {
        console.log('Error ajax  ::  [event:' + event + '], [jqXHR:' + jqXHR + '], [ajaxSettings:' + ajaxSettings + '], [thrownError:' + thrownError + '])');
    }
);

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
        $( "#expresate" ).val('');
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

//Function to execute script inside getAllMessages.php script
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

//Function to make the count of characters on Textarea
function countChar(val) {
    var len = val.value.length;
    var maxlen = 200;
    if (len >= maxlen) {
        val.value = val.value.substring(0, maxlen);
    } else {
        $('#charNum').text((maxlen - len) + ' Characters');
    }
};

//Function to detect event enter key
function onTextAreaChange() {
    var key = window.event.keyCode;

    // If the user has pressed enter
    if (key == 13) {
        sendMessage();
        return false;
    }
    else {
        return true;
    }
}