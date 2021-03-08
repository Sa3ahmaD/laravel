@extends('layout')

@section('body')
<main role="main" class="inner cover">
    <h1 class="cover-heading">Add a person</h1>
    <form action="{{route('form.save')}}" method="post">
        <div class="form-group">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            @csrf
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </p>
</main>
@endsection