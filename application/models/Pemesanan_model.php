<?php

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Pemesanan_model extends CI_Model {
               
        public function ambil_transaksi() {

            $transaksi = array();
            
            $data = $this->db->get('transaksi');
            
            if ( $data->num_rows() > 0 ) {

                foreach ( $data->result_array() AS $row ) {

                    // detail menu
                    $this->db->select('transaksi_detail.*, menu.nam_menu, menu.penyelesaian')->from('transaksi_detail');
                    $this->db->join('menu', 'menu.id_menu = transaksi_detail.id_menu');
                    $query = $this->db->get()->result_array();

                    $row['detail'] = $query;
                    array_push( $transaksi, $row );
                }
            }


            return $transaksi;
        }


        public function ambil_transaksi_detail( $where ) {

            $transaksi = array();
            
            $this->db->where($where);
            $data = $this->db->get('transaksi');
            
            if ( $data->num_rows() > 0 ) {

                foreach ( $data->result_array() AS $row ) {

                    // detail menu
                    $this->db->select('transaksi_detail.*, menu.nam_menu, menu.penyelesaian')->from('transaksi_detail');
                    $this->db->join('menu', 'menu.id_menu = transaksi_detail.id_menu');
                    $this->db->where('id_transaksi', $row['id_transaksi']);
                    $query = $this->db->get()->result_array();

                    $row['detail'] = $query;
                    $row['total_pesan'] = count($query);
                    array_push( $transaksi, $row );
                }
            }


            return $transaksi;
        }


        public function konfirmasi_pemesanan( $id_transaksi, $status ){

            $data = array(

                'status'            => $status,
                'tanggal_selesai'   => date('Y-m-d H:i:s')
            );

            $this->db->where('id_transaksi', $id_transaksi);
            $this->db->update('transaksi', $data);
        }
    
    }
    
    /* End of file Pemesanan_model.php */
    