<?php 
    defined('BASEPATH') OR exit('no direct script access allowed');

    class Product_model extends CI_Model {
        private $_table = "products"; // name tabel pada database

        /* kolom pada tabel ini harus ditusil sama persis atributnya */
        public $product_id;
        public $name;
        public $link;
        public $image = "default.jpg";
        public $description;
        public $sender;
        public $status;

        /* fungsi rules() akan melakukan formating nilai input  */
        public function rules() {
            return [
                [
                    'field' => 'sender',
                    'label' => 'Sender',
                    'rules' => 'required'
                ],

                [
                    'field' => 'name',
                    'label' => 'Name',
                    'rules' => 'required'
                ],

                [
                    'field' => 'photo',
                    'label' => 'Photo',
                    'rules' => 'numeric'
                ],

                [
                    'field' => 'link',
                    'label' => 'Link',
                    'rules' => 'required'
                ],

                [
                    'field' => 'description',
                    'label' => 'Description',
                    'rules' => 'required'
                ]
            ];
        }

        /* SELECT * FROM products */
        public function getAll() {
            return $this->db->get($this->_table)->result(); // result() : ambil semua data
        }

        /* SELECT * FROM products WHERE product_id = $id */
        public function getById($id) {
            return $this->db->get_where($this->_table, ["product_id" => $id])->row(); // result() : ambil satu buah data, `=> : where`
        }

        public function getByStatus() {
            return $this->db->get_where($this->_table, ["status" => '1'])->result(); // result() : ambil sebuah data, `=> : where`
        }

        /* INPUT INTO products() values() */
        public function save() {
            $post = $this->input->post();
            $this->product_id = uniqid();
            $this->name = $post["name"];
            $this->link = $post["link"];
            $this->image = $this->_uploadImage();
            $this->description = $post["description"];
            $this->sender = $post["sender"];
            $this->status = 0;
            return $this->db->insert($this->_table, $this); // this : data bundle
        }

        /* UPDATE products values() WHERE product_id = id */
        public function update() {
            $post = $this->input->post();
            $this->product_id = $post["id"];
            $this->sender = $post["sender"];
            $this->name = $post["name"];
            $this->link = $post["link"];

            if(!empty($_FILES["image"]["name"])) {
                $this->image = $this->_uploadImage();
            } else {
                $this->image = $post["old_image"];
            }
            
            if(empty($_POST['status'])) {
                $this->status = 0;
            } else {
                $this->status = 1;
            }
            
            $this->description = $post["description"];
            $this->db->update($this->_table, $this, array('product_id' => $post['id']));
        }

        /* DELETE FROM products WHERE product_id = $id */
        public function delete($id) {
            return $this->db->delete($this->_table, array("product_id" => $id));
        }

        private function _uploadImage() {
            $config['upload_path'] = './images/img-link';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = $this->product_id;
            $config['overwrite'] = true;
            $config['max_size'] = 1024;         // 1mb
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            $this->load->library('upload', $config);
            if($this->upload->do_upload('image')) {
                return $this->upload->data("file_name");
            }

            return "default.jpg";
        }
    }