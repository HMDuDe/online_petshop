<?php 

    class Product{
        private $prod_id, $prod_type, $prod_name, $prod_description, 
        $amount_in_stock, $prod_price, $prod_img;
        
        public function __construct($details_arr){
            $this->prod_id = $details_arr['prod_id'];
            $this->prod_type = $details_arr['prod_type'];
            $this->prod_name = $details_arr['prod_name'];
            $this->prod_description = $details_arr['prod_description'];
            $this->amount_in_stock = $details_arr['amount_in_stock'];
            $this->prod_price = $details_arr['prod_price'];
            $this->prod_img = $details_arr['prod_img'];
        }

        public static function create_product($data){

        }

        /**
         * @param null $search -> criteria to use in search
         * @param null $filter_arr -> criteria to filter search results
         * 
         * @return data array containing query results
         */
        public static function get_products($search = null, $filter_arr = null){
            $data = array();

            

            return $data;
        }
    }
?>