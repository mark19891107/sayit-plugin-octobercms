<?php namespace MarkDai\SayitPlugin\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class DebateSectionController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController'    ];
    
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
    }
}
