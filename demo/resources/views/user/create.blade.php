<form action="{{route('users.create')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter name">
    <input type="email" name="email" placeholder="Enter email">
    <input type="password" name="password" placeholder="Enter password"> <br>
    @foreach($roles as $role)
        <input type="checkbox" name="role[]" value="{{$role->id}}">{{$role->name}} <br>
    @endforeach
    <button>Create</button>
</form>
