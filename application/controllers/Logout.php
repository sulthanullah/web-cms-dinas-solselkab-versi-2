<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CMSku | CMS (Content Management System) Gratis
 * untuk dikembangkan
 * @version    2.4.9
 * @author     Karya Anak  Bangsa
 * @copyright  (c) 2014-2020
 * @link    Karya Anak  Bangsa
 *
 * PERINGATAN :
 * 1. TIDAK DIPERKENANKAN MENGGUNAKAN CMS INI TANPA SEIZIN DARI PIHAK PENGEMBANG APLIKASI.
 * 2. TIDAK DIPERKENANKAN MEMPERJUALBELIKAN APLIKASI INI TANPA SEIZIN DARI PIHAK PENGEMBANG APLIKASI.
 * 3. TIDAK DIPERKENANKAN MENGHAPUS KODE SUMBER APLIKASI.
 */

class Logout extends CI_Controller {

	/**
	 * Class Constructor
	 *
	 * @return Void
	 */
	public function __construct() {
		parent::__construct();
		$this->load->model('m_users');
	}

	/**
	 * Index
	 * @return Void
	 */
	public function index() {
		if (!$this->auth->hasLogin())
			return redirect(base_url());
		$id = (int) __session('user_id');
		if (!empty($id)) {
			$this->session->sess_destroy();
			$this->m_users->reset_logged_in($id);
		}
		return redirect('login', 'refresh');
	}
 }
