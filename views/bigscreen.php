<?php
namespace Destiny;
use Destiny\Common\Utils\Tpl;
use Destiny\Common\Config;
?>
<!DOCTYPE html>
<html>
<head>
<title><?=Tpl::title($this->title)?></title>
<meta charset="utf-8">
<?php include 'seg/commontop.php' ?>
<link href="<?=Config::cdnv()?>/web.css" rel="stylesheet" media="screen">
</head>
<body id="bigscreen" class="no-contain">

    <?php include 'seg/top.php' ?>

    <div id="page-content" class="container">

        <div id="stream-panel" class="left">
            <div id="stream-wrap">
                <iframe class="stream-element" marginheight="0" marginwidth="0" frameborder="0" src="//player.twitch.tv/?channel=<?=Config::$a['twitch']['user']?>" scrolling="no" seamless allowfullscreen></iframe>
            </div>
        </div>

        <div id="chat-panel" class="right">
            <div id="chat-panel-resize-bar"></div>
            <div class="panelheader clearfix">
                <div class="toolgroup clearfix">
                    <div id="chat-panel-tools">
                        <a title="Refresh" id="refresh" class="pull-left"><span class="fa fa-refresh"></span></a>
                        <a title="Close" id="close" class="pull-right"><span class="fa fa-remove"></span></a>
                        <a title="Popout" id="popout" class="pull-right"><span class="fa fa-external-link-square"></span></a>
                        <a title="Swap" id="swap" class="pull-right"><span class="fa fa-exchange"></span></a>
                    </div>
                </div>
            </div>
            <div id="chat-wrap">
                <iframe id="chat-frame" class="stream-element" seamless="seamless" src="/embed/chat?follow=/bigscreen"></iframe>
            </div>
        </div>

    </div>

    <?php include 'seg/commonbottom.php' ?>
    <script src="<?=Config::cdnv()?>/web.js"></script>

</body>
</html>
