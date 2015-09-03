<?php
/**
 * Created by PhpStorm.
 * User: bryce
 * Date: 9/2/15
 * Time: 7:22 PM
 */

namespace WordWrap\Configuration;


class AdminMenu {

    /**
     * @var string the name of the menu element that shows in the backend admin
     */
    public $name;

    /**
     * @var string the icon to use for the menu in the backend
     */
    public $icon;

    /**
     * @var string the capability of the admin menu
     */
    public $capability;
}