<?php
// Routes

$app->get('/nivell/{level}', function ($request, $response, $args) {
    // Render index view
    $settings = $this->get('settings');
    if(file_exists($settings['renderer']['template_path']."/levels/level".$args['level'].".phtml")) {
      $args['get'] = $request->getQueryParams();
      return $this->renderer->render($response, "levels/level".$args['level'].".phtml", $args);
    } else {
      return $this->renderer->render($response, "bad.phtml", $args);
    }
});


$app->get('/[{name}]', function ($request, $response, $args) {
    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
