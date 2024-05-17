<?php
function components($food_name , $food_price, $food_disc, $food_img, $food_id)
{
    
    $element = 
    "<div class=\"col-lg-4\">
    <img
      class=\"rounded-circle\"
      src=\"$food_img\"  
      width=\"140\"
      height=\"140\"
    />
    <h2 class=\"fw-normal\">$food_name</h2>
    <p>$food_disc</p>
    <strong class=\"text-success\">Price: $food_price</strong>
    </div>";
    echo $element;
}

?>