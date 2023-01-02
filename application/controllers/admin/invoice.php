<?php

class Invoice extends CI_Controller{
    public function index()
    {
        $data['invoice'] = $this->model_invoice->tampil_data();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/invoice', $data);
        $this->load->view('templates_admin/footer');
    }
    public function delete($id)
	{
		$id = ['id' => $id];
		//var_dump($id);die();
		$this->db->delete('tb_invoice',$id);
		return redirect('admin/invoice');
	}
}