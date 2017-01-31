@extends('layouts.html_frame')

@section('content')
<div id='content'>
    <?php $i = 0; ?>
    @foreach ($users as $user)
        <input type='hidden' name='id[{{ $i }}]' value='{{ $user->user->id }}' />
        <input type='hidden' name='uname[{{ $i }}]' value='{{ $user->user->name }}' />
        @foreach ($user->user->properties as $property)
            <input type='hidden' name='{{ $property->property }}[{{ $i }}]' value='{{ $property->value }}' />
        @endforeach
        <input type='hidden' name='pass[{{ $i }}]' value='{{ $user->user->password }}' />
        <input type='hidden' name='tether[{{ $i }}]' value='{{ $user->user->tether }}' />
        <?php $i++; ?>
    @endforeach

<div id='kezeloContainer'>
    <div id='baloldal'>
        <?php $i = 0; ?>
        @foreach ($users as $user)
            <span class='kezeloA' id='i{{ $i }}'>{{ $user->user->name }}</span><br />
            <?php $i++; ?>
        @endforeach

        <span class="kezeloA" id="inew">új felvitele</span>
    </div>
    
    <div id='jobboldal'>
        
        <form action='index.php?page=11' method='post' id='felhForm'>
        
            <p class='anchor2' id='felhTitle'>Új felhasználó</p>
            <input type='hidden' name='id' value='' />
            <br />
        
            <p class='anchor2'>felhasználónév</p>
            <input type='text' name='uname' value='' />
            
            <p class='anchor2'>teljes név</p>
            <input type='text' name='fullname' value='' />
            
            <p class='anchor2'>lakcím</p>
            <input type='text' name='lakcim' value='' />
            
            <p class='anchor2'>tartozkodási hely</p>
            <input type='text' name='tartozkodasi' value='' />
            
            <p class='anchor2'>születési hely</p>
            <input type='text' name='szulhely' value='' />
            
            <p class='anchor2'>Születési idö</p>
            <input type='text' name='szulnap' value='' />
            
            <p class='anchor2'>Végzettség</p>
            <input type='text' name='vegzettseg' value='' />
            
            <p class='anchor2'>Anyja neve</p>
            <input type='text' name='anyjan' value='' />
        
            <p class='anchor2'>Van-e magánnyugdíj pénztára</p>
            <select name='maganNyugdij'>
                <option value='0'>Nincs</option>
                <option value='1'>Van</option>
            </select>
            
            <p class='anchor2'>lakcím kártya szám</p>
            <input type='text' name='lakcimKsz' value='' />
        
            <p class='anchor2'>személyi igazolvány száma</p>
            <input type='text' name='szig' value='' />
        
            <p class='anchor2'>adószám</p>
            <input type='text' name='adosz' value='' />
        
            <p class='anchor2'>Taj szám</p>
            <input type='text' name='taj' value='' />
        
            <p class='anchor2'>Jelszó</p>
            <input type='text' name='pass' value='' onblur='setPass();' />
        
            <p class='anchor2'>telefonszám</p>
            <input type='text' name='phone' value='' />
        
            <p class='anchor2'>jogkör</p>
            <select name='tether'>
                <option value='0'>Alkalmazott</option>
                <option value='1'>Üzletvezető</option>
                <option value='2'>Főnök</option>
                <option value='3'>Rendszergazda</option>
            </select><br /><br />
            
            <input type='submit' value='Mentés!' />
        </form>
        
    </div>

</div>
@include("users.user2pub_table");
@endsection