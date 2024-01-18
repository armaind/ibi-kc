<p>kamu koordinator</p>
<form action="{{ url('logout') }}" method="POST">
    @csrf
    <button type="submit"> Sign Out</button>
</form>