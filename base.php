<?php
//time set up
date_default_timezone_set("Asia/Yangon");



function conn(){
    return  mysqli_connect("localhost","root","","trs");
}
