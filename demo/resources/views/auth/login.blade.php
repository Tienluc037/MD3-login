<form action="{{route('login')}}" method="post">
    @csrf
    <input type="email" name="email" placeholder="Enter email">
    <input type="password" name="password" placeholder="Enter password">
    <button>Login</button>
</form>
