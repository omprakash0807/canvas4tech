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
            $this->input->post('bti');
        }else{
        $this->load->view('admin/add_banner_view');
        $this->load->view('admin/footer');
        }
    }
} 
?>