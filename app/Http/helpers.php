<?php

function getActiveLink($url)
{
	//
}

function prettifyDate($date)
{
	$timestamp = strtotime($date);
	return  date('F d\t\h Y', $timestamp);
}