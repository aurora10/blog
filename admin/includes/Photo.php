<?php


class Photo extends DB_object
{
    //vars
    protected static $db_table = "photos";
    protected static $db_table_fields = array('title', 'caption','description', 'filename','alternate_text','type', 'size');

    public $id;
    public $title;
    public $caption;
    public $description;
    public  $filename;
    public $alternate_text;
    public  $type;
    public $size;

    public $tmp_path;
    public $upload_directory = 'img';


    //methods

    public function picture_path() {
        return $this->upload_directory.DS. $this->filename;
    }

    public function set_file($file){
        if(empty($file) || !$file || !is_array($file)){
            $this->errors[]= 'No file uploaded!';
            return false;
        }elseif($file['error'] != 0){
            $this->errors[] = $this->upload_errors_array($file['error']);
            echo $this->errors;
        }else{
            $this->filename = basename($file['name']);
            $this->tmp_path = $file['tmp_name'];
            $this->type = $file['type'];
            $this->size = $file['size'];

//            $this->caption =$file['caption'];
//            $this->description = $file['description'];
//            $this->alternate_text = $file['alternate_text'];

        }
    }

    public function save()
    {
        if ($this->id) {
            $this->update();
        } else {
            if (!empty($this->errors)) {
                return false;
            }
            if (empty($this->filename || empty($this->tmp_path))){
                $this->errors[] = "File not available";
                return false;
            }
            $target_path = SITE_ROOT . DS . 'admin' . DS . $this->upload_directory . DS . $this->filename;
            if (file_exists($target_path)) {
                $this->errors[] = "File {$this->filename} exists!";
                return false;
            }
            if (move_uploaded_file($this->tmp_path, $target_path)) {
                if ($this->create()) {
                    unset($this->tmp_path);
                    return true;
                }
            } else {
                $this->errors[] = "This folder has no write permissions";
                return false;
            }
        }

    }



    public function delete_photo() {
        if ($this->delete()) {
            $target_path = SITE_ROOT . DS . 'admin' . DS . $this->picture_path();
            return unlink($target_path) ? true : false;
        }
    }


}