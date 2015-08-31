/**
 * Created by Londoner on 15. 8. 11..
 */

console.log('hello 1');
var valid = true;
var errorMessage = "";

//Passing an anonymous function as the event handler.
$(document).ready(function() {
    //Our code will be added here & will not execute until the DOM is fully loaded.

    // validate SSN with db
    $("#ssnValidate").click(function() {

        // validate before ajax correspondence
        var fname = $('input#yourName').val().length;
        var fssn = $('input#yourSsn').val().length;

        if(fname < 3) {
            alert("이름을 정확하게 입력하세요.");
            return false;
        }

if(fssn != 6) {
    alert("생년월일을 정확하게 입력하세요.");
    return false;
    }


var form_data = {
    name: $("#yourName").val(),
    ssn: $("#yourSsn").val(),
    is_ajax: 1
    };

$.ajax({
    type: "POST",
    //dataType: "json",
    url: "validate_ssn.php", //Relative or absolute path to response.php file
    data: form_data,
    success: function(response) {
    if(response == 'success') {
    $("#messageSSN").html("<p style='color:green;font-weight:bold'>실명확인 성공!</p>");
    console.log("success");
    valid = true;
    //$("#form1").slideUp('slow');
    }else{
    console.log("failed");
    errorMessage = "실명인증 실패";
    valid = false;
    console.log(errorMessage);
    $("#messageSSN").html("<p style='color:green;font-weight:bold'>실명확인 실패!! 이름과 생년월일을 확인해주세요.</p>");
    }
}
});
return false;
});



//Adding submit listener to our form, again with anonymous function as handler.
$('#sampleForm').submit(function(e) {

    $("span").text("").show();

    // validate this form
    var fname = $('input#yourName').val().length;
    var fssn = $('input#yourSsn').val().length;
    var femail = $('input#yourEmail').val().length;

    if(fname < 3){
    errorMessage = "please enter your name correctly";
    valid = false;
    }

if(fssn != 6){
    errorMessage = "please enter your SSN correctly";
    valid = false;
    }

if(femail < 7){
    errorMessage = "please enter your Email correctly";
    valid = false;
    }

if(valid == true){
    $( "#messageValidate" ).text( "Validated..." ).show();
    console.log($( this ).serialize());
    var values = $( this ).serialize();
    return true;
    }else{
    //Prevent the default action, which in this case is the form submission.
    e.preventDefault();
    //alert(errorMessage);
    //$( "span" ).text(errorMessage).show().fadeOut( 2000 );
    $("#messageValidate").text(errorMessage).show();
    return false;
    }

//Serialize the form data and store to a variable.
//formData = $(this).serialize();

});

});
