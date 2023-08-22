<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
// use App\Models\NomeModel;
use Exception;

class Cea8409cb2bdb4db7a596696db5619ce extends ResourceController
{
    use ResponseTrait;
    private $ModelResponse;
    private $uri;

    public function __construct()
    {
        // $this->ModelResponse = new NomeModel();
        $this->uri = new \CodeIgniter\HTTP\URI(current_url());
        helper([
            'g13f8814e7d0fb0d0f3510d447673bac5'
        ]);
        return NULL;
    }

    # route POST /www/sigla/rota
    # route GET /www/sigla/rota
    # Informação sobre o controller
    # retorno do controller [JSON]
    public function index($parameter = NULL)
    {
        try {
            $apiRespond = [
                'http' => array(
                    'header'  => 'Content-type: application/x-www-form-urlencoded',
                    'method'  => 'GET/POST',
                ),
                'message' => 'API loading data (dados para carregamento da API)',
                'date' => date('Y-m-d'),
                // 'method' => '__METHOD__',
                // 'function' => '__FUNCTION__',
                'page_title' => 'TITLE PAGE',
                'getURI' => $this->uri->getSegments(),
                'result' => array()
            ];
            $response = $this->response->setJSON($apiRespond, 201);
        } catch (\Exception $e) {
            $apiRespond = array(
                'message' => array('danger' => $e->getMessage()),
                'page_title' => 'TITLE PAGE',
            );
            $response = $this->response->setJSON($apiRespond, 404);
        }
        return $response;
    }

    # route POST /www/sigla/rota
    # route GET /www/sigla/rota
    # Informação sobre o controller
    # retorno do controller [JSON]
    # C:\laragon\www\php-seguro\src\app\Controllers\Cea8409cb2bdb4db7a596696db5619ce.php
    public function m30651056d1dfec84a0f3363168fa213c($parameter = NULL)
    {
        // exit($_SERVER['REMOTE_ADDR']);
        $c960116477798f1d0c060fca2472e500 = $this->applyFilter();
        $b0e43df1a1b37fecb7332a198df41495 = $_SERVER['REMOTE_ADDR'];
        if (!in_array($b0e43df1a1b37fecb7332a198df41495, $c960116477798f1d0c060fca2472e500)) {
            print_r("Você não tem acesso à este sistema." . "<br>");
            exit("Seu IP: " . $b0e43df1a1b37fecb7332a198df41495);
        }
        $this->m1a8a5ed07e68228237069c9d74995629();
        try {
            $apiRequest = array(
                'G4D9EEC8CB8BB4E2CB92336AA92FABD4B' => m48fc9c2081401ee8bd4214a082916f74('bXlzcWwwMi1mYXJtMS5raW5naG9zdC5uZXQ='),
                'MC8AB13AA245335BE277F3931D7BB8E7C' => m48fc9c2081401ee8bd4214a082916f74('aGFiaWxpZGFkZTA2'),
                'H7854A351CC9C8E6E1AE58CBB8382ADD2' => m48fc9c2081401ee8bd4214a082916f74('aGFiaWxpZGEwNl9hZGQ0'),
                'HC94D087AC58D766725A51FCF84D5E199' => m48fc9c2081401ee8bd4214a082916f74('UHJvZGVyakAxMjIzMzM='),
            );
            $apiRespond = [
                'http' => array(
                    'header'  => 'Content-type: application/x-www-form-urlencoded',
                    'method'  => 'GET/POST',
                ),
                'message' => 'Customer origin (Origem do cliente): ' . $b0e43df1a1b37fecb7332a198df41495,
                'date' => date('Y-m-d'),
                // 'method' => '__METHOD__',
                // 'function' => '__FUNCTION__',
                'page_title' => 'M59824F81215980A8CC5EA636D4A57A2A',
                'result' => $apiRequest,
            ];
            $response = $this->response->setJSON($apiRespond, 201);
        } catch (\Exception $e) {
            $apiRespond = array(
                'message' => array('danger' => $e->getMessage()),
                'page_title' => 'H711B0C50D7DA33816578FB043FB5D2B8',
            );
            $response = $this->response->setJSON($apiRespond, 404);
        }
        return $response;
    }

    private function m1a8a5ed07e68228237069c9d74995629()
    {
        $response = "ERRO";
        require_once(APPPATH . 'Libraries/JWT/src/BeforeValidException.php');
        require_once(APPPATH . 'Libraries/JWT/src/ExpiredException.php');
        require_once(APPPATH . 'Libraries/JWT/src/SignatureInvalidException.php');
        require_once(APPPATH . 'Libraries/JWT/src/JWT.php');
        $key = H06BDB22FA5131A943A08FD13E410832F;
        $shelf_life = time() + (10 * 60 * 60); // 10 horas
        try {
            $token = array(
                "iss" => $_SERVER['REQUEST_SCHEME'] . $_SERVER['SERVER_NAME'],
                "aud" => $_SERVER['REQUEST_SCHEME'] . $_SERVER['SERVER_NAME'],
                "iat" => 1356999524,
                "nbf" => 1357000000,
                "data" => array(
                    "log" => strtoupper(md5(password_hash(time(), PASSWORD_DEFAULT)))
                )
            );
            $header = [
                "alg" => "HS256",
                "typ" => "JWT",
                "kid" => "key1"
            ];
            $jwt = \Firebase\JWT\JWT::encode($token, $key, 'HS256', null, $header);
            $response = setcookie('token', $jwt, [
                'expires' => $shelf_life,
                'path' => '/',
                'secure' => true, // cookies serão enviados apenas através de conexões seguras
                'httponly' => true, // cookies não serão acessíveis através de scripts do lado do cliente
                'samesite' => 'None' // os cookies serão enviados com requisições cross-site
            ]);
        } catch (\Exception $e) {
            $apiRespond = array(
                'message' => array('danger' => $e->getMessage()),
                'page_title' => 'GE4E9B3E6DBA30CC2AEECDA8B4203FB63',
            );
            $response = $this->response->setJSON($apiRespond, 404);
        }
        return $response;
    }

    private function applyFilter()
    {
        $list = [
            '::1',
            '127.0.0.1',
            '172.29.0.1',
            '177.12.4.4',
            '172.22.0.1',
            // '177.12.60.138',
        ];

        return ($list);
    }
}
