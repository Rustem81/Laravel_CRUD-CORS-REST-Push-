<!-- pdf.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1251">

    <title></title>
</head>
<body>
<table class="table table-bordered">
    <tr>
        <td>
          Имя владельца:  {{$passport->name}}
        </td>
        <br>
        <hr>
        <br>
        <td>
           Дата выдачи паспорта: {{$passport->date}}
        </td>
    </tr>


    <tr>
        <td>
           Почта: {{$passport->email}}
        </td>
        <br>
        <hr>
        <br>
        <td>
          Номер паспорта:  {{$passport->number}}
        </td>
    </tr>
</table>
</body>
</html>