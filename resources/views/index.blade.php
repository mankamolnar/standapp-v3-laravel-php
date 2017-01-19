@extends('layouts.html_frame')

@section('content')
<div id='content'>	

    <br />
    <form action="index.php?page=main" method="post">
        <p id="loginform">
        <input type="hidden" name="ulogin" value="TRUE" />
        
        Felhasználónév<br />
        <input type="text" name="user" /><br /><br />
        
        Jelszó<br />
        <input type="password" name="pass" /><br /><br />
        
        <input type="submit" value="Bejelentkezés!" />
        </p>
    </form>
</div>
@endsection