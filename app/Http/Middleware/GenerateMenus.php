<?php

namespace App\Http\Middleware;

use Closure;
use Lavary\Menu\Builder;
use Lavary\Menu\Menu;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        {!! $MenuName->asUl( ['class' => 'awesome-ul'] ) !!}
        \Menu::make('MyNavBar', function (Builder $menu) {
            $menu->add('Home');
        });

        return $next($request);
    }
}
