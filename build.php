<?php


$controladores = scandir(__DIR__.'/src/Controllers/');

// Vamos pegar o conteúdo de cada controlador e colocar em uma pasta docs/nome-do-controlador minificado

foreach($controladores as $key => $controlador){
    if($controlador === '.' || $controlador === '..' || $controlador === 'Errors' || $controlador === 'Middlewares'){
        unset($controladores[$key]);
        continue;
    }

    $controller = str_replace('_', '-', strtolower($controlador));

    if($controller == 'index'){
        $controller = '';
    }

    file_put_contents(__DIR__."/docs/".(empty($controller) ? 'index' : $controller).".html", file_get_contents('http://programador.local/'.$controller));
}


// copiar o conteudo da pasta [css] para a pasta docs,
shell_exec('mkdir -p '. __DIR__.'/docs/css/font');
shell_exec('mkdir -p '. __DIR__.'/docs/css/jiujitsu');
shell_exec('cp -r '. __DIR__.'/src/Public/jiujitsu '. __DIR__.'/docs');
shell_exec('cp -r '. __DIR__.'/src/Public/css/font '. __DIR__.'/docs/css');
shell_exec('cp -r '. __DIR__.'/src/Public/css/site.min.css '. __DIR__.'/docs/css/site.min.css');

