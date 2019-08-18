<h1>hello friends</h1>

<form class="pb-5" action="friends" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Friend Name</label>
        <input type="name" class="form-control" id="exampleInputname1" aria-describedby="nameHelp"
            placeholder="Enter name" name="name">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        <div>{{ $errors->first('name') }}</div>
    </div>
    
    
    <div class="form-group">
        <label for="exampleInputEmail1">Friend email</label>
        <input type="name" class="form-control" id="exampleInputname1" aria-describedby="nameHelp"
        placeholder="Enter name" name="email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        <div>{{ $errors->first('email') }}</div>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    @csrf
</form>

<ul>
    @foreach ($friends as $friend)
    <li>{{$friend->name}}</li>
    @endforeach
</ul>