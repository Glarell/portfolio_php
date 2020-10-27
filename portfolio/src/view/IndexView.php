<?php

namespace portfolio\view;

class IndexView extends PrincipalView
{
	public function render() {
		$menu = self::getMenu();
		$content = self::getContent();
		$contact = self::getContact();
		$footer = self::getFooter();
		$modals = self::getModals();
		$html = <<<END
$menu
$content
$contact
$footer
$modals
END;
		echo $html;
	}
}