@extends('layouts.html_frame')

@section('content')
<div id="MoveDiv" style="visibility:hidden; position:absolute;">
    
    <form action="index.php?page=8" method="post">
        <table cellpadding="0" cellspacing="0" border="0" width="100%">
            <tr>
                <td>
                    <b>Áthelyezés ide:</b>
                </td>
                <td style="text-align:right;">
                    <img src="img/close.png" width="30" height="30" onclick="closeMove();" alt="Bezárás!" />
                </td>
            </tr>
        </table>
    
        <p>
        <input type="hidden" name="ID" id="moveID" value="" />
        <input type="text" name="moveTo" /><br />
        <input type="submit" value="Áthelyezés" />
        </p>
    </form>
    
</div> 

<div id='content'>	


    <p class="welcome">ÜDvözlünk az oldalon!</p><br />
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