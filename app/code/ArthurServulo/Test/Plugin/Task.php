<?php

namespace ArthurServulo\Test\Plugin;

class Task
{

	public function beforeindexAction(\Magento\Setup\Controller\Home $subject)
	{
		return 'test';
	}

}