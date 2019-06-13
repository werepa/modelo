<?php
/**
 * Criminalística API
 * @version 0.0.1
 */

require_once __DIR__ . '/vendor/autoload.php';

$app = new Slim\App();

$app->get('/', function($request, $response, $args) {

    $response->write("API Criminalística ");
    return $response;
});

$app->get('/swagger', function($request, $response, $args) {
    return $response->withRedirect('/api-explorer', 301);
});


$app->post('/laudo/modelo', function($request, $response, $args) {

  $obj = array(
    array('nome' => 'Acre', 'capital' => 'Rio Branco', 'uf' => 'AC'),
    array('nome' => 'Alagoas', 'capital' => 'Maceió', 'uf' => 'AL'),
    array('nome' => 'Amapá', 'capital' => 'Macapá', 'uf' => 'AP'),
    array('nome' => 'Amazonas', 'capital' => 'Manaus', 'uf' => 'AM'),
    array('nome' => 'Bahia', 'capital' => 'Salvador', 'uf' => 'BA' ),
    );
  
    // return $response->withRedirect('/api-explorer', 301);
    return $response->withJson(Array(message => 'Modelo gerado com sucesso!'), 200);
});



?>