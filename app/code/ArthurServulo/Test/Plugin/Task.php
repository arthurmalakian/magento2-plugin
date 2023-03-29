<?php

namespace ArthurServulo\Test\Plugin;

class Task
{

	public function beforeSetTitle(\ArthurServulo\Test\Controller\Index\ExampleController $subject, $title)
	{
		$title = $title . " to ";
		echo __METHOD__ . "</br>";

		return [$title];
	}

}