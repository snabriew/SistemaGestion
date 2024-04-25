$(document).ready(function () {
    $("#login-form").submit(function (event) {
        event.preventDefault();
        var username = $("#username").val();
        var password = $("#password").val();
        $.ajax({
            type: "POST",
            url: "/SistemaGestion/login.php",
            data: {
                username: username,
                password: password
            },
            success: function (response) {
                if (response === "success") {
                    window.location.href = "/SistemaGestion/home.php"
                } else {
                    $("#message").html("Usuario o clave incorrectos.");
                }
            }
        });
    });
});