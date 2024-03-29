<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
	}

	public function index()
	{
		$this->template->template_admin('admin/v_index');
	}

	public function list_soal()
	{
		$this->template->template_admin('admin/v_list_soal');
	}

	public function tambah_soal($bag)
	{
		$data['bag']=$bag;
		$this->form_validation->set_rules('soal[]', 'Soal','required');
		if ($this->form_validation->run()==false) {
			$this->template->template_admin('admin/v_tambah_soal',$data);
		}else{
			$jenis_soal = $bag;

			$e_soal =implode('~//~', $this->input->post('soal[]')) ;
			$soal = explode('~//~', $e_soal);

			$e_opt_a =implode('~//~', $this->input->post('opt_a[]')) ;
			$opt_a = explode('~//~', $e_opt_a);

			$e_opt_b =implode('~//~', $this->input->post('opt_b[]')) ;
			$opt_b = explode('~//~', $e_opt_b);

			$e_opt_c =implode('~//~', $this->input->post('opt_c[]')) ;
			$opt_c = explode('~//~', $e_opt_c);

			$e_opt_d =implode('~//~', $this->input->post('opt_d[]')) ;
			$opt_d = explode('~//~', $e_opt_d);

			$e_opt_e =implode('~//~', $this->input->post('opt_e[]')) ;
			$opt_e = explode('~//~', $e_opt_e);

			$e_jwb =implode('~//~', $this->input->post('jwb[]')) ;
			$jwb =explode('~//~', $e_jwb) ;

			$this->db->delete('tbl_soal',['f_kode_soal'=>$bag]);

			$a=-1;
			while($a<count($soal)-1){
				$a++;
				$data=[
					'f_kode_soal'=>$bag,
					'f_soal'=>$soal[$a],
					'f_no_soal'=>$a+1,
					'f_jawaban'=>$jwb[$a],
					'f_status'=>'aktif',
					'f_opt_a'=>$opt_a[$a],
					'f_opt_b'=>$opt_b[$a],
					'f_opt_c'=>$opt_c[$a],
					'f_opt_d'=>$opt_d[$a],
					'f_opt_e'=>$opt_e[$a]
					];
				$this->db->insert('tbl_soal',$data);
			}

			$this->session->set_flashdata('alert', 'Data soal berhasil di tambahkan');
			redirect('admin/list_soal');
		}
	}

	public function detail_soal()
	{
		$this->template->template_admin('admin/v_detail_soal');
	}

	public function tambah_lowongan()
	{
		$this->form_validation->set_rules('bagian','Bagian','required');
		$this->form_validation->set_rules('tgl_penutupan','Tanggal Penutupan','required');
		$this->form_validation->set_rules('syarat','Syarat','required');
		if ($this->form_validation->run()==true) {
			$bagian = $this->input->post('bagian');
			$tgl_penutupan = $this->input->post('tgl_penutupan');
			$syarat = $this->input->post('syarat');

			$data = [
				'f_syarat' => $syarat,
				'f_tgl_post' => date('Y-m-d'),
				'f_kode_bag' => $bagian,
				'f_tgl_penutupan' => $tgl_penutupan
			];
			$this->db->insert('tbl_lowongan',$data);
			$this->session->set_flashdata('alert','Data lowongan baru berhasil di tambahkan');
			redirect('admin/tambah_lowongan');
		}else{
			$this->template->template_admin('admin/v_tambah_lowongan');
		}
	}

	public function daftar_pelamar()
	{
		$data['cari']=$this->input->post('cari');
  		$data['pelamar']= $this->db->get('tbl_pelamar')->result_array();
		$this->template->template_admin('admin/v_daftar_pelamar',$data);
	}

	public function print_data_pelamar()
	{
		$this->template->template_admin('admin/v_print_data_pelamar');
	}
}
