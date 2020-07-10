<?php
class Banner extends CI_Controller
{
    public function add()
    {
        $this->load->view('admin/header');

        $this->form_validation->set_rules('btitle','Banner Title','trim|required|min_length[4]');
        $this->form_validation->set_rules('bdesc','Description','trim|required|min_length[15]');
        $this->form_validation->set_rules('btntitle','Button Title','trim|required|min_length[5]|max_length[25]');
        $this->form_validation->set_rules('blink','Button link','trim|required|valid_url');
        if($this->form_validation->run()==true)
        {
            $config['upload_path'] = './assets/admin/banners';
            $config['allowed_types'] = 'gif|jpg|png';
            //$config['max_size'] = '1000';
            // $config['max_width'] = '1024';
            // $config['max_height'] = '768';
            $this->upload->initialize($config);
            if($this->upload->do_upload('file'));
            {
                $data  = $this->upload->data();
                $fdata = $data['file_name'];
                $this->session->set_tempdata('error','Sorry! File did not uploaded',2);
                redirect(current_url()); 
            }
        }else{
        $this->load->view('admin/add_banner_view');
        $this->load->view('admin/footer');
        }
    }
} 
?>