$(function(){

    $("#login-student").on('click', function(e){

        e.preventDefault(); //Prevent user from spamming the fucking button

        let student_id = $("#student_id").val();
        let student_pin = $("#student_pin").val();

        $.ajax({
            url: 'Engine/Ajax.php',
            type: 'POST',
            data: {
                action: 'studentLogin',
                student_id: student_id,
                student_pin: student_pin
            },
            beforeSend: function (){
                //TODO: add before send animation
            },
            success: function (res){
                if (res === "true"){
                    alert("Login Successfully");
                    window.location.href = '/'
                } else {
                    alert(res);
                }
            }
        })

    })

});