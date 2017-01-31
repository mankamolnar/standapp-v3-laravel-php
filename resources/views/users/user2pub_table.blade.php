<script type="text/javascript" src="/js/kapcsoloModul.js"></script><hr />
<p class="anchor2">Kapcsolótábla</p>
<input type='hidden' id='pubjson' value='{{ $json_for_connect_table }}'/>
    <select name='kapcsoloSelect' id='kapcsoloSelect'>
        <option value='NA'>Válassz felhasználót!</option>
        @foreach($users as $user)
            <option value='{{ $user->user->id }}'>{{ $user->user->name }}</option>
        @endforeach
    </select>
<div id='kapcsolotable'>

</div>