
<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes/header')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>  
    @include('includes/navbar')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CronAdmin</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success btn-sm" href="{{ route('create') }}"> Cadastrar</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>*</th>
            <th>*</th>
            <th>*</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td><a class="btn btn-info btn-sm" href="{{ route('show',$post->id) }}">Show</a></td>
            <td><a class="btn btn-primary btn-sm" href="{{ route('edit',$post->id) }}">Edit</a></td>
            <td><a class="btn btn-danger btn-sm" href="{{ route('destroy',$post->id) }}">Delete</a></td>
            
            <td></td>
        </tr>
        @endforeach
    </table>
    @if ( session()->has('success'))
    <li>{{ session('success') }}</li>
   @endif
    @include('includes/footer')
