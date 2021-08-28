<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Laravel Crud!</title>
</head>

<body>
    <h1>List Of All Category</h1>
    <hr>

    <div class="my-3">
        <form action="{{url('category/search')}}" method="POST" class="form-inline">
            @csrf
            <input placeholder="Search Category" type="text" name="search_key" class="form-control" id="">
            <input type="submit" class="btn btn-sm btn-primary" name="" value="Search" id="">
        </form>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $item)
            <tr>
                <th scope="row">{{$item->id }}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td>{{ $item->status }}</td>
                <td>
                    <a class="btn btn-sm btn-primary" href="{{url('category/edit/'.$item->id)}}">Edit</a>
                    <a class="btn btn-sm btn-success" href="{{url('category/show/'.$item->id)}}">view</a>
                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>

</html>
