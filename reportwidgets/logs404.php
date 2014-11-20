<?php

namespace Dmi3yy\LogsWidgets\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Illuminate\Support\Facades\DB;

class logs404 extends ReportWidgetBase
{
    public function render()
    {
        $this->vars['rows'] = DB::table('system_request_logs')->orderBy('updated_at', 'desc')->limit($this->property('items'))->get();
        return $this->makePartial('widget');
    }
    public function defineProperties()
    {
        return [
            'title' => [
                'title'             => 'dmi3yy.logswidgets::lang.logs404.widget_title',
                'default'           => 'dmi3yy.logswidgets::lang.logs404.widget_name',
                'type'              => 'string',
                'validationMessage' => 'The Widget Title is required.'
            ],

            'items' => [
                'title'             => 'dmi3yy.logswidgets::lang.logs404.widget_item_title',
                'default'           => '5',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$'
            ]
        ];
    }
}