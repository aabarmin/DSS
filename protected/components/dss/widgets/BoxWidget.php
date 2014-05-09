<?php
/**
 * Created by JetBrains PhpStorm.
 * User: aleksandr
 * Date: 09.05.14
 * Time: 20:39
 * To change this template use File | Settings | File Templates.
 */

class BoxWidget extends CWidget{
    public $title = "";

    public function init()
    {
        ob_start();
    }

    public function run()
    {
        $content = ob_get_clean();
        echo CHtml::tag('div', array('class' => 'box'), false, false);
            echo CHtml::tag('div', array('class' => 'box-header'), false, false);
                echo CHtml::tag('h2', array(), $this->title);
            echo CHtml::closeTag('div');

            echo CHtml::tag('div', array('class' => 'box-content'), $content);
        echo CHtml::closeTag('div');
    }
}