<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Validar Token</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <div class="container my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-3">
            <h1 class="text-body-emphasis">Validar Token</h1>
            <p class="lead">
                Si el token ingresado tiene el formato correcto, se revierte el orden solo de las letras del token
                ingresado, pero no así los símbolos.
            </p>

            <form id="tokenForm" action="#" method="post">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="token" class="form-label">Ingrese un Token:</label>
                            <input type="text" id="token" class="form-control text-center" required
                                style="width: 100%;">
                            <div id="tokendHelpBlock" class="form-text">
                                El token debe contener entre 6 y 8 letras, con al menos una mayúscula, al menos una
                                minúscula y
                                al menos uno de los siguientes símbolos *-!
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Validar Token</button>
            </form>

            <div id="result" class="alert alert-primary mt-5 p-3 d-none" role="alert"></div>
            <div id="error" class="alert alert-danger mt-5 p-3 d-none" role="alert"></div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#tokenForm').submit(function (event) {
                event.preventDefault();

                var token = $('#token').val();

                $.ajax({
                    type: 'POST',
                    url: '/challenge/token/reverse',
                    data: { token: token },
                    success: function (response) {
                        if (response.error) {                            
                            $('#error').html("Error: " + response.error).removeClass('d-none');
                            $('#result').addClass('d-none');
                        } else {                            
                            $('#result').html(response.reversedToken).removeClass('d-none');
                            $('#error').addClass('d-none');
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>

</body>

</html>