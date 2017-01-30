<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\StockHeader;

class Pub extends Model
{
    // *** PROPERTIES
    protected $table = "pub";
    public $attributes;

    // *** RELATIONS
    public function options() {
        return $this->hasMany("App\PubOptions");
    }

    public function discounted_drinks() {
        return $this->hasMany("App\DiscountedDrink");
    }

    // *** INSTANCE METHODS
    public function has_unfinished_stock() {
        $stock = StockHeader::where('finished', 'LIKE', '0')->where('pub_id', 'LIKE', $this->attributes['id'])->get();

        if (count($stock) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_unfinished_stock() {
        $unfinished_stocks = StockHeader::where('finished', 'LIKE', '0')->where('pub_id', 'LIKE', $this->attributes['id'])->get();
        foreach ($unfinished_stocks as $stock) {
            return $stock;
        }
    }

    public function get_options() {
        $options = array();
        foreach ($this->options as $option) {
            $options[$option->attributes['option']] = $option->attributes['value'];
        }
        return $options;
    }

    // *** CLASS METHODS
    public static function convert_to_array($pub_class) {
        $accessable_pubs = array();
        foreach ($pub_class as $pub) {
            $accessable_pubs[] = $pub;
        }

        return $accessable_pubs;
    }
}
