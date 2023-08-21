<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use Exception;

class B73a0c131581fc59b09e63147a50b03d extends ResourceController
{
    use ResponseTrait;
    private $uri;

    public function __construct()
    {
        $this->uri = new \CodeIgniter\HTTP\URI(current_url());
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
    public function d15c53522d44dd1fac5735340d7e31cd()
    {
        try {
            $this->a6728e913a14838ec1259d16de23ddfb();
            $apiRespond = [
                'http' => array(
                    'header'  => 'Content-type: application/x-www-form-urlencoded',
                    'method'  => 'GET/POST',
                ),
                'message' => 'API loading data (dados para carregamento da API)',
                'date' => date('Y-m-d'),
                // 'method' => '__METHOD__',
                // 'function' => '__FUNCTION__',
                'page_title' => 'M85AAFCDC80A4B90188A41D516C3C0CFF',
                // 'result' => $dbResponse,
            ];
            $response = $this->response->setJSON($apiRespond, 201);
        } catch (\Exception $e) {
            $apiRespond = array(
                'message' => array('danger' => $e->getMessage()),
                'page_title' => 'H98A0AE2ECB87AC665C8CC7860D5FA11E',
            );
            $response = $this->response->setJSON($apiRespond, 404);
        }
        return $response;
    }

    private function a6728e913a14838ec1259d16de23ddfb()
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
}
