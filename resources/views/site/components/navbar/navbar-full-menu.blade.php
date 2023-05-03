<div class="full-menu" id="full-menu">
    <div class="full-menu-bg"></div>
    <div class="container">
        <div class="full-menu-row">
            @foreach($full_menu_elements as $full_menu_element)
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
                            <li class="full-menu-li">
                                <a class="full-menu-link"
                                   href="{{ $full_menu_element['value'] }}">{{ $full_menu_element['name'] }}</a>
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
                                                    <ul id="mobileSubmenu" class="mobile-submenu-ul hidden md:block">
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
        </div>
    </div>
</div>
