<?php
Yii::import('zii.widgets.CMenu');
class MainMenuWidget extends CMenu {
	public $route = "";
	
	public function init()
	{
		parent::init();
		// определяем активный пункт меню
		foreach ($this->items as $item) {
			$item["active"] = $this->isItemActive($item, $this->route);
		}
	}
	protected function renderMenu($items)
	{
		if(count($items))
		{
			echo CHtml::openTag("div", array(
				"class" => "nav-collapse sidebar-nav"
			));
			echo CHtml::openTag("ul", array(
				"class" => "nav nav-tabs nav-stacked main-menu"
			));
			$this->renderMenuRecursive($items);
			echo CHtml::closeTag("ul");
			echo CHtml::closeTag("div");
		}
	}
	protected function renderMenuItem($item)
	{
		$innerText = "";
		// генерируем картинку, если есть
		if (array_key_exists("icon", $item)) {
			$innerText .= CHtml::openTag("i", array(
				"class" => $item["icon"]
			));
			$innerText .= CHtml::closeTag("i");
		}
		// теперь генерируем обертку для текста ссылки
		$innerText .= CHtml::openTag("span", array(
			"class" => "hidden-tablet"
		));
		$innerText .= $item["label"];
		$innerText .= CHtml::closeTag("span");
		
		return CHtml::link($innerText, $item["url"]);
	}
}
