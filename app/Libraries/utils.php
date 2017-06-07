<?php namespace App\Libraries {
    class utils {

        private $token = 'hcLAyKIaiFqH9BRz77Mc5rI1AzODeaw7cQaeoIi2';
        private $reg_exp = '/(?!https:\/\/lovefoodies\.us(.*).png)(https:\/\/lovefoodies\.us)/';

        public function get_data($api, $view) {
            $url = "https://lovefoodies.us/" . $api . "?view=" . $view;
            $headers = array(
                            'api-custom-token: ' . $this->token
                       );
            $ch = curl_init();
            $timeout = 5;
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $data = curl_exec($ch);
            curl_close($ch);
            return preg_replace($this->reg_exp, "", $data);        
        }
    }
}
?>
