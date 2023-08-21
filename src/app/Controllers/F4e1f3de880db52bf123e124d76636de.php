<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Dbe40f447aa4cbaf1536e61702514b60;
use Exception;

class F4e1f3de880db52bf123e124d76636de extends ResourceController
{
    use ResponseTrait;
    private $ce06cb52902c9b79d3021721c64ffd17;
    private $uri;

    public function __construct()
    {
        $this->ce06cb52902c9b79d3021721c64ffd17 = new Dbe40f447aa4cbaf1536e61702514b60();
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
                'page_title' => 'Usuários sem proteção',
                'getURI' => $this->uri->getSegments(),
                'result' => $this->ce06cb52902c9b79d3021721c64ffd17->dbRead()->findAll()
            ];
            $response = $this->response->setJSON($apiRespond, 201);
        } catch (\Exception $e) {
            $apiRespond = array(
                'message' => array('danger' => $e->getMessage()),
                'page_title' => 'Usuários sem proteção'
            );
            $response = $this->response->setJSON($apiRespond, 404);
        }
        return $response;
    }

}
