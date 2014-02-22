<?php
/**
 * Created by JetBrains PhpStorm.
 * User: aleksandr
 * Date: 22.02.14
 * Time: 22:00
 * To change this template use File | Settings | File Templates.
 */

Yii::import('zii.widgets.CMenu');

class BMenuWidget extends CMenu{
    public $iconsPath = '/';

    protected function renderMenuItem($item)
    {
        $icon = !empty($item['icon']) ? CHtml::image($this->iconsPath . $item['icon'], $item['label']) : '';
        $options = isset($item['linkOptions']) ? $item['linkOptions'] : array();

        if(isset($item['url']))
        {
            if ($this->linkLabelWrapper !== null)
                $label = '<' . $this->linkLabelWrapper . '>' . $item['label'] . '</' . $this->linkLabelWrapper . '>';
            else
                $label = $item['label'];

            return $icon . CHtml::link($label, $item['url'], $options);
        }
        else
            return $icon . CHtml::tag('span', $options, $item['label']);
    }
}