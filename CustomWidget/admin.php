<?php

$app->on('admin.init', function() {

    // dashboard widgets
    $this->on("admin.dashboard.widgets", function($widgets) {

        $customwidget = $this->module("customwidget")->getCustomWidgetInGroup(null, true);

        $widgets[] = [
            "name"    => "customwidget",
            "content" => $this->view("customwidget:views/widgets/dashboard.php", compact('customwidget')),
            "area"    => 'main'
        ];

    }, 100);
});
