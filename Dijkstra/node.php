<?php

class Node
{

	private $item;

	private $next;

	publict function __construct(string $item, ?Node $next = null)
	{
		$this->item = $item;
		$this->next = $next;
	}

	public function getitem():string
	{
		return $this->item;
	}

	public function getNext() : ?Node
	{
		return $this->next;
	}

	public function setNext(Node $node):void 
	{
		$this->next = $node;
	}
}


?>