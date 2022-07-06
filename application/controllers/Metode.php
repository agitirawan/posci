<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Metode extends CI_Controller {
        

        public function __construct() {

            parent::__construct();
        }

        public function index(){    

            error_reporting(0);
            
            $dt_antrian = $this->db->get('transaksi');
            $dt_seluruh_antrian = array();

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

                
                $isi['total_eksekusi'] = $totalWaktu;
                array_push( $dt_seluruh_antrian, $isi );


                echo '<h4>Total Waktu yang dibutuhkan '.$totalWaktu.' detik</h4>';
                echo '<hr>';
            }




            echo '<hr>';
            echo '<h1>Eksekusi Antrian Non-Preemtive</h1>';

            foreach ($dt_seluruh_antrian as $key => $row) {
                
                $tanggal[$key]  = strtotime($row['tanggal']);
            }


            // 1. Pengurutan antrian 
            array_multisort($tanggal, SORT_ASC, $dt_seluruh_antrian);


            // 2. pengurutan apabila terdapat pelanggan datang diwaktu yang sama 
            $dt_urutan_waktu = array();
            $temporary  = array();


            $timeUniq = [];

            foreach ( $dt_seluruh_antrian AS $antrian ) {


                $strtime = strtotime( $antrian['tanggal'] );

                if ( count( $timeUniq ) > 0 ) {

                    // cek apakah pada variabel time memiliki kesamaan ?
                    if ( !in_array( $strtime, $timeUniq ) ) {

                        array_push( $timeUniq, $strtime );    
                    }

                } else {

                    array_push( $timeUniq, $strtime );
                }

                // echo '<h1>Antrian ke - '.$antrian['id_user'].'</h1>';
                // echo $antrian['tanggal'];
            }


            // urutkan antrian berdasarkan nilai duplikat
            $data_terurut = array();
            
            foreach ( $timeUniq AS $waktu ) {

                $data_antrian_sama = [];
                foreach ( $dt_seluruh_antrian AS $antrian ) {

                    $konfirmasiWaktu = strtotime( $antrian['tanggal'] );
                    if ( $waktu == $konfirmasiWaktu ) {

                        array_push( $data_antrian_sama, $antrian );
                    }
                }


                /** Cek status apabila $status_sama > 1 */
                if ( count($data_antrian_sama) > 1 ) {
                    
                    $total = array_column($data_antrian_sama, 'total_eksekusi');
                    array_multisort($total, SORT_ASC, $data_antrian_sama);

                    foreach ( $data_antrian_sama AS $antrian ) {

                        array_push( $data_terurut, $antrian );
                    }
                    

                } else {

                    foreach ( $dt_seluruh_antrian AS $antrian ) {

                        $konfirmasiWaktu = strtotime( $antrian['tanggal'] );
                        if ( $waktu == $konfirmasiWaktu ) {

                            array_push( $data_terurut, $antrian );
                            break;
                        }
                    }
                }
            }


            foreach ( $data_terurut AS $row ) {

                print_r( $row );

                echo "<hr>";
            }
        } 






        
    }
    
    /* End of file Metode.php */
    