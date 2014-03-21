<?php
Yii::import('bootstrap.widgets.input.TbInputVertical');
class DSSInputVertical extends TbInputVertical {
	const TYPE_DATE = 'date';
	
	public function run()
	{
		switch ($this->type)
		{
			case self::TYPE_CHECKBOX:
				$this->checkBox();
				break;

			case self::TYPE_CHECKBOXLIST:
				$this->checkBoxList();
				break;

			case self::TYPE_CHECKBOXLIST_INLINE:
				$this->checkBoxListInline();
				break;

			case self::TYPE_DROPDOWN:
				$this->dropDownList();
				break;

			case self::TYPE_FILE:
				$this->fileField();
				break;

			case self::TYPE_PASSWORD:
				$this->passwordField();
				break;

			case self::TYPE_RADIO:
				$this->radioButton();
				break;

			case self::TYPE_RADIOLIST:
				$this->radioButtonList();
				break;

			case self::TYPE_RADIOLIST_INLINE:
				$this->radioButtonListInline();
				break;

			case self::TYPE_TEXTAREA:
				$this->textArea();
				break;

			case 'textfield': // backwards compatibility
			case self::TYPE_TEXT:
				$this->textField();
				break;

			case self::TYPE_CAPTCHA:
				$this->captcha();
				break;

			case self::TYPE_UNEDITABLE:
				$this->uneditableField();
				break;
				
			case self::TYPE_DATE:
				$this->dateField();
				break;			

			default:
				throw new CException(__CLASS__.': Failed to run widget! Type is invalid.');
		}
	}

	protected function dateField()
	{
		echo $this->getLabel();
		echo $this->getPrepend();
		echo $this->form->dateField($this->model, $this->attribute, $this->htmlOptions);
		echo $this->getAppend();
		echo $this->getError().$this->getHint();
	}
}
