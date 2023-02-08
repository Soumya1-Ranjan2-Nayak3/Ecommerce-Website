<?php

namespace database;

class Cart
{
    public $db = null;

    public function __construct(DBConnection $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    //inserting data into cart table
    public function insertintoCart($params = null, $table = "cart")
    {
        if($this->db->con != null)
        {
            if($params != null)
            {
                $columns = implode(',', array_keys($params));
                $values = implode(',' , array_values($params));

                $query = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                //EXECUTE QUERY
                return $this->db->con->query($query);
            }
        }
    }

    // to get userid and itemid into the cart table
    public function addToCart($userid,$itemid)
    {
        if(isset($userid) && isset($itemid))
        {
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid
            );

            // insert item into cart
            $result = $this->insertintoCart($params);
            if($result)
            {

                header("Location:".$_SERVER['PHP_SELF']);
            }
        }
    }

    // total amount in the cart

    public function getSum($arr)
    {
        if(isset($arr))
        {
            $sum = 0;
            foreach ($arr as $item)
            {
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f',$sum);
        }
    }

    // deleting item form the cart table
    public function deleteCart($item_id = null,$table = 'cart')
    {
        if($item_id != null)
        {
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
            if($result)
            {
                header("Location:".$_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    // get itemid from the cart to remove duplicates item been added
    public function getCartid($cartArray = null,$key = "item_id")
    {
        if($cartArray != null)
        {
            $cart_id = array_map(function ($value) use ($key) {
                return $value[$key];
            },$cartArray);
            return $cart_id;
        }
    }

}