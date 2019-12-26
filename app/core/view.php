<?php


class View
{
	
	/*
	$contentFile - виды отображающие контент страниц;
	$fonFile - общий для всех страниц шаблон;
	$data - данные для передачи на страницу
	*/
	function generate($contentFile, $fonFile, $data = null)
	{

		include 'app/views/'.$fonFile;

	}
}
