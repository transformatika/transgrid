<?php
/**
 * (c)2013 Transformatika
 * User: ag <agung@transformatika.com>
 * Date: 6/14/13
 * Time: 10:36 AM
 *
 */
if ( strpos(strtolower($_SERVER['SCRIPT_NAME']),strtolower(basename(__FILE__))) ){ die(header('HTTP/1.0 403 Forbidden')); }
class fn {

    public static function generate_id($string=false) {

        $times = microtime(true);
        $times = str_replace(',', '.', $times);
        $tm    = explode('.', $times);
        if (isset($tm[1])) {
            if ($tm[1] < 1000 && $tm[1] >= 100) {
                $ms = (int)$tm[1] . '0';
            } elseif ($tm[1] < 100 && $tm[1] >= 10) {
                $ms = (int)$tm[1] . '00';
            } elseif ($tm[1] < 10 && $tm[1] > 0) {
                $ms = (int)$tm[1] . '000';
            } elseif ($tm[1] == 0) {
                $ms = (int)$tm[1] . '0000';
            } else {
                $ms = (int)$tm[1];
            }
        } else {
            $ms = 0000;
        }
        usleep(1);
        $uniqueid =  $tm[0] . $ms;
        if($string == false){
            return $uniqueid;
        }else{
            $salt = self::genRndDgt(8);
            return md5($salt.$uniqueid);
        }

    }

    public static function getId() {
        return self::generate_id();
    }

    public static function log_error($string){
		
	}
	public static function log($string){
		
	}
}
