<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="no" lang="no">

<head>

<style type="text/css">
    @import url({"stylesheets/core.css"|ezdesign});
    @import url({"stylesheets/classes.css"|ezdesign});
    @import url({"stylesheets/site.css"|ezdesign});
    @import url({"stylesheets/debug.css"|ezdesign});
</style>

{literal}
<!--[if lt IE 6.0]>
<style>
div#maincontent div.design { width: 100%; } /* This is needed to avoid width bug in IE 5.5 */
</style>
<![endif]-->
{/literal}

</head>
<body>

<div id="allcontent">

<div id="header">
<div id="header-design">

<h1>eZ publish CMS</h1>

</div>
</div>

<hr class="hide" />

{let top_menu=ezini( 'SelectedMenu', 'TopMenu', 'menu.ini' )}
    {section show=$top_menu|is_string()}
        {include uri=concat('design:menu/',$top_menu,'.tpl')}
    {/section }
{/let}

<hr class="hide" />

<div id="path">
<div id="path-design">

{include uri="design:parts/path.tpl"}

</div>
</div>

<hr class="hide" />

<div id="columns">

{let left_menu=ezini( 'SelectedMenu', 'LeftMenu', 'menu.ini' )}
    {section show=$left_menu|is_string()}
        {include uri=concat('design:menu/',$left_menu,'.tpl')}
    {/section}
{/let}

<hr class="hide" />

<div id="rightmenu">
<div id="rightmenu-design">

<h3 class="hide">Right menu</h3>

<ul>
    <li>One</li>
    <li>Two</li>
    <li>Three</li>
    <li>Four</li>
    <li>Five</li>
    <li>Six</li>
    <li>Seven</li>
    <li>Eight</li>
    <li>Nine</li>
    <li>Ten</li>
</ul>

</div>
</div>

<hr class="hide" />

<div id="maincontent"><div id="fix">
<div id="maincontent-design">

{$module_result.content}

</div>
<div class="break"></div>
</div></div>

<div class="break"></div>
</div>

<hr class="hide" />

<div id="footer">
<div id="footer-design">

<address>DevSite: Cut &amp; Paste - Basic development site for eZ publish 3</address>

</div>
</div>

<div class="break"></div>
</div>

</body>
</html>
