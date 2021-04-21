<?php
class user
{
    //定义用户对象
    var $userName = '';
    var $passWord = '';
    var $emil = '';
    var $gender = '';
    function get_seat(string $string,  array $array)
    {
        //返还用户名在文件中的位置，以确定用户名的密码
        for ($n = 0; $n <= count($array); $n++) {
            if ($string == $array[$n]) {
                return $n;
                break;
            }
        }
        return -1;
    }
}
