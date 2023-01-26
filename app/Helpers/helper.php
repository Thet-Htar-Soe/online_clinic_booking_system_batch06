<?php
if (!function_exists('price_type')) {
    function price_type($num)
    {
        return $num . '' . config('money' . '.' . config('data.price_type') . '.' . 'symbol');
    }
}
