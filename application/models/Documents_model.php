<?php

class Documents_model extends CI_Model{

    private $baseDir = './uploads/documents'; 
  
    public function read($dir=''){
        $dir = $dir!='' ? ($this->baseDir . '/' . $dir) : $this->baseDir;
        $result = ['folders' => [], 'files' => [],'path'=>''];
        if(is_dir($dir)){
            $items = scandir($dir);        
            foreach ($items as $item) {
                if ($item === '.' || $item === '..') continue;
                $path = $dir . '/' . $item;
        
                if (is_dir($path)) {
                    $result['folders'][] = $item;
                } else {
                    $result['files'][] = $item;
                }
            }

            $result['path']=htmlspecialchars(ltrim(str_replace($this->baseDir, '', $dir),'/') ?: '');
        }
        return $result;
    }


    public function add($dir='', $folderName)
    {
        $dir = $dir!='' ? ($this->baseDir . '/' . $dir) : $this->baseDir;
        if (empty($folderName)) {
            return '';
        }

        $newFolderPath = $dir . '/' . $folderName;

        if (file_exists($newFolderPath)) {
            return "Bu adda folder var !";
        }

        if (mkdir($newFolderPath, 0777, true)) {
            return  $folderName;
        } else {
            return "Xəta: Folder yaradıla bilmədi !";
        }
    }

    
    public function delete($name,$path){
        $url='./uploads/documents/'.$path.'/'.$name;
    
        if(is_file($url)){
           return unlink($url);
        }
        else if(is_dir($url)){
            return rmdir($url);
        }
    }

    public function get_file_icon($path){
        $type=mime_content_type('uploads/documents/'.$path);
        $typeTXT='';
        switch($type){
            case 'image/jpeg':
                $typeTXT = 'jpg.png';
                break;
            case 'image/png':
                $typeTXT = 'png.png';
                break;
            case 'image/gif':
                $typeTXT = 'file.jpg';
                break;
            case 'application/pdf':
                $typeTXT = 'pdf.png';
                break;
            case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
                $typeTXT = 'doc.png';
                break;
            case 'application/msword':
                $typeTXT = 'doc.png';
                break;
            case 'application/vnd.ms-excel':
                $typeTXT = 'xls.png';
                break;
            case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
                $typeTXT = 'xls.png';
                break;
            case 'application/vnd.ms-powerpoint':
                $typeTXT = 'file.jpg';
                break;
            case 'application/vnd.openxmlformats-officedocument.presentationml.presentation':
                $typeTXT = 'file.jpg';
                break;
            case 'text/plain':
                $typeTXT = 'file.jpg';
                break;
            
        }
        return get_img($typeTXT);

    }

}

?>