<?php

/* layout.html */
class __TwigTemplate_46bd0a89d676ba65a3087c07d3e00f5e7c4cbf91f9b2be4d793953a6a28a91df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title></title>
\t\t<style>
\t\t\t*{margin:0;padding:0;}
\t\t\theader,footer{
\t\t\t\twidth:100%;
\t\t\t\theight:100px;
\t\t\t\tbackground:#555555;
\t\t\t\tcolor:#fff;
\t\t\t\tfont-size:50px;
\t\t\t\tline-height: 100px;
\t\t\t\ttext-align: center;
\t\t\t}
\t\t\tfooter{
\t\t\t\tposition:absolute;
\t\t\t\tbottom:0px;
\t\t\t}
\t\t\tul {
\t\t\t\tlist-style: none;
\t\t\t}
\t\t\tul li{
\t\t\t\tfloat:left;
\t\t\t\tmargin:20px;
\t\t\t}
\t\t</style>
\t</head>
\t<body>
\t    <header>header</header>
\t    <div class=\"menu\">
\t    \t<a href=\"/\" />所有留言</a>
\t    \t<a href=\"/index/add\" />添加留言</a>
\t    </div>
\t    <content>
\t    \t";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "\t    </content>
\t    <footer>footer</footer>
\t</body>
</html>
";
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        // line 38
        echo "\t    \t
\t    \t";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  71 => 38,  68 => 37,  60 => 40,  58 => 37,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title></title>
\t\t<style>
\t\t\t*{margin:0;padding:0;}
\t\t\theader,footer{
\t\t\t\twidth:100%;
\t\t\t\theight:100px;
\t\t\t\tbackground:#555555;
\t\t\t\tcolor:#fff;
\t\t\t\tfont-size:50px;
\t\t\t\tline-height: 100px;
\t\t\t\ttext-align: center;
\t\t\t}
\t\t\tfooter{
\t\t\t\tposition:absolute;
\t\t\t\tbottom:0px;
\t\t\t}
\t\t\tul {
\t\t\t\tlist-style: none;
\t\t\t}
\t\t\tul li{
\t\t\t\tfloat:left;
\t\t\t\tmargin:20px;
\t\t\t}
\t\t</style>
\t</head>
\t<body>
\t    <header>header</header>
\t    <div class=\"menu\">
\t    \t<a href=\"/\" />所有留言</a>
\t    \t<a href=\"/index/add\" />添加留言</a>
\t    </div>
\t    <content>
\t    \t{% block content %}
\t    \t
\t    \t{% endblock %}
\t    </content>
\t    <footer>footer</footer>
\t</body>
</html>
", "layout.html", "E:\\wamp\\www\\imooc\\app\\view\\layout.html");
    }
}
