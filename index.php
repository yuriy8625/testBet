<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header" style="text-align: center">
            <h3>
                Сделайте свою ставку!
            </h3>
        </div>

        <div class="card-body text-white bg-secondary ">
            <h5 class="card-title">Информация</h5>
            <span>
                 Угадал точный счёт - большой приз.
            </span>
            <br>
            <span>
                 Угадал исход матча (выигрыш той или иной команды, или же ничью) - маленький приз.
            </span>
            <br>
            <span>
                 Не угадал - нулевой приз ...(
            </span>
        </div>

        <div class="card-body">
            <form method="POST" action="result.php">

                <div class="form-row">
                    <div class="col">
                        <label for="first_command">
                            Команда A:
                        </label>
                        <input id="first_command" class="form-control" type="number" min="0" name="command_a" value="0">
                    </div>
                    <div class="col">
                        <label for="second_command">
                            Команда B:
                        </label>
                        <input id="second_command" class="form-control" type="number" min="0" name="command_b" value="0">
                    </div>
                </div>

                <div class="mt-5">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Сделать ставку</button>
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>










