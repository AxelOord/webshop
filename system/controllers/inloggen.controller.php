<?php

class inloggen extends controller {

    function index() {
        $login_view = new login_view();

        //$users->test();

        unset($_SESSION['login']);

        if ($this->post('inloggen') <> '') {
            // Form data ophalen en clean maken
            $data = (object) array('email' => $this->post('email')
            , 'wachtwoord' => $this->post('wachtwoord')
            );

            // Form data valideren (voor niet javascript browsers)
            if ($data->email == '')
                $login_view->errors->add('email_leeg');
            if ($data->wachtwoord == '')
                $login_view->errors->add('wachtwoord_leeg');

            // Als er geen fouten zijn, form actie uitvoeren
            if ($login_view->errors->count() == 0) {
                $user = new user();
                $result = $user->checkLogin($data);

                if (isset($result->pk_user)) {
                    $this->set_loggedin($result->pk_user);
                    if ($result->admin == 1){
                        $this->set_admin();
                    }


                    if ($result->last_pass_ch > date("Y-m-d", strtotime("-6 months"))) {

                    } else {
                        $this->redirect('home');
                    }
                } else {
                    $login_view->errors->add('login_incorrect', $result);
                }
            }

            // Form data re-populaten
            $login_view->assign('form', $data);
        }
        $login_view->show();

    }

    function aanmelden() {
        //$login_view = new login_view();

        $user = new user();

        if ($this->post('register') <> '') {
            // Form data ophalen en clean maken
            $data = (object)array('naam' => $this->post('naam')
            , 'pass' => $this->post('password')
            , 'admin' => 0
            , 'email' => $this->post('email')
            );

            //$data->pass = $this->getRandomPassword();

            $user->addUser($data);
            $this->redirect('home');

        }

        $this->view->show('login/aanmelden');

    }

    private function getRandomPassword($l = 8, $c = 3, $n = 2, $s = 1)
    {
        // get count of all required minimum special chars
        $count = $c + $n + $s;

        // all inputs clean, proceed to build password

        // change these strings if you want to include or exclude possible password characters
        $chars = "abcdefghijklmnopqrstuvwxyz";
        $caps = strtoupper($chars);
        $nums = "0123456789";
        $syms = "!@#$%^&*()-+?";
        $out = '';

        // build the base password of all lower-case letters
        for ($i = 0; $i < $l; $i++) {
            $out .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }

        // create arrays if special character(s) required
        if ($count) {
            // split base password to array; create special chars array
            $tmp1 = str_split($out);
            $tmp2 = array();

            // add required special character(s) to second array
            for ($i = 0; $i < $c; $i++) {
                array_push($tmp2, substr($caps, mt_rand(0, strlen($caps) - 1), 1));
            }
            for ($i = 0; $i < $n; $i++) {
                array_push($tmp2, substr($nums, mt_rand(0, strlen($nums) - 1), 1));
            }
            for ($i = 0; $i < $s; $i++) {
                array_push($tmp2, substr($syms, mt_rand(0, strlen($syms) - 1), 1));
            }

            // hack off a chunk of the base password array that's as big as the special chars array
            $tmp1 = array_slice($tmp1, 0, $l - $count);
            // merge special character(s) array with base password array
            $tmp1 = array_merge($tmp1, $tmp2);
            // mix the characters up
            shuffle($tmp1);
            // convert to string for output
            $out = implode('', $tmp1);
        }

        return $out;
    }



}

?>