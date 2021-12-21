<?php
    namespace App\Services;

    use App\Models\Client;

    class ClientService {
        public function get($id = null) {
            if ($id) {
                return Client::select($id);
            } else {
                return Client::selectAll();
            }
        }

        public function post() {
            $data = $_POST;
            return Client::insert($data);
        }

        public function update() {
            
        }

        public function delete() {
            
        }
    }