<?php /* Smarty version Smarty-3.1-DEV, created on 2013-07-02 06:55:02
         compiled from "/app/laravel/app/views/smartytest/index.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:197894061151d26289e06942-98238623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cdfd80361e649ea32814f4e3f6e9aea2a16a072' => 
    array (
      0 => '/app/laravel/app/views/smartytest/index.tpl.html',
      1 => 1372747941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197894061151d26289e06942-98238623',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_51d26289e6cdf5_31637593',
  'variables' => 
  array (
    'color' => 0,
    'alphabet' => 0,
    'girls' => 0,
    'girl' => 0,
    'love' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d26289e6cdf5_31637593')) {function content_51d26289e6cdf5_31637593($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="utf-8">
    <title>テンプレート</title>
    </head>
<body>
    <header>
        <h1>週末ヒロイン<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
色クローバー<?php echo $_smarty_tpl->tpl_vars['alphabet']->value;?>
</h1>
    </header>
    <div id="main">
        <ul>
            <?php  $_smarty_tpl->tpl_vars['girl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['girl']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['girls']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['girl']->key => $_smarty_tpl->tpl_vars['girl']->value){
$_smarty_tpl->tpl_vars['girl']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['girl']->key;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['girl']->value;?>
</li>
            <?php } ?>
        </ul>
        <p>私は、<?php echo $_smarty_tpl->tpl_vars['love']->value;?>
推し！</p>
    </div>
</body>
</html>
<?php }} ?>