<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Clearcode</title>
        <link href="http://localhost/clearcode/src/public/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Cześć {$imie}</h1>
                    <form role="form" method="POST">
                        <div class="form-group">
                            <label for="csv_to_import">Wybierz plik</label>
                            <input type="file" id="csv_to_import" name="csv_to_import" class="form-control" accept="application/csv" />
                        </div>
                        <button type="submit" class="btn btn-default">Wyślij</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>