<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Navegação</div>
            {!! $MyNavBar->asUl(['class' => 'pcoded-item pcoded-left-item'], ['class' => 'pcoded-submenu']) !!}
            @auth
                @if(auth()->user()->id === 1)
                    <div class="pcoded-navigation-label">Dev Tool</div>
                    {!! $MyNavBarDev->asUl(['class' => 'pcoded-item pcoded-left-item'], ['class' => 'pcoded-submenu']) !!}
                @endif
            @endauth
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->