<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function getOrdersByDate(string $from, string $to): Object
    {
        $i                  = 0;
        $y                  = 0;
        $newArray           = array();
        $newArrayTwo        = array();
        $groupByDateArray   = array();
        $sql                = $this->whereBetween('date', [$from, $to])
            ->with('product', 'product.group')
            ->get();

        foreach ($sql as $val) {
            $newArray[$i]['date']               = $val->date;
            $newArray[$i]['productName']        = $val->product->name;
            $newArray[$i]['productGroupID']     = $val->product->product_group_id;
            $newArray[$i]['productGroupName']   = $val->product->group->name;
            $newArray[$i]['amount']             = $val->amount;
            $newArray[$i]['priceNetto']         = ($val->product->price_netto * $val->amount);
            $newArray[$i]['priceGross']         = ($val->product->price_netto * $val->amount) * (1.00 + $val->product->vat / 100);
            $newArray[$i]['vat']                = $val->product->vat;
            $i++;
        }

        $newCollection  = collect($newArray);
        $groupByDate    = $newCollection->groupBy('date');

        foreach ($groupByDate as $key => $val) {
            $sort = $val->sortByDesc('productGroupName');

            $groupByDateArray[$key] = $sort->groupBy('productGroupName');
        }


        foreach ($groupByDateArray as $key => $val) {
            foreach ($val as $key1 => $val1) {
                $newArrayTwo[$y]['date']    = $key;
                $priceNetto                 = 0;
                $priceGross                 = 0;

                foreach ($val1 as $val2) {
                    $priceNetto += $val2['priceNetto'];
                    $priceGross += $val2['priceGross'];
                }

                $newArrayTwo[$y]['productGroupName']    = $key1;
                $newArrayTwo[$y]['priceNetto']          = $priceNetto;
                $newArrayTwo[$y]['priceGross']          = $priceGross;
                $y++;
            }
        }

        $newCollectionTwo  = collect($newArrayTwo);

        return $newCollectionTwo;
    }

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
