<?php

class ToolsHelper extends AppHelper {

	public $helpers = array('Form');
	
	function seo_url($string)
	{
		$string = preg_replace("`\[.*\]`U","",$string);
		$string = preg_replace('`&(amp;)?#?[a-z0-9]+;`i','-',$string);
		$string = htmlentities($string, ENT_COMPAT, 'utf-8');
		$string = preg_replace( "`&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);`i","\\1", $string );
		$string = preg_replace( array("`[^a-z0-9]`i","`[-]+`") , "-", $string);
		
		return strtolower(trim($string, '-'));
	}
	
	function event_date_format($date)
	{
		
		return date("D d M Y - h:i A", strtotime($date));
		
	}
	
	function truncate($txt,$link='',$limit)
	{
		if(strlen($txt)> $limit)
		{
			$t_txt = substr($txt, 0, $limit);
			$t_txt .= "... <a href='". $link  ."'>more</a>";
			$txt = $t_txt;
		}
		
		return $txt;
	}
	
	function select_state( $ele , $selected)
	{
		$states = array("VIC" => "VIC" , "NSW" => "NSW" , "ACT" => "ACT" , "TAS" => "TAS" , "SA" => "SA" , "QLD" => "QLD");
		return $this->Form->select($ele, $states , array("selected" => $selected,"empty"=>false,"style"=>"width:63px"));
		
	}
	
	function format_menu($txt)
	{
		$txt = trim($txt);
		$txt = str_replace("'" ,"", $txt);
		$out = ucfirst( strtolower($txt));
		
		return $out;
	}
	
	function human_filesize($bytes, $decimals = 2) {
		$sz = 'BKMGTP';
		$factor = floor((strlen($bytes) - 1) / 3);
		return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor];
	}
}





