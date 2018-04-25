$(document).ready(function() {
    $("#thomas").click(function() {

        $("#XMLID_10_").html("<stop stop-color='#2DB3D9' offset='0'/><stop stop-color='#2DB3D9' offset='1'/>");

        $("#XMLID_12_").html("<stop stop-color='#2DB3D9' offset='0'/><stop stop-color='#2DB3D9' offset='1'/>");

        $("#cheveux").attr("fill", "#FFDC8F");

        $("#idRom").hide();
        $("#idThom").show();


    })

    $("#romeo").click(function() {

        $("#XMLID_10_").html("<stop stop-color='#0F9225' offset='0'/><stop stop-color='#0F9225' offset='1'/>");

        $("#XMLID_12_").html("<stop stop-color='#0F9225' offset='0'/><stop stop-color='#0F9225' offset='1'/>");

        $("#cheveux").attr("fill", "#8D6304");

        $("#idThom").hide();
        $("#idRom").show();
    })


});

// Blue : #2DB3D9
// Green : #0F9225
// Blond : #FFDC8F
// Chatain : #8D6304