<?php
include 'header.php';
?> 
<!DOCTYPE html>
<html>

<head>
    <title>Área restrita</title>
    <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a74ecdf6f2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css\datatables.min.css">
</head>

<body>
    <div class="container" style="margin-top: 70px;">
    <table  id="minhatabela" class="display" style="margin-top: 20px; width: 100%;">
        <thead>
        <tr>
            <th>Arquivo</th>
            <th style="text-align: right;"><i style="padding-right: 35px" class="fas fa-download"></i></th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>Drive SEFAZ 11</td>
                <th style="text-align: right;"><a href="programas/drivemfe.exe" class="btn btn-danger">Download</a></th>
            </tr>
            <tr>
                <td>Drive SEFAZ 49</td>
                <th style="text-align: right;"><a href="#" class="btn btn-danger">Download</a></th>
            </tr>
            <tr>
                <td>Drive SEFAZ 15</td>
                <th style="text-align: right;"><a href="#" class="btn btn-danger">Download</a></th>
            </tr>
            <tr>
                <td>Drive SEFAZ 16</td>
                <th style="text-align: right;"><a href="#" class="btn btn-danger">Download</a></th>
            </tr>
            <tr>
                <td>Integrador 86</td>
                <th style="text-align: right;"><a href="#" class="btn btn-danger">Download</a></th>
            </tr>
    </tbody>
     <tfoot>
        <tr>
            <th>Name</th>
            <th style="text-align: right; padding-right: 30px;">Arquivo</th>
        </tr>
    </tfoot>
        </table>
    </div>
    <script src="css\jquery.js"></script>
    <script src="css\datatables.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
    $('#minhatabela').DataTable({
    });
} );
    </script>
</body>

</html>