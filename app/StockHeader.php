<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockHeader extends Model
{
    protected $table = "stock_header";
    public $attributes;

    public function discounted_drinks() {
        return $this->hasMany('App\DiscountedStock');
    }

    public function creditcard_payment() {
        return $this->belongsTo("App\CreditcardPayment");
    }

    public function tip() {
        return $this->belongsTo('App\Tip');
    }

    public function other_products() {
        return $this->hasMany('App\OtherProducts');
    }

    public function food_yields() {
        return $this->hasMany('App\FoodYield');
    }

    public function outlays() {
        return $this->hasMany('App\Outlay');
    }

    public function corrections() {
        return $this->hasMany('App\Corrections');
    }

    public function lottery_yields() {
        return $this->hasMany('App\LotteryYield');
    }

    public function messages() {
        return $this->hasMany('App\StockMessages');
    }

    public function modifiable_stock_products() {
        //Dunno yet, its gonna be an interesting query
    }

    public function extra_stocks_yield() {
        return $this->hasMany('App\ExtraStockValues');
    }

    public function pub_holds() {
        return $this->belongsTo('App\Pub');
    }

    public function bosses_consume() {
        return $this->hasMany('App\BossConsume');
    }

    public function lottery_outlays() {
        return $this->hasMany('App\LotteryOutlay');
    }

    public function rows() {
        return $this->hasMany('App\StockRow');
    }

    public function summary() {
        return $this->hasMany('App\StockSummary');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
