<?php

namespace Devtech\RandomString;

class RandomString {
    
    public static function getChars($length = 32) {
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        
        if (!is_int($length) || $length < 0) {
            throw new Exception('Length not valid.');
        }
        
        $chars_len = strlen($chars) - 1;
        
        $output = '';
        
        foreach (range(0, $length - 1) as $value) {
            $output .= $chars[mt_rand(0, $chars_len)];
        }
        
        return $output;
    }
    
}
