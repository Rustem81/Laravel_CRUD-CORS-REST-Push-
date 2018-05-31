<!-- index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto');
</style>
<body>
<div class="container">
    <br />
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Passport Office</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <div>{{var_dump($passports)}}</div>
        <tbody>

        @foreach($passports as $passport)
            @php
                $date=date('Y-m-d', $passport['date']);
            @endphp
            <tr>
                <td>{{$passport['id']}}</td>
                <td>{{$passport['name']}}</td>
                <td>{{$date}}</td>
                <td>{{$passport['email']}}</td>
                <td>{{$passport['number']}}</td>
                <td>{{$passport['office']}}</td>

                <td><a href="{{action('PassportController@word', $passport['id'])}}" class="btn btn-primary">Word</a></td>

                <td><a href="{{action('PassportController@downloadPDF', $passport['id'])}}" class="btn btn-danger">PDF</a></td>

                <td><a href="{{action('PassportController@edit', $passport['id'])}}" class="btn btn-success">Edit</a></td>
                <td>
                    <form action="{{action('PassportController@destroy', $passport['id'])}}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-warning" type="submit">Delete</button>
                    </form>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>