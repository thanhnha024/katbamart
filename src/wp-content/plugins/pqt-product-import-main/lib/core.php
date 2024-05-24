<?php
class PQTProductImport{
    public static function init(){

        if(!is_admin()) return;
        require_once(PQT_PRODUCT__PLUGIN_DIR . '/lib/menu/init.php');
        self::checkRedirect();
    }
    
    public static function pluginActivation(){

        update_option(PQT_PRODUCT_IMPORT_CLASS_NAME . '__redirected', 0);

    }
    public static function pluginDeactivation(){
        
    }

    static function checkRedirect(){
        $isRedirected = (int) get_option(PQT_PRODUCT_IMPORT_CLASS_NAME . '__redirected', 0);
        if(empty($isRedirected)){
            update_option(PQT_PRODUCT_IMPORT_CLASS_NAME . '__redirected', 1);
            wp_safe_redirect(admin_url( 'options-general.php?page=pqt-product-import'));
            die;
        }
    }
}