<?php
Yii::import('bootstrap.widgets.TbActiveForm');
Yii::import('dss.widgets.input.DSSInput');

class DSSActiveForm extends TbActiveForm {
	// вместе бутстраповских виджетов используем свои классы
	// они расширения бутстраповских, но мои
	const DSS_INPUT_HORIZONTAL = 'dss.widgets.input.DSSInputHorizontal';
	const DSS_INPUT_INLINE = 'dss.widgets.input.DSSInputInline';
	const DSS_INPUT_SEARCH = 'dss.widgets.input.DSSInputSearch';
	const DSS_INPUT_VERTICAL = 'dss.widgets.input.DSSInputVertical';
	
	// форматирование форм
	const DSS_TYPE_VERTICAL = 'vertical';
	const DSS_TYPE_INLINE = 'inline';
	const DSS_TYPE_HORIZONTAL = 'horizontal';
	const DSS_TYPE_SEARCH = 'search';
	
	public $type = self::DSS_TYPE_VERTICAL;
	
	public function dateFieldRow($model, $attribute, $htmlOptions = array()) {
		return $this->inputRow(DSSInput::TYPE_DATE, $model, $attribute, null, $htmlOptions);
	}
	/**
	 * Returns the input widget class name suitable for the form.
	 * @return string the class name
	 */
	protected function getInputClassName()
	{
		if (isset($this->input))
			return $this->input;
		else
		{
			switch ($this->type)
			{
				case self::TYPE_HORIZONTAL:
					return self::DSS_INPUT_HORIZONTAL;
					break;

				case self::TYPE_INLINE:
					return self::DSS_INPUT_INLINE;
					break;

				case self::TYPE_SEARCH:
					return self::DSS_INPUT_SEARCH;
					break;

				case self::TYPE_VERTICAL:
				default:
					return self::DSS_INPUT_VERTICAL;
					break;
			}
		}
	}	
}