<?php

namespace App\Nova\MenuBuilderTypes;

use Laravel\Nova\Fields\Text;
use Outl1ne\MenuBuilder\MenuItemTypes\MenuItemTextType;

class AdminMenuType extends MenuItemTextType
{
    /**
     * Get menu link name shown in CMS when selecting link type.
     * ie ('Product Link' or 'Image Link').
     *
     * @return string
     **/
    public static function getName(): string
    {
        return 'Admin Menu';
    }

    public static function getIdentifier(): string
    {
        return 'admin-menu';
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @return array An array of fields.
     */
    public static function getFields(): array
    {
        return [
            'Url' => Text::make('Value','value'),
            'Icons' => Text::make('Icons','icons'),
            'Resources' => Text::make('Resources','resources')
        ];
    }

    /**
     * Get the subtitle value shown in CMS menu items list.
     *
     * @param $value
     * @param $data "the data from item fields."
     * @param $locale
     * @return string
     */
    public static function getDisplayValue($value, ?array $data, $locale)
    {
        return $value;
    }

    public static function getType(): string
    {
        return 'custom';
    }

    /**
     * Get the value of the link visible to the front-end.
     *
     * Can be anything. It is up to you how you will handle parsing it.
     *
     * This will only be called when using the nova_get_menu()
     * and nova_get_menus() helpers or when you call formatForAPI()
     * on the Menu model.
     *
     * @param null $value The key from options list that was selected.
     * @param array|null $data The data from item fields.
     * @param $locale
     * @return mixed
     */
    public static function getValue($value, ?array $data, $locale)
    {
        return $value;
    }

    /**
     * Get data of the link visible to the front-end.
     *
     * Can be anything. It is up to you how you will handle parsing it.
     *
     * This will only be called when using the nova_get_menu()
     * and nova_get_menus() helpers or when you call formatForAPI()
     * on the Menu model.
     *
     * @param null $data Field values
     * @return mixed
     */
    public static function getData($data = null): mixed
    {
        return $data;
    }


    public static function getRules(): array
    {
        return [
//            'value' => 'required|max:255',
//            'data.icons' => 'required|max:255',
//            'data.resources' => 'required|max:255',
        ];
    }
}
