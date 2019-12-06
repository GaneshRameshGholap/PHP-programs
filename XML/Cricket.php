<?php
	$xml=simplexml_load_file("cricket.xml");
        header("content-type=text/xml");
	$s=$xml->addChild("Team");
        $s->addAttribute("country","England");
        $s->addChild("Name","Ricky Poting");
        $s->addChild("Wickets","4");
        $s->addChild("Runs","1002");
        $s->addChild("Name","chris jordan");
        $s->addChild("Wickets","3");
        $s->addChild("Runs","10002");
        $s->addChild("Name","Alister cook");
        $s->addChild("Wickets","50");
        $s->addChild("Runs","5000");
        echo $xml->saveXML();
?>
