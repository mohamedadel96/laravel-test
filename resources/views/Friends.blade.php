<h1>hello friends</h1>

<form class="pb-5" action="friends" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Friend Name</label>
        <input type="name" class="form-control" id="exampleInputname1" aria-describedby="nameHelp"
            placeholder="Enter name" name="name">
        <div>{{ $errors->first('name') }}</div>
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1">Friend email</label>
        <input type="name" class="form-control" id="exampleInputname1" aria-describedby="nameHelp"
            placeholder="Enter name" name="email">
        <div>{{ $errors->first('email') }}</div>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Friend status</label>
        <select name="active" id="active" class="form-group">
            <option value="" disabled>select status</option>
            <option value="1">active</option>
            <option value="0">inactive</option>
        </select>
        <div>{{ $errors->first('email') }}</div>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    @csrf
</form>

<ul>
    @foreach ($ActiveFriends as $friend)
    <li>{{$friend->name}} {{$friend->email}}</li>
    @endforeach
</ul>
<ul>
    @foreach ($InActiveFriends as $friend)
    <li>{{$friend->name}} {{$friend->email}}</li>
    @endforeach
</ul>