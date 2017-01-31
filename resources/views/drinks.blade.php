@extends('layouts.html_frame')

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

@section('content')
<div id='content'>	
    <form action='index.php?page=7' method='post' id='drFrm'>
        
    <input type='hidden' name='filterVis' value='1' />
    <input type='hidden' name='filterCsop' value='0' />
    <input type='hidden' id='pid' value='{{ $current_pub }}' />
    <div id='itallap'>
        
        <div id='itallapMenuUp'>
            
            <div id='itallapSearchDiv'>
                
                <input type='text' id='itallapSearch' />
                
            </div>
            
            <div id='itallapSearchBut'></div>
            
            <div id='itallapMenuAdd'></div>
            
            <div id='itallapMenuSave'></div>
            
            <div id='itallapMenuFilter'></div>
            
        </div>
        
        <div id='itallapNewMenu'>
                
            <div class='newTermTd1'>
                <br /><button type='button' id='newFelBut' type='submit' />Felvitel</button>
            </div>
            
            <div class='newTermTd1'>
                <br /><input type='text' id='newName' />
            </div>
            
            <div class='newTermTd1'>
                <br /><input type='text' id='newAr' />
            </div>
            
            <div class='newTermTd1'>
                <br /><input type='text' id='newBar' />
            </div>
            
            <div class='newTermTd1'>
                <br />
                <select id='newCsop'>
                    <option value='1'>CSAPOLT SÖR</option>
                </select>
            </div>
            
            <div class='newTermTd1'>
                <br /><select id='newMert'><option value='1'>ÜVEG</option><option value='2'>LITER</option><option value='4'>DB</option></select>
            </div>
            
            <div class='newTermTd1'>
                <br /><input type='checkbox' id='forditottNew' value='1' />
            </div>
            
            <div class='newTermTd1'>
                <br /><img src='img/close.png' width='22' height='22' id='closeNew' />
            </div>
                
            
            
        </div>
        
        <div id='itallapMenuDown'>
            
            <div class='itallapTd1'>
                <br/>Sorszám
            </div>
            
            <div class='itallapTd1'>
                <br/>Név
            </div>
            
            <div class='itallapTd1'>
                <br/>Ár
            </div>
            
            <div class='itallapTd1'>
                <br/>Beszerzési ár
            </div>
            
            <div class='itallapTd1'>
                <br/>Csoport
            </div>
            
            <div class='itallapTd1'>
                <br/>Mérték egység
            </div>
            
            <div class='itallapTd1'>
                <br/>Fordított Számolás
            </div>
            
            <div class='itallapTd2'>
                <br/>m
            </div>
        
        </div>

        <?php $i = 0; ?>
        @foreach ($drinks as $drink)
            <div class="itallapSor" id="italSor1">
            
                <div class="sorTd">
                    {{ $i+1 }}. - {{ $drink->id }}
                </div>
                
                <div class="sorTd">
                    <input type="hidden" name="ID[{{ $i }}]" id="ID{{ $i }}" value="{{ $drink->id }}" />
                    <input type="hidden" name="visibleHidden[{{ $i }}]" id="visibleHidden{{ $i }}" value="{{ $drink->visible }}" />
                    <input type="hidden" name="chg[{{ $i }}]" id="chg{{ $i }}" value="0" />
                    <input type="hidden" name="listID[{{ $i }}]" id="listID{{ $i }}" value="{{ $i+1 }}" />
                    <input type="text" onkeypress="setChg({{ $i }});" name="italNev[{{ $i }}]" id="italNev{{ $i }}" value="{{ $drink->name }}" />
                </div>
                
                <div class="sorTd">
                    <input type="text" onkeypress="setChg({{ $i }});" name="italAr[{{ $i }}]" id="italAr{{$i}}" value="{{ $drink->price }}" />
                </div>
                
                <div class="sorTd">
                    <input type="text" onkeypress="setChg({{ $i }});" name="italBar[{{ $i }}]" id="italBar{{ $i }}" value="{{ $drink->purchase_price }}" />
                </div>
                
                <div class="sorTd">
                    <select name='csoport[{{ $i }}]' id='csoport{{ $i }}' class='itallapSelect' onclick='setChg({{ $i }});'>
                        <option value='1'>jelenleg: CSAPOLT SÖR</option>
                    </select>
                </div>
                
                <div class="sorTd">
                    <select name='mertekegyseg[{{ $i }}]' id='mertekegyseg{{ $i }}' class='itallapSelect' onclick='setChg({{ $i }});'>
                        <option value='2'>jelenleg: LITER</option><option value='1'>ÜVEG</option><option value='2'>LITER</option><option value='4'>DB</option>
                    </select>
                </div>
                
                <div class="sorTd">
                    <input type='checkbox' onclick='setFord({{ $i }});'  />
                    <input type="hidden" name="forditott[{{ $i }}]" value="{{ $drink->close_stock_bigger }}" />
                </div>
                
                <div class="sorTd">
                    <img src='img/move.png' class='moveimg' id='{{ $i }}' width='30' height='30' alt='Áthelyezés' />
                    <img src='img/eye_on.png' width='30' height='30' style='cursor: pointer;' class='visibleImg' id='vi{{$i}}' alt='Láthatóság' />
                    <a href="index.php?page=22&did=1"><img src="img/newAkcio.png" border="0" width="30" height="30" /></a>
                </div>
                
            </div>
            <?php $i++; ?>
        @endforeach
</div>
@endsection