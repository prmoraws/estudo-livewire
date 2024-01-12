Setup Docker Laravel 10 com PHP 8.1

Suba os containers do projeto
```sh
docker-compose up -d
```


Acesse o container app
```sh
docker-compose exec app bash
```


Instale as dependências do projeto
```sh
composer install
```


Gere a key do projeto Laravel
```sh
php artisan key:generate
```

Intalar limewire
```sh
composer require livewire/livewire
php artisan livewire:publish 
php artisan livewire:publish --assets
```
Para manter os ativos atualizados e evitar problemas em atualizações futuras, é altamente recomendável adicionar o comando aos scripts post-autoload-dump em seu arquivo composer.json file:
"@php artisan vendor:publish --force --tag=livewire:assets --ansi"

Traduzir
```sh
php artisan lang:publish

composer require lucascudo/laravel-pt-br-localization --dev

php artisan vendor:publish --tag=laravel-pt-br-localization
```

Instalar Jetstream
```sh
composer require laravel/jetstream

php artisan jetstream:install livewire 
```

Configurando o componente de layout
Se quiser especificar um layout padrão diferente de layouts.app, você poderá substituir a livewire.layoutopção de configuração.
```sh
'layout' => 'app.other_default_layout'
```



