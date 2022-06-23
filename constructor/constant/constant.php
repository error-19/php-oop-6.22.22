<?php
class jamuga{
    const SHAMIM="Thank you shamim to strat code t last night";   
}
class kapor{
    const SUTA="This suta is goood suta";
    public function cheak(){
    echo self::SUTA;
    }
}
$suta=new kapor();
$suta->cheak();
//echo jamuga::SHAMIM;
?>