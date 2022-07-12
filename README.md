```php
composer require delgont/web
```
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Web\Support\Controllers\PageController as Controller;

class PageController extends Controller
{
    protected $index = 'page';
}
```

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Web\Support\Controllers\HomePageController as Controller;

class HomeController extends Controller
{
    protected $pageView ='index';


    protected $key = 'home';
}
```

```php
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/{page_key}', 'PageController@index')->name('klinik.page');
```

```php
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

       
    </head>
    <body>
        <h1>{{ $page->page_title }}</h1>
        <small>{{$page->extract_text}}</small>
        <div>
        {!! $page->page_content !!}
        </div>

        <div>
            <h1>Posts</h1>
            @if (count($posts))
                @foreach ($posts as $post)
                    <div>
                        <h4>{{ $post->post_title }}</h4>
                        <div>
                            {!! $post->post_content !!}
                        </div><hr />
                    </div>
                @endforeach
            @endif
        </div>
    </body>
</html>
```
