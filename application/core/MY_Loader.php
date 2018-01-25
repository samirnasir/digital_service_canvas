<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Loader class */
require APPPATH."third_party/MX/Loader.php";

class MY_Loader extends MX_Loader {
	 public function admin($view, $vars = array(), $return = FALSE)
    {
        $vars['theme'] = '';
        $set_theme  = (!file_exists(VIEWPATH.$vars['theme'].'index.php')) ? 'default' : $vars['theme'];
        return $this->_ci_load(array('_ci_view' => $set_theme.'/'.$view, '_ci_vars' => $this->_ci_object_to_array($vars), '_ci_return' => $return));
    }
}