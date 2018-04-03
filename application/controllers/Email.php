<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
  /**
   *
   */
class Email extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('MyPHPMailer'); // load library
        //$this->load->model('model_app');
    }

    function emailSend(){
      		$email = $this->input->post('email');
      		$nama = $this->input->post('nama');
      		$subjek = $this->input->post('judul');
      		$pesan = $this->input->post('isi');

        $fromEmail = "info@ptkriyajaya.com";
        $mail = new PHPMailer();
        $mail->SMTPDebug = 2;
        $mail->IsHTML(true);    // set email format to HTML
        $mail->IsSMTP();   // we are going to use SMTP
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mail->Host       = "srv20.niagahoster.com";      // setting GMail as our SMTP server
        $mail->Port       = 465;                   // SMTP port to connect to GMail
        $mail->Username   = $fromEmail;  // alamat email kamu
        $mail->Password   = "kriya12345";            // password GMail
        $mail->SetFrom('info@ptkriyajaya.com', 'info@ptkriyajaya.com');  //Siapa yg mengirim email
        $mail->Subject    = $subjek;
        $mail->Body       = 
        "Email : ".$email."<br>Nama : ".$nama."<br>".$subjek."<br>Pesan : ".$pesan;
        $toEmail = "dimasluthfipratama@gmail.com"; // siapa yg menerima email ini
        $mail->AddAddress($toEmail);

        if(!$mail->Send()) {
            echo "Eror: ".$mail->ErrorInfo;
        } else {
        redirect("/");
        }
    }
}
?>
