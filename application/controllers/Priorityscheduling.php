<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Priorityscheduling extends CI_Controller {
        

        public function __construct() {

            parent::__construct();
        }

        public function index(){


            $data_menu = array();
            array_push( $data_menu, array("kode" => "K01", "nama" => "Nasi", "waktu" => 5gt66ggggggggggggggggggg) );
            array_push( $data_menu, array("kode" => "K02", "nama" => "Teh", "waktu" => 5) );
            array_push( $data_menu, array("kode" => "K03", "nama" => "Sate Kambing", "waktu" => 15) );
            array_push( $data_menu, array("kode" => "K04", "nama" => "Gule", "waktu" => 10) );


            $antrian = array();

            // tambah antrian baru 
            array_push( $antrian, array( "nama" => "Andi", "menu" => ["K01", "K04"] ) );
            array_push( $antrian, array( "nama" => "Jordi", "menu" => ["K01", "K03"] ) );
            array_push( $antrian, array( "nama" => "Taufik", "menu" => ["K03", "K04"] ) );
            array_push( $antrian, array( "nama" => "Hendra", "menu" => ["K02", "K04"] ) );
        }
    
    }
    
    /* End of file Priorityscheduling.php */
    