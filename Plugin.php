<?php namespace Dmi3yy\LogsWidgets;

use System\Classes\PluginBase;

/**
 * LogsWidgets Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'LogsWidgets',
            'description' => 'Logs output on the Dashboard',
            'author'      => 'Dmi3yy',
            'icon'        => 'icon-leaf'
        ];
    }
    public function registerReportWidgets()
    {
        return [
            'Dmi3yy\LogsWidgets\ReportWidgets\logs404' => [
                'label'   => 'dmi3yy.logswidgets::lang.logs404.widget_name',
                'context' => 'dashboard'
            ]
        ];
    }

}
