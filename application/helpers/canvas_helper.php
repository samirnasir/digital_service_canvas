<?php defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('asset_url'))
{
    function asset_url($dirname=false)
    {
        $dirname = ($dirname) ? $dirname : 'default';
        $path = base_url('themes/'.$dirname.'/assets/');
        return $path;
    }

    if(!function_exists('get_user'))
    {
        function get_user($param)
        {
            $CI =& get_instance();
            $data = $CI->ion_auth->user()->row();
            return $data->$param;;
        }
    }
}
