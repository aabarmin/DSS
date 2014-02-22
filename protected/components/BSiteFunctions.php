<?php
/**
 * Created by JetBrains PhpStorm.
 * User: aleksandr
 * Date: 22.02.14
 * Time: 22:57
 * To change this template use File | Settings | File Templates.
 */

class BSiteFunctions extends CApplicationComponent{
    public function getSearchObject() {
        return new CSearchModel();
    }
}