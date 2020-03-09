<?php
    class MY_Controller extends CI_Controller{
        function __construct(){
            parent::__construct();
        }
        function render_pages()
        {
            $this->load->view( 'header' );
            $this->load->view( 'nav' );
            $this->load->view($this->view, (empty($this->content)? [] : $this->content ) );
            $this->load->view( 'footer' );
        }
    }