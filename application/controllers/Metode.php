<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Metode extends CI_Controller {
        

        public function __construct() {

            parent::__construct();
        }

        public function index(){    

            error_reporting(0);
            
            $dt_antrian = $this->db->get('transaksi');

            foreach ( $dt_antrian->result_array() AS $isi ){

                echo '<h2>Antrian nomor - '.$isi['id_user'].'</h2>';
                echo '<b>Pemesanan pada '.$isi['tanggal'].'</b><br><br><br>';

                // ambil data pemesanan (transaksi_detail)
                $whereTransaksiDetail = array('id_transaksi' => $isi['id_transaksi']);
                $dt_rincian = $this->db->where($whereTransaksiDetail)->get('transaksi_detail');

                // tampilkan rincian transaksi
                $totalWaktu = 0;
                foreach ( $dt_rincian->result_array() AS $isi_rincian ) {


                    // tampil nama menu berdasarkan id_menu 
                    $whereMenuId = array('id_menu' => $isi_rincian['id_menu']);
                    $dt_menu = $this->db->where( $whereMenuId )->get('menu')->row_array();

                    echo '&emsp;';
                    echo $dt_menu['nam_menu'].' jumlah : '. $isi_rincian['jumlah'].'<br>';
                    echo "&emsp;<small>pesanan ini memakan waktu ". $dt_menu['penyelesaian'].' detik</small><br><br>';


                    // waktu semua dijumlahkan dengan rumus
                    $totalWaktu = $totalWaktu + ($dt_menu['penyelesaian'] * $isi_rincian['jumlah']);
                }

                echo '<h4>Total Waktu yang dibutuhkan '.$totalWaktu.' detik</h4>';
                echo '<hr>';
            }




            echo '<hr>';
            echo '<h1>Eksekusi Antrian Non-Preemtive</h1>';

            $data = $dt_antrian->result_array();
            foreach ($data as $key => $row) {
                
                $tanggal[$key]  = strtotime($row['tanggal']);
            }


            // 1. Pengurutan antrian 
            array_multisort($tanggal, SORT_ASC, $data);


            // 2. pengurutan apabila terdapat pelanggan datang diwaktu yang sama 
            $dt_urutan_waktu = array();
            $temporary  = array();

            foreach ( $data AS $antrian ) {


                $kesamaan = array();
                array_push( $kesamaan, $antrian );
                // cek data yang memiliki waktu antrian yang sama
                foreach ( $data AS $antrian_lain ) {

                    // mencocokan dan pastikan bukan dicocokan dengan antrian dia sendiri
                    if ( $antrian['id_user'] != $antrian_lain['id_user'] ) {

                        // cek kesamaan tanggal
                        if ( $antrian['tanggal'] == $antrian_lain['tanggal'] ) {

                            array_push( $kesamaan, $antrian_lain );
                        }
                    }
                }


                // antrian bersifat unik alias tidak memiliki kesamaan dengan antrian lain.
                if ( count( $kesamaan ) == 1 ) {

                    array_push( $dt_urutan_waktu, $antrian );
                }

                // echo '<h1>Antrian ke - '.$isi['id_user'].'</h1>';
                // echo $isi['tanggal'];
            }
        }





        public function uji(){


        }    
    }
    
    /* End of file Metode.php */
    