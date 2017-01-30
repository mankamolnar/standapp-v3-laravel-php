<?php

namespace App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Pub;

class UIelements
{
    public $elements;

    public function __construct() {
        $this->elements = array();
        //$this->user = User::find();
    }

    public function render_top_menu() {
        
        if (session('current_pub') != null) {
            
            $current_pub = Pub::find(session('current_pub'));
            $pubOptions = $current_pub->get_options();

            $str = "<div id=\"menuContainer\">
                        <div id='MenuFooldal'></div>
            ";

            if (!$current_pub->has_unfinished_stock()) {
                $str = $str."<div id='MenuStand'></div>";
            }

            if (isset($pubOptions['likemywifi']) && $pubOptions['likemywifi'] == 1) {
                $str .= "<div id='MenuBirthday'></div>";
            }

            if (isset(Auth::user()->attributes['tether'])) {
                
                if (Auth::user()->attributes['tether'] > 0) {
                    $str = $str."<div id='MenuSearch'></div>
                                    <div id='MenuStat'></div>
                                    <div id='MenuKocsmaBeall'></div>";
                }
                        
                if (Auth::user()->attributes['tether'] > 1) {
                    $str = $str."<div id='MenuItal'></div>
                                    <div id='MenuFelh'></div>";
                }
                        
                if (Auth::user()->attributes['tether'] > 2) {
                    $str = $str."<div id='MenuUp'></div>
                                    <div id='MenuKocsma'></div>";
                                    
                    if (isset($pubOptions["sorsjegy"]) && $pubOptions["sorsjegy"] == "1") {
                        $str = $str."<div id='MenuSorsjegy'></div>";
                    }
                }
                
            }
            
            //logout, personal setting, icons append to the end
            $str = $str."
                    <div id='MenuSettings'></div>
                    <div id='MenuLogout'></div>
                    
                    <div id='MenuPubSelector'>
                        ".$this->generate_accessable_pubs_select()."
                    </div>    
                </div>
            ";

            return $str;

        }

    }

    public function generate_accessable_pubs_select() {
        $accessable_pubs = User::_accessable_pubs();
        $options = "";
        foreach($accessable_pubs as $pub) {
            $selected = "";
            if ($pub->pub->id == session('current_pub')) {
                $selected = "selected='selected'";
            }
            $options .= "<option value='".$pub->pub->id."' ".$selected.">".$pub->pub->name."</option>";
        }

        $str = '
            <form action="/kocsma-valtas" method="post">
                <input type="hidden" name="pselect" value="TRUE">
                <input type="hidden" name="_token" value="'.csrf_token().'">

                <select name="pub" id="pubselect">
                    '.$options.'
                </select>

                <input type="submit" value="Kiválaszt!">
            </form>
        ';
        return $str;
    }

    public function render_main_menu() {
        //FOOTAGE
		$foot = "Online standoló alkalmazás v3.0 ALFA;";
		$current_pub = Pub::find(session('current_pub'));
        $pubOpitons = $current_pub->get_options();

        $str = "<hr />";
		
		//volt-e felvitt stand
		$volteStand =  $current_pub->has_unfinished_stock();
		
		//(FIX MENÜ RÉSZ MINDENKINEK!)
		//ha van nem befejezett standod
		if ($volteStand) {

            $unfinished_stock = $current_pub->get_unfinished_stock();
			
			if ($unfinished_stock->attributes['user_id'] == Auth::user()->attributes['id']) {
				$str = $str."<b>Még van be nem fejezett standod!</b><br /><a href='index.php?page=3&id=".$unfinished_stock->attributes['id']."&mod=0' class='anchor2'>".$unfinished_stock->attributes['date']."</a><br /><br />
							 <a href='index.php?page=25&id=".$unfinished_stock->attributes['id']."' class='anchor2'>stand átadása</a> <br />";
			} else {
				$str = $str."<b>Nem lehet új standot kezdeni, amíg az előző nincs lezárva!</b><br /><br />";
				
				//stand forced close
				$tmpDate = $unfinished_stock;
				$tmpDate = explode("-", $tmpDate);
				
				if ($tmpDate[1] < date("m") || $tmpDate[2] < date("d")) {
					$str = $str."<a href='index.php?page=3&id=".$unfinished_stock->attributes['id']."&mod=0&forceclose=1' class='anchor2'>Stand lezárás</a><br />";
				}
			}
		}
		
		//ALKALMAZOTTÓL FELFELE: dashstat
		if (Auth::user()->attributes['tether'] > 0) {
			
			//likemywifi ha van
            $lmwresult = false;
			if (isset($pubOpitons['likemywifi']) && $pubOptions['likemywifi'] == "1") {
				$lmwresult = $pubOptions['likemywifiID'];
				
			}
			
			//ha plusz raktár be van kapcsolva akkor a dashstat nem tölt be.
			if (isset($pubOptions['pluszRaktar']) && $pubOpitons['pluszRaktar'] != "1") {
				//include_once("php/dashstat.php");
				//$str .= dashstat($kapcsolat);

			}
			
			//likemywifi ha van
			if (is_array($lmwresult)) {
				
				//szülinapok lekérése
				//include_once("php/dash-birthday.php");
				//$str .= dashBirthday($lmwresult['value']);

			}
		
		//ALKALMAZOTT!
		} else {
			
			//ha nem volt félkész stand, új felvitele
			if ($volteStand == false) {
				
				$str = $str.'<a href="index.php?page=1" class="anchor2">Új elszámolás felvitele</a> <br />';
				
			}
			
		}
		
        $str .= '<a href="/logout" class="anchor2">Kijelentkezés</a><br /><hr />';
		return $str.$foot;
    }

    public function drop_elements() {
        $this->elements = array();
    }
}
