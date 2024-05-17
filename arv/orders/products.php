<?php
function components($food_name , $food_price, $food_disc, $food_img, $food_id)
{
    
    $element = 
    "<div class=\"col-lg-4\">
    <form action=\"order.php\" method=\"POST\">
    <img
      class=\"rounded-circle\"
      src=\"$food_img\"  
      width=\"140\"
      height=\"140\"
    />
    <h2 class=\"fw-normal\">$food_name</h2>
    <p>$food_disc</p>
    <strong class=\"text-success\">Price: $food_price</strong>
    <p>
      <button  type=\"submit\" name =\"submit\" class=\"btn my-2 btn-warning\"
        >Add to cart<i class=\"mx-2 fa-solid fa-cart-plus\"></i
      ></button>
    </p>
    <input type=\"hidden\" name =\"food_id\" value =$food_id> 
    </form>
    </div>";
    echo $element;
}

function cart_element($Food_img, $Food_name, $Food_price, $product_id){
  // ? tag used in action attribute
  $element =
   "<form action=\"cart.php?action=remove&id=$product_id\" method=\"Post\" class=\"cart-item\"> 
  <div class=\"my-3 px-3 border rounded\" >
    <div class=\"my-3 row bg-white\">
      <div class=\"col-md-3\">
        <img
          src=\"$Food_img\"
          alt=\"img1\"
          class=\"img-fluid\"
          width=\"140\"
          height=\"140\"
        />
      </div>
      <div class=\"col-md-6\">
        <h5 class=\"pt-2\">\"$Food_name\"</h5>
        <small class=\"text-secondary\"> Seller: CMS</small>
        <h5 class=\"pt-2\">\"$Food_price\"</h5>
        <button type=\"submit\" class=\"btn btn-warning\">
          Save for later
        </button>
        <button
          type=\"submit\"
          class=\"btn btn-danger mx-2\"
          name=\"remove\"
        >
          Remove
        </button>
      </div>
      <div class=\"col-md-3 py-5\">
        <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
        <input type=\"text\" value=\"1\" CLASS=\"form-control w-25 d-inline\">
        <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
      </div>
    </div>
  </div>
</form>";
  
echo $element;
}
?>