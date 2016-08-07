<?php

/**提示函数
 * @param unknown $mes
 * @param unknown $url
 */
function alertMes($mes,$url){
    echo"<script>alert('{$mes}');</script>";
    echo"<script>window.location='{$url}';</script>";
}
