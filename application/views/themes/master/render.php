<?php 
// TODO: this needs a better templating system, also the config file for sitewide site or theme constants

// the header view
$this->load->view( THEMES_DIR . MASTER_DIR . 'header_view' );

// the sidebar
$this->load->view( THEMES_DIR . MASTER_DIR . 'sidebar_view' );

// the .body contents   
$this->load->view( THEMES_DIR . $SITE_TEMPLATE . $main_content);

// finally the footer   
$this->load->view( THEMES_DIR . MASTER_DIR . 'footer_view' );  

?>