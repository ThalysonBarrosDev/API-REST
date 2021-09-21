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
            
        }

        public function update() {
            
        }

        public function delete() {
            
        }
    }