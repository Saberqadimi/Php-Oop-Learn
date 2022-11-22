<?php

class HtmlElement
{
	private $attributes = [];

	private $tag;

	public function __construct($tag)
	{
		$this->tag = $tag;
	}

	public function __set($name, $value)
	{
		$this->attributes[$name] = $value;
	}

	public function html($innerHTML = '')
	{
		$html = "<{$this->tag}";
		foreach ($this->attributes as $key => $value) {
			$html .= ' ' . $key . '="' . $value . '"';
		}
		$html .= '>';
		$html .= $innerHTML;
		$html .= "</$this->tag>";

		return $html;
	}
}