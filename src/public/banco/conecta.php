<h1>--------------</h1>
<?php
function myEndPoint($uri = NULL, $token)
{
    $position = strpos($uri, 'http');
    $requestJSONform = [];
    if ($_SERVER["SERVER_PORT"] !== 80) {
        # Garante que o endereço da API sempre seja com porta 80.
        $base = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . '/';
    } else {
        $base = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER["SERVER_PORT"] . '/';
    }
    if ($position !== false) {
        $uri = $uri;
    } else {
        $uri = $base . $uri;
    }
    // Verificar se a URI é válida
    if (!filter_var($uri, FILTER_VALIDATE_URL)) {
        throw new \Exception('A URI fornecida é inválida.');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $uri);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Desabilita a verificação SSL, mas isso é inseguro em produção

    // Inserir o cabeçalho de autorização
    if ($token) {
        $headers = ['Authorization: Bearer ' . $token];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }

    $result = curl_exec($ch);
    if ($result === false) {
        throw new \Exception('Curl error: ' . curl_error($ch));
    } else {
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($httpCode == 404) {
            throw new \Exception("Error 404: $uri não encontrado.");
        } else {
            $requestJSONform = json_decode($result, true); // Converte em array
        }
    }
    curl_close($ch);
    try {
    } catch (\Exception $e) {
        return ["error" => $e->getMessage()];
    }

    return $requestJSONform;
}
?>
<?php
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6ImtleTEifQ.eyJpc3MiOiJodHRwc2hhYmlsaWRhZGUuY29tIiwiYXVkIjoiaHR0cHNoYWJpbGlkYWRlLmNvbSIsImlhdCI6MTM1Njk5OTUyNCwibmJmIjoxMzU3MDAwMDAwLCJkYXRhIjp7ImxvZyI6IkREQzhERDBCREZFMDYxNEE0MTU2RDdBNzM0N0EzMjQ5In19.A-iyhLc7ZscrxJwgQ4dLeayqsrcOCByxULAZAGalT1M';
$uri = 'https://habilidade.com/seguro/public/cdff3467e47eff0530a8465ddda62adf';
//code...
$returnAPI = MyEndPoint($uri, $token);
// print_r($returnAPI);
try {
    if (
        isset($returnAPI['result']['G4D9EEC8CB8BB4E2CB92336AA92FABD4B'])
        && isset($returnAPI['result']['MC8AB13AA245335BE277F3931D7BB8E7C'])
        && isset($returnAPI['result']['H7854A351CC9C8E6E1AE58CBB8382ADD2'])
        && isset($returnAPI['result']['HC94D087AC58D766725A51FCF84D5E199'])
    ) {
        $host = $returnAPI['result']['G4D9EEC8CB8BB4E2CB92336AA92FABD4B'];
        $database = $returnAPI['result']['MC8AB13AA245335BE277F3931D7BB8E7C'];
        $user = $returnAPI['result']['H7854A351CC9C8E6E1AE58CBB8382ADD2'];
        $password = $returnAPI['result']['HC94D087AC58D766725A51FCF84D5E199'];
    } else {
        $host = '';
        $database = '';
        $user = '';
        $password = '';
    }
} catch (\Throwable $th) {
    echo 'Error: ' . $th->getMessage;
}
?>
<?php
try {
    // Tentativa de conexão
    $connection = mysqli_connect($host, $user, $password, $database);
    if (!$connection) {
        die("Conexão falhou: " . mysqli_connect_error());
    }
} catch (\Throwable $th) {
    echo $th->getMessage();
}
// Verificar a conexão
// Sucesso
print_r("Conexão bem-sucedida!");
// fecha
mysqli_close($connection);
?>