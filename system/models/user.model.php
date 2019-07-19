<?php

class user extends model{

    public function checkLogin($data) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($data->email) && trim($data->email) != '' &&
                isset($data->wachtwoord) && trim($data->wachtwoord) != '') {
                try {

                    $checkUsers = "SELECT pk_user, admin FROM t_users WHERE email = :email AND pass = :pass"; // Query users ophalen

                    //ophalen gebruikersinformatie, testen of wachtwoord en gebruikersnaam overeenkomen
                    $this->db->select($checkUsers, array(':email' => $data->email,
                        ':pass' => /*sha1(sha1(SALT . */$data->wachtwoord /*. PEPPER))*/));

                    $user = $this->db->fetchAll();

                    $this->db->select($checkAdmin, array(':email' => $data->email,
                        ':pass' => /*sha1(sha1(SALT . */$data->wachtwoord /*. PEPPER))*/));

                    $admin = $this->db->fetchAll();

                    // Als alles klopt, inloggen
                    if (isset($user[0])) {

                        $this->db->select($checkUsers, array(':email' => $data->email,
                            ':pass' => /*sha1(sha1(SALT . */$data->wachtwoord /*. PEPPER))*/));

                        $aRow = $this->db->fetchOne();

                        return $aRow;
                    } else {
                        if (isset($admin[0])) {

                            $this->db->select($checkAdmin, array(':email' => $data->email,
                                ':pass' => /*sha1(sha1(SALT . */$data->wachtwoord /*. PEPPER))*/));

                            $aRow = $this->db->fetchOne();

                            return $aRow;
                        }
                    }
                } catch (PDOException $e) {
                    $e->getMessage();
                }
            } else {
                $this->setError('U moet uw wachtwoord en email invullen.');
                return FALSE;
            }
        }
    }

    public function addUser($data)
    {
        $query = "insert into t_users set"
            . " naam	  			= :naam"
            . ",pass		        = :pass"
            . ",admin   		    = :admin"
            . ",email       		= :email";

        //$pass = sha1(sha1(SALT . $data->pass . PEPPER));

        $this->db->prepare($query);
        $UserId = $this->db->execute(array(":naam" => $data->naam
        , ":admin" => $data->admin
        , ":email" => $data->email
        , ":pass" => $data->pass

        ));
        return $UserId;
    }

    function setError($melding)    {

        $this->melding= $melding;
    }

    public function getUsers(){
        $this->db->prepare("SELECT pk_user, naam FROM t_users");
        $this->db->execute();
        return $this->db->fetchAll();
    }

    public function addAankoop($data){
        $this->db->prepare("SELECT aantal FROM t_aankoop WHERE fk_klant = ". $data->klant ." AND fk_product = " . $data->product ."");
        $this->db->execute();
        $foo = $this->db->fetchOne();
        $aantal = $foo->aantal;
        if(!isset($aantal)){
            $query = "insert into t_aankoop set"
                . " fk_product	  	    = :product"
                . ",fk_klant		    = :klant";

            $this->db->prepare($query);
            $UserId = $this->db->execute(array(":product" => $data->product
            , ":klant" => $data->klant
            ));
            return $UserId;
        }
        else{
            $aantal++;
            $query = "UPDATE t_aankoop"
                .    " SET aantal = :aantal"
                .    " WHERE fk_klant = :klant AND fk_product = :product";

            $this->db->prepare($query);
            $UserId = $this->db->execute(array(":product" => $data->product
            , ":klant" => $data->klant
            , ":aantal" => $aantal
            ));
            return $UserId;
        }
    }

    public function getShoppingCart($id){
        $this->db->prepare("SELECT a.pk_aankoop, a.fk_product, p.merk, p.model, p.prijs, p.korting, p.img, p.pk_product, a.aantal FROM t_aankoop a LEFT JOIN t_products p ON a.fk_product = p.pk_product WHERE a.fk_klant = " . $id);
        $this->db->execute();
        return $this->db->fetchAll();
    }

    function deleteShoppingcart($data) {
        $query = "DELETE FROM t_aankoop"
            .    " WHERE pk_aankoop = :pk_aankoop";

        $this->db->prepare($query);
        $UserId = $this->db->execute(array(":pk_aankoop" => $data->pk_aankoop));
        return $UserId;
    }

}
?>