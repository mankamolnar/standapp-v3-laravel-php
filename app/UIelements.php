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

    public function drop_elements() {
        $this->elements = array();
    }
}
