<?php 

/**
 * MODEL MAIN
 */
class MainModel extends CI_Model
{
	function send_to_tb($table,$data){
        $this->db->insert($table,$data);
        return $this->db->insert_id();
    }

    function insert_doc_sec($gp,$kta){
        $this->db->insert('document_pendaftar',$gp);
        $this->db->insert('document_pendaftar',$kta);
    }

    function requestAuth($email,$password){
        return $this->db->get_where('admin', array('email'=>$email,'password'=>$password))->row_array();
    }

    function getAll($table){
        $this->db->select('
            id_member,
            nama,
            tempat_lahir,
            tanggal_lahir,
            jenis_kelamin,
            provinsi,
            kabupaten,
            kecamatan,
            desa_kelurahan,
            rt,
            rw,
            no_telp,
            email,
            tahun_pengalaman,
            TO_BASE64(sertifikat_vaksin) as vaksin64,
            created_at,
            TO_BASE64(foto) as foto64
            ');
        $this->db->from($table);
        return $this->db->get()->result_array();
    }

    // ////////////////////////////////////////////////////////////////////////////

    function getCSM($offset,$limit,$search="") {

        $this->db->select('
            id_member,
            nama,
            no_telp,
            email,
            tahun_pengalaman,
            sertifikat_paklaring,
            created_at,
            TO_BASE64(foto) as foto64
            ');
        $this->db->order_by('created_at', 'DESC');
        $this->db->from('member_cs');

        if ($search != NULL) {
            $this->db->like('nama', $search);
        }

        $this->db->limit($limit,$offset);
        return $this->db->get()->result_array();
    }

        // Select total records
    function countCSM($search="") {

        $this->db->select('count(*) as allcount');
        $this->db->from('member_cs');
        
        if ($search != NULL) {
            $this->db->like('nama', $search);
        }

        $query = $this->db->get();
        $result = $query->result_array();
     
        return $result[0]['allcount'];
    }

    // ////////////////////////////////////////////////////////////////////////////

    function getDRV($offset,$limit,$search="") {

        $this->db->select('
            id_member,
            nama,
            no_telp,
            email,
            tahun_pengalaman,
            sim_a,
            sim_b1,
            sim_b2,
            created_at,
            TO_BASE64(foto) as foto64
            ');
        $this->db->order_by('created_at', 'DESC');
        $this->db->from('member_driver');

        if ($search != NULL) {
            $this->db->like('nama', $search);
        }

        $this->db->limit($limit,$offset);
        return $this->db->get()->result_array();
    }

        // Select total records
    function countDRV($search="") {

        $this->db->select('count(*) as allcount');
        $this->db->from('member_driver');
        
        if ($search != NULL) {
            $this->db->like('nama', $search);
        }

        $query = $this->db->get();
        $result = $query->result_array();
     
        return $result[0]['allcount'];
    }

    // ////////////////////////////////////////////////////////////////////////////

    function getSCY($offset,$limit,$search="") {

        $this->db->select('
            id_member,
            nama,
            no_telp,
            email,
            tahun_pengalaman,
            kta,
            gada_pratama,
            created_at,
            TO_BASE64(foto) as foto64
            ');
        $this->db->order_by('created_at', 'DESC');
        $this->db->from('member_security');

        if ($search != NULL) {
            $this->db->like('nama', $search);
        }

        $this->db->limit($limit,$offset);
        return $this->db->get()->result_array();
    }

        // Select total records
    function countSCY($search="") {

        $this->db->select('count(*) as allcount');
        $this->db->from('member_security');
        
        if ($search != NULL) {
            $this->db->like('nama', $search);
        }

        $query = $this->db->get();
        $result = $query->result_array();
     
        return $result[0]['allcount'];
    }
    
    // ////////////////////////////////////////////////////////////////////////////

    function getUMUM($offset,$limit,$search="") {

        $this->db->select('
            id_member,
            nama,
            no_telp,
            email,
            tahun_pengalaman,
            created_at,
            TO_BASE64(foto) as foto64
            ');
        $this->db->order_by('created_at', 'DESC');
        $this->db->from('member_umum');

        if ($search != NULL) {
            $this->db->like('nama', $search);
        }

        $this->db->limit($limit,$offset);
        return $this->db->get()->result_array();
    }

        // Select total records
    function countUMUM($search="") {

        $this->db->select('count(*) as allcount');
        $this->db->from('member_umum');
        
        if ($search != NULL) {
            $this->db->like('nama', $search);
        }

        $query = $this->db->get();
        $result = $query->result_array();
     
        return $result[0]['allcount'];
    }
}

?>