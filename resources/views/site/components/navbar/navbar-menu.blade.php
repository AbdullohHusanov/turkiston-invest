<?php
$menusItems = nova_get_menu_by_slug('site_main_menu', app()->getLocale()) ;
?>


<div class="navbar-menu">
    <ul class="navbar-menu-ul" id="navbar-menu">
        @if($menusItems)
            @foreach($menusItems['menuItems'] as $menu_item)
            @if(!count($menu_item['children']))
                <li class="navbar-menu-li">
                    <a class="navbar-menu-link" href="{{ $menu_item['value'] }}">
                        {{ $menu_item['name'] }}
                    </a>
                </li>
            @else
                <li class="navbar-menu-li">
                    <a class="navbar-menu-link" href="#">
                        {{ $menu_item['name'] }}
                    </a>

                    <div class="submenu">
                        <div class="container">
                            <div class="submenu-menu">
                                <div class="submenu-row">
                                    @foreach($menu_item['children'] as $menu_column)
                                        @if(!count($menu_column['children']))
                                            <div class="submenu-col">
                                                <ul class="submenu-ul">
                                                    <li class="submenu-li">
                                                        <a class="submenu-link "
                                                           href="{{ $menu_column['value'] }}">{{ $menu_column['name'] }}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        @else
                                            <div class="submenu-col">
                                                <ul class="submenu-ul">
                                                    <li class="submenu-li">
                                                        <a class="submenu-link "
                                                           href="{{ $menu_column['value'] }}">{{ $menu_column['name'] }}</a>
                                                        <ul class="submenu-ul">
                                                            @foreach($menu_column['children'] as $menu_i)
                                                                <li class="submenu-li">
                                                                    <a class="submenu-link "
                                                                       href="{{ $menu_i['value'] }}">{{ $menu_i['name'] }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endif
        @endforeach
        @endif
    </ul>
</div>
