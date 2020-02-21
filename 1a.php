<?php

function parseParam($param){
    if(is_array($param) || is_object($param)){
        $result = array();
		foreach ($param as $key => $value)
		{
			$result[$key] = parseParam($value);
		}
		return implode("-",$result);
    }else{
        return $param;
    }
}

echo parseParam($param='stockbit test');
