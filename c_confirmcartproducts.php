<?php
error_reporting(0);
session_start();
        $cart = $_SESSION["shoping-cart"];
        if(empty($cart))
        {
            echo "<span class='text-uppercase' style='font-size:2em; color:indigo; font-weight:bolder; text-shadow:2px 2px 4px yellow'>
            Keep Items is Cart<br>
            <img height='350' width='420' src='Assets/grocery.jpg'/>
            </span>";
        }
            $output="";
                 
                foreach($cart as $c)
                {
                    $output.='
                 <small><table class="table table-borderless" id="confirmorder">
                 <tr><th  scope="col" colspan="6">PRODUCT CONFIRMATION</th></tr>';
                    if(!empty($c))
                    {
                    $output.="<tbody><form><tr scope='row'>
                    <input type='hidden' name='p_id' id='p_id' value='{$c["p_id"]}'/>
                    <input type='hidden' name='cart_id' id='cart_id' value='{$c["cart_id"]}'/>
                    <input type='hidden' name='c_id' id='c_id' value='{$c["c_id"]}'/>
                    <td scope='col' style='color:indigo;font-size:20px;'> <img name='p_img' id='p_img' class='thumbnail'src='Assets/upload-images/{$c["p_img"]}' alt='Image not found' value='{$c["p_img"]}'></img><br>
                    <input type='hidden' name='p_name' id='p_name' value='{$c["p_name"]}'>{$c["p_name"]}-{$c["p_qnt"]}{$c["p_measure"]}&nbsp;&nbsp;
                    <input type='hidden' class='iprice' name ='iprice' id='iprice' value='{$c["p_price"]}'/>{$c["p_price"]}{$c["c_format"]}  &nbsp;&nbsp; <input style='width:150px; border:2x solid indigo; color:green;' type='text' name='ctotal' id='ctotal' value='Total: {$c["p_price"]}' disabled/><br><br>
                    <input data-id='{$c["p_id"]}' class='iquantity' name='iquantity' id='iquantity' type='number' value='1' min='1' max='10' />&nbsp; &nbsp;
                    <button type='submit' class='btn btn-success add-to-order' data-id='{$c["p_id"]}'><i class='fas fa-check'></i> Confirm</button>&nbsp; &nbsp;
                    <button type='button' class='btn btn-danger del-cart' data-id='{$c["p_id"]}'><span><i class='fa fa-trash'></i>&nbsp;Remove</span></button><br>
                    </td>
                    </tr></form></tbody>";
                    }
                   
                }
           echo $output.="</table></small>";    
        ?>