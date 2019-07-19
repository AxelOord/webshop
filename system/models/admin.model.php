<?php

class admin_m extends model{

    function get_products() {
        $getProducts = "SELECT pk_product, merk, model, prijs, aantal, img, display, korting, beschrijving FROM t_products";

        $this->db->select($getProducts);

        $user = $this->db->fetchAll();

        return $user;
    }

    function get_products_show() {
        $getProducts = "SELECT pk_product, merk, model, prijs, aantal, img, display, korting, discount FROM t_products where display = '1' AND highlight = '0'";

        $this->db->select($getProducts);

        $user = $this->db->fetchAll();

        return $user;
    }

    function get_products_highlight() {
        $getProducts = "SELECT pk_product, merk, model, prijs, aantal, img, display, korting, discount FROM t_products where display = '1' AND highlight = '1' LIMIT 3";

        $this->db->select($getProducts);

        $user = $this->db->fetchAll();

        return $user;
    }

    function get_products_discount() {
        $getProducts = "SELECT pk_product, merk, model, prijs, aantal, img, display, korting FROM t_products where display = '1' AND discount = '1' LIMIT 3";

        $this->db->select($getProducts);

        $user = $this->db->fetchAll();

        return $user;
    }

    function get_product($url) {
        $getProduct = "SELECT pk_product, merk, model, prijs, aantal, img, display, korting, discount, beschrijving FROM t_products where display = '1' AND pk_product = '". $url ."'";

        $this->db->select($getProduct);

        $user = $this->db->fetchOne();

        return $user;
    }

    function get_admin_product($url) {
        $getProduct = "SELECT pk_product, merk, model, prijs, aantal, img, display, korting, discount, beschrijving FROM t_products where pk_product = '". $url ."'";

        $this->db->select($getProduct);

        $user = $this->db->fetchOne();

        return $user;
    }

    function editProduct($data) {
        $query = "UPDATE t_products"
            .    " SET merk         = :merk"
            .    ", model           = :model"
            .    ", prijs           = :prijs"
            .    ", aantal          = :aantal"
            .    ", korting         = :korting"
            .    ", beschrijving    = :beschrijving"
            .    ", discount        = :discount"
            .    " WHERE pk_product = :pk_product";

        $this->db->prepare($query);
        $UserId = $this->db->execute(array(":pk_product" => $data->pk_product
        , ":merk"           => $data->merk
        , ":model"          => $data->model
        , ":prijs"          => $data->prijs
        , ":aantal"         => $data->aantal
        , ":korting"        => $data->korting
        , ":beschrijving"   => $data->beschrijving
        , ":discount"       => $data->discount
        ));
        return $UserId;
    }

    function deleteProduct($data) {
        $query = "DELETE FROM t_products"
            .    " WHERE pk_product = :pk_product";

        $this->db->prepare($query);
        $UserId = $this->db->execute(array(":pk_product" => $data->pk_product));
        return $UserId;
    }

}
?>