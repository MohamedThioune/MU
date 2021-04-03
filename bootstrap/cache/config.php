<?php return array (
  'app' => 
  array (
    'name' => 'Mu-dev',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://localhost/mu_code/public',
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'fr',
    'key' => 'base64:1IwEAAu+nR0n6FUhtomfEtlOSOxEjlM6wgykEMx0j9w=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'Collective\\Html\\HtmlServiceProvider',
      23 => 'Laracasts\\Flash\\FlashServiceProvider',
      24 => 'InfyOm\\Generator\\InfyOmGeneratorServiceProvider',
      25 => 'InfyOm\\AdminLTETemplates\\AdminLTETemplatesServiceProvider',
      26 => 'Prettus\\Repository\\Providers\\RepositoryServiceProvider',
      27 => 'App\\Providers\\AppServiceProvider',
      28 => 'App\\Providers\\AuthServiceProvider',
      29 => 'App\\Providers\\EventServiceProvider',
      30 => 'App\\Providers\\RouteServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Form' => 'Collective\\Html\\FormFacade',
      'Html' => 'Collective\\Html\\HtmlFacade',
      'Flash' => 'Laracasts\\Flash\\Flash',
      'hijri' => 'Arcanedev\\Arabic\\DateTime',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => 'mt1',
          'encrypted' => true,
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/Users/mohamedthioune/Documents/mu_code/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
    ),
    'prefix' => 'mu_dev_cache',
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'mu-dev',
        'prefix' => '',
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'mu-dev',
        'username' => 'root',
        'password' => 'KELLELkellel',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'strict' => true,
        'engine' => NULL,
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'mu-dev',
        'username' => 'root',
        'password' => 'KELLELkellel',
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'mu-dev',
        'username' => 'root',
        'password' => 'KELLELkellel',
        'charset' => 'utf8',
        'prefix' => '',
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 0,
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/Users/mohamedthioune/Documents/mu_code/storage/app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/Users/mohamedthioune/Documents/mu_code/storage/app/public',
        'url' => 'http://localhost/mu_code/public/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'url' => NULL,
      ),
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
  ),
  'image' => 
  array (
    'path' => 'images/uploads',
  ),
  'infyom' => 
  array (
    'laravel_generator' => 
    array (
      'path' => 
      array (
        'migration' => '/Users/mohamedthioune/Documents/mu_code/database/migrations/',
        'model' => '/Users/mohamedthioune/Documents/mu_code/app/Models/',
        'datatables' => '/Users/mohamedthioune/Documents/mu_code/app/DataTables/',
        'repository' => '/Users/mohamedthioune/Documents/mu_code/app/Repositories/',
        'routes' => '/Users/mohamedthioune/Documents/mu_code/routes/web.php',
        'api_routes' => '/Users/mohamedthioune/Documents/mu_code/routes/api.php',
        'request' => '/Users/mohamedthioune/Documents/mu_code/app/Http/Requests/',
        'api_request' => '/Users/mohamedthioune/Documents/mu_code/app/Http/Requests/API/',
        'controller' => '/Users/mohamedthioune/Documents/mu_code/app/Http/Controllers/',
        'api_controller' => '/Users/mohamedthioune/Documents/mu_code/app/Http/Controllers/API/',
        'repository_test' => '/Users/mohamedthioune/Documents/mu_code/tests/Repositories/',
        'api_test' => '/Users/mohamedthioune/Documents/mu_code/tests/APIs/',
        'tests' => '/Users/mohamedthioune/Documents/mu_code/tests/',
        'views' => '/Users/mohamedthioune/Documents/mu_code/resources/views/',
        'schema_files' => '/Users/mohamedthioune/Documents/mu_code/resources/model_schemas/',
        'templates_dir' => '/Users/mohamedthioune/Documents/mu_code/resources/infyom/infyom-generator-templates/',
        'seeder' => '/Users/mohamedthioune/Documents/mu_code/database/seeds/',
        'database_seeder' => '/Users/mohamedthioune/Documents/mu_code/database/seeds/DatabaseSeeder.php',
        'modelJs' => '/Users/mohamedthioune/Documents/mu_code/resources/assets/js/models/',
        'factory' => '/Users/mohamedthioune/Documents/mu_code/database/factories/',
        'view_provider' => '/Users/mohamedthioune/Documents/mu_code/app/Providers/ViewServiceProvider.php',
      ),
      'namespace' => 
      array (
        'model' => 'App\\Models',
        'datatables' => 'App\\DataTables',
        'repository' => 'App\\Repositories',
        'controller' => 'App\\Http\\Controllers',
        'api_controller' => 'App\\Http\\Controllers\\API',
        'request' => 'App\\Http\\Requests',
        'api_request' => 'App\\Http\\Requests\\API',
        'repository_test' => 'Tests\\Repositories',
        'api_test' => 'Tests\\APIs',
        'tests' => 'Tests',
      ),
      'templates' => 'adminlte-templates',
      'model_extend_class' => 'Eloquent',
      'api_prefix' => 'api',
      'api_version' => 'v1',
      'options' => 
      array (
        'softDelete' => true,
        'save_schema_file' => true,
        'localized' => false,
        'tables_searchable_default' => false,
        'repository_pattern' => false,
        'excluded_fields' => 
        array (
          0 => 'id',
        ),
      ),
      'prefixes' => 
      array (
        'route' => '',
        'path' => '',
        'view' => '',
        'public' => '',
      ),
      'add_on' => 
      array (
        'swagger' => false,
        'tests' => true,
        'datatables' => false,
        'menu' => 
        array (
          'enabled' => true,
          'menu_file' => 'layouts/menu.blade.php',
        ),
      ),
      'timestamps' => 
      array (
        'enabled' => true,
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'deleted_at' => 'deleted_at',
      ),
      'ignore_model_prefix' => false,
      'from_table' => 
      array (
        'doctrine_mappings' => 
        array (
        ),
      ),
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/Users/mohamedthioune/Documents/mu_code/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/Users/mohamedthioune/Documents/mu_code/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 7,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
    ),
  ),
  'mail' => 
  array (
    'driver' => 'smtp',
    'host' => 'smtp.gmail.com',
    'port' => '587',
    'from' => 
    array (
      'address' => 'hello@example.com',
      'name' => 'Example',
    ),
    'encryption' => 'tls',
    'username' => 'smuuseislamic@gmail.com',
    'password' => 'minnie2019',
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/Users/mohamedthioune/Documents/mu_code/resources/views/vendor/mail',
      ),
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'stripe' => 
    array (
      'model' => 'App\\User',
      'key' => NULL,
      'secret' => NULL,
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/Users/mohamedthioune/Documents/mu_code/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'mu_dev_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
    'same_site' => NULL,
  ),
  'video' => 
  array (
    'path' => 'vids/uploads',
    'second_path' => 'vids/thumbnails',
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/Users/mohamedthioune/Documents/mu_code/resources/views',
    ),
    'compiled' => '/Users/mohamedthioune/Documents/mu_code/storage/framework/views',
  ),
  'like' => 
  array (
    'user_foreign_key' => 'user_id',
    'likes_table' => 'likes',
    'like_model' => 'Overtrue\\LaravelLike\\Like',
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 30,
  ),
  'repository' => 
  array (
    'pagination' => 
    array (
      'limit' => 15,
    ),
    'fractal' => 
    array (
      'params' => 
      array (
        'include' => 'include',
      ),
      'serializer' => 'League\\Fractal\\Serializer\\DataArraySerializer',
    ),
    'cache' => 
    array (
      'enabled' => false,
      'minutes' => 30,
      'repository' => 'cache',
      'clean' => 
      array (
        'enabled' => true,
        'on' => 
        array (
          'create' => true,
          'update' => true,
          'delete' => true,
        ),
      ),
      'params' => 
      array (
        'skipCache' => 'skipCache',
      ),
      'allowed' => 
      array (
        'only' => NULL,
        'except' => NULL,
      ),
    ),
    'criteria' => 
    array (
      'acceptedConditions' => 
      array (
        0 => '=',
        1 => 'like',
        2 => 'in',
      ),
      'params' => 
      array (
        'search' => 'search',
        'searchFields' => 'searchFields',
        'filter' => 'filter',
        'orderBy' => 'orderBy',
        'sortedBy' => 'sortedBy',
        'with' => 'with',
        'searchJoin' => 'searchJoin',
        'withCount' => 'withCount',
      ),
    ),
    'generator' => 
    array (
      'basePath' => '/Users/mohamedthioune/Documents/mu_code/app',
      'rootNamespace' => 'App\\',
      'stubsOverridePath' => '/Users/mohamedthioune/Documents/mu_code/app',
      'paths' => 
      array (
        'models' => 'Entities',
        'repositories' => 'Repositories',
        'interfaces' => 'Repositories',
        'transformers' => 'Transformers',
        'presenters' => 'Presenters',
        'validators' => 'Validators',
        'controllers' => 'Http/Controllers',
        'provider' => 'RepositoryServiceProvider',
        'criteria' => 'Criteria',
      ),
    ),
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
