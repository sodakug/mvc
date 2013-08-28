<?php
class Main extends CI_Controller
{
public function index()
{
$this->load->model('message_model');
$this->message_model->setMessage("544259139  Rungsun  Nimsamran  54/94");
$data['displayMessage'] = $this->message_model->getMessage();
$this->load->view('viewpage',$data);
}
}
?>