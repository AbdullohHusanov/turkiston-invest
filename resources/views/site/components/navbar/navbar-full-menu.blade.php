<?php
$full_menu_elements = nova_get_menu_by_slug('site_main_menu', app()->getLocale());
?>

<div class="full-menu" id="full-menu">
    <div class="full-menu-bg"></div>
    <div class="container">
        <div class="full-menu-row">
            @if($full_menu_elements)
                @foreach($full_menu_elements['menuItems'] as $full_menu_element)
                    @if(!count($full_menu_element['children']))
                        <div class="full-menu-col">
                            <ul class="full-menu-ul">
                                <li class="full-menu-li">
                                    <a class="full-menu-link"
                                       href="{{ $full_menu_element['value'] }}">{{ $full_menu_element['name'] }}</a>
                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="full-menu-col">
                            <ul class="full-menu-ul">
                                <li id="menuItem" class="full-menu-li">
                                    {{--                                <a class="full-menu-link"--}}
                                    {{--                                   href="{{ $full_menu_element['value'] }}">{{ $full_menu_element['name'] }}</a>--}}
                                    <div class="flex items-center justify-between">
                                        <a id="menuItem" class="full-menu-link"
                                           href="{{ $full_menu_element['value'] }}">{{ $full_menu_element['name'] }}</a>
                                        <span class="chevron-down" id="arrowMenu"></span>
                                    </div>

                                    @foreach($full_menu_element['children'] as $full_menu_el)
                                        @if(!count($full_menu_el['children']))
                                            <ul id="mobileSubmenu" class="mobile-submenu-ul hidden md:block">
                                                <li class="mobile-submenu-li full-menu-li"><a
                                                        class="mobile-submenu-li full-menu-link"
                                                        href="{{ $full_menu_el['value'] }}">{{ $full_menu_el['name'] }}</a>
                                                </li>
                                            </ul>
                                        @else
                                            <ul id="mobileSubmenu" class="mobile-submenu-ul hidden md:block">
                                                <li class="mobile-submenu-li full-menu-li ml-3">
                                                    <a class="mobile-submenu-li full-menu-link"
                                                       href="{{ $full_menu_el['value'] }}">{{ $full_menu_el['name'] }}</a>
                                                    @foreach($full_menu_el['children'] as $full_menu_i)
                                                        <ul id="mobileSubmenu"
                                                            class="mobile-submenu-ul hidden md:block">
                                                            <li class="mobile-submenu-li full-menu-li"><a
                                                                    class="mobile-submenu-li full-menu-link"
                                                                    href="{{ $full_menu_i['value'] }}">{{ $full_menu_i['name'] }}</a>
                                                            </li>
                                                        </ul>
                                                    @endforeach
                                                </li>
                                            </ul>
                                        @endif
                                    @endforeach
                                </li>
                            </ul>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
</div>
