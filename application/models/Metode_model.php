<?php


    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Metode_model extends CI_Model {
    
        
        public function nonpreemtive( $data_transaksi ) {
            
            // 1. antrian keseluruhan
            $dt_seluruh_antrian = array();
            
            // 2. Menjumlahkan total waktu layanan
            foreach ( $data_transaksi AS $isi ) {

                // ambil data pemesanan (transaksi_detail)
                $whereTransaksiDetail = array('id_transaksi' => $isi['id_transaksi']);
                $dt_rincian = $this->db->where($whereTransaksiDetail)->get('transaksi_detail');

                // total
                $totalWaktu = 0;
                foreach ( $dt_rincian->result_array() AS $isi_rincian ) {


                    // tampil nama menu berdasarkan id_menu 
                    $whereMenuId = array('id_menu' => $isi_rincian['id_menu']);
                    $dt_menu = $this->db->where( $whereMenuId )->get('menu')->row_array();

                    // waktu semua dijumlahkan dengan rumus
                    $totalWaktu = $totalWaktu + ($dt_menu['penyelesaian'] * $isi_rincian['jumlah']);
                }

                $isi['total_eksekusi'] = $totalWaktu;
                array_push( $dt_seluruh_antrian, $isi );
            }



            // 3. mensortir berdasarkan waktu kedatangan (arrival)
            $tanggal = array_column($dt_seluruh_antrian, 'tanggal');
            array_multisort($tanggal, SORT_ASC, $dt_seluruh_antrian);


            // 4. ambil data waktu
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
            }


            // 5. sortir waktu eksekusi layanan (burst time) apabila memiliki kedatangan waktu yang sama
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





            // hasil akhir
            return $data_terurut;
        }
    }
    
    /* End of file Metode_model.php */
    