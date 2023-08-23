<?php
$customer_origin = $_SERVER['REMOTE_ADDR'];
echo "A requisição esta sendo realizada pelo IP: ";
print_r($customer_origin);
echo "<br>";
echo " ";
function myEndPoint($uri = NULL, $token)
{
    // Identifica o IP de requisição
    $uri = $uri;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $uri);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // sem https ou https sem certificação
    // Inserir o cabeçalho de autorização
    if ($token) {
        $headers = array();
        $headers[] = 'Authorization: Bearer ' . $token;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }
    
    $result = curl_exec($ch);
    if ($result === false) {
        echo 'Curl error: ' . curl_error($ch);
    } else {
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($httpCode == 404) {
            echo "Error 404: $uri não encontrado.";
        } else {
            $requestJSONform = json_decode($result, true); // true para exibir em array
            echo "<pre>";
            print_r($requestJSONform);
            echo "</pre>";
            // Agora você pode trabalhar com $requestJSONform
        }
    }
    curl_close($ch);
    try {
        return $requestJSONform;
    } catch (\Exception $e) {
        $systemReport['danger'] = $e->getMessage();
        return $systemReport;
    }
}
$uriAPI = 'https://habilidade.com' . '/seguro/public/cdff3467e47eff0530a8465ddda62adf';
   // Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6ImtleTEifQ.eyJpc3MiOiJodHRwc2hhYmlsaWRhZGUuY29tIiwiYXVkIjoiaHR0cHNoYWJpbGlkYWRlLmNvbSIsImlhdCI6MTM1Njk5OTUyNCwibmJmIjoxMzU3MDAwMDAwLCJkYXRhIjp7ImxvZyI6IkREQzhERDBCREZFMDYxNEE0MTU2RDdBNzM0N0EzMjQ5In19.A-iyhLc7ZscrxJwgQ4dLeayqsrcOCByxULAZAGalT1M
// $tokenAPI = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6ImtleTEifQ.eyJpc3MiOiJodHRwc2hhYmlsaWRhZGUuY29tIiwiYXVkIjoiaHR0cHNoYWJpbGlkYWRlLmNvbSIsImlhdCI6MTM1Njk5OTUyNCwibmJmIjoxMzU3MDAwMDAwLCJkYXRhIjp7ImxvZyI6Ijc5OUQ5QTU3RTFGNkFCQzE2MjNGQTAyQ0MyMTU1NkNEIn19.CVnXIQ527lPCvWUpcaUXzhfaB09awrftQ9jgwZtIPVM';
$tokenAPI = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6ImtleTEifQ.eyJpc3MiOiJodHRwc2hhYmlsaWRhZGUuY29tIiwiYXVkIjoiaHR0cHNoYWJpbGlkYWRlLmNvbSIsImlhdCI6MTM1Njk5OTUyNCwibmJmIjoxMzU3MDAwMDAwLCJkYXRhIjp7ImxvZyI6IkREQzhERDBCREZFMDYxNEE0MTU2RDdBNzM0N0EzMjQ5In19.A-iyhLc7ZscrxJwgQ4dLeayqsrcOCByxULAZAGalT1M';
// strlen($tokenAPI);
$getAPI = myEndPoint($uriAPI, $tokenAPI);
echo "<pre>";
print_r($getAPI);
echo "</pre>";
echo "<br>";
try {
    // $uriAPI = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . '/seguro/public/cdff3467e47eff0530a8465ddda62adf';
    if (
        isset($getAPI['result']['G4D9EEC8CB8BB4E2CB92336AA92FABD4B']) &&
        isset($getAPI['result']['MC8AB13AA245335BE277F3931D7BB8E7C']) &&
        isset($getAPI['result']['H7854A351CC9C8E6E1AE58CBB8382ADD2']) &&
        isset($getAPI['result']['HC94D087AC58D766725A51FCF84D5E199'])
    ) {
        $host = $getAPI['result']['G4D9EEC8CB8BB4E2CB92336AA92FABD4B'];
        $db   = $getAPI['result']['MC8AB13AA245335BE277F3931D7BB8E7C'];
        $user = $getAPI['result']['H7854A351CC9C8E6E1AE58CBB8382ADD2'];
        $pass = $getAPI['result']['HC94D087AC58D766725A51FCF84D5E199'];
    } else {
        $host = '';
        $db = '';
        $user = '';
        $pass = '';
    }
    // Estabelecer conexão
    $mysqli = new mysqli($host, $user, $pass, $db);
    if ($mysqli->connect_error) {
        die('Erro ao se conectar');
    }
    print_r('Conexão bem-sucedida' . "<br>");
    print_r(' Você está utilizando um Token com: ');
    print_r(strlen($tokenAPI));
    print_r(' Caracteres');
    #
} catch (\Throwable $th) {
    throw $th;
}
$mysqli->close();
