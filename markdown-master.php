<?php
/*
Plugin Name: MarkDown
Version: 1.2
Plugin URL: https://lvwenhan.com/web-front/407.html
Description: 十分漂亮的 Markdown 编辑器，完美替代自带编辑器。
Author: JohnLui
Author Email: wenhanlv@gmail.com
Author URL: http://lvwenhan.com
*/
!defined('EMLOG_ROOT') && exit('access deined!');

addAction('adm_writelog_head', 'markdown');
addAction('index_head', 'markdown_css');

function markdown() {
  require 'markdown_html.php';
}

function johnlui_markdown_css() {
  echo '<link rel="stylesheet" href="/content/plugins/markdown-master/styles/markdown.css">';
}