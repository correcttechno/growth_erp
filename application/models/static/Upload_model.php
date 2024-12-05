<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_model extends CI_Model {

    public function upload_image() {
        // Yükleme ayarları
        $config['upload_path'] = './uploads/images/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048;  // 2MB
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            // Yükleme hatası durumunda mesaj göster
            $error = $this->upload->display_errors();
            return false;
        } else {
            // Yükleme başarılı
            $data = $this->upload->data();
            $file_path = $data['full_path'];

            // Base64'e dönüştürme
            $base64_image = $this->convert_to_base64($file_path);

            // Yüklenen resmi ve base64 çıktısını döndürme
            return [
                'uploaded_image' => base_url('uploads/' . $data['file_name']),
                'base64_image' => $base64_image
            ];
        }
    }

    private function convert_to_base64($file_path) {
        $image_data = file_get_contents($file_path);
        $base64_image = base64_encode($image_data);
        $mime_type = mime_content_type($file_path);
        return 'data:' . $mime_type . ';base64,' . $base64_image;
    }
}
