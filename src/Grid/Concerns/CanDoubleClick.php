<?php

namespace Ibrhaim13\Admin\Grid\Concerns;

use Ibrhaim13\Admin\Admin;

trait CanDoubleClick
{
    /**
     * Double-click grid row to jump to the edit page.
     *
     * @return $this
     */
    public function enableDblClick()
    {
        $script = <<<SCRIPT
$('body').on('dblclick', 'table#{$this->tableID}>tbody>tr', function(e) {
    var url = "{$this->resource()}/"+$(this).data('key')+"/edit";
    $.admin.redirect(url);
});
SCRIPT;
        Admin::script($script);

        return $this;
    }
}
