<?php

/* add.html */
class __TwigTemplate_b888d0432e0e65ef517c85b09f7131c0034cd0b3713c018008afeef4473de173 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "add.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<form action='/index/save' method='post'>
\t<fieldset>
\t\t<legend>添加留言</legend>
\t\t<input type='text'placeholder='用户名' name='user'/>
\t\t<textarea placeholder='留言' name='content'></textarea>
\t\t<input type='submit' value='提交'/>
\t</fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}
{% block content %}
<form action='/index/save' method='post'>
\t<fieldset>
\t\t<legend>添加留言</legend>
\t\t<input type='text'placeholder='用户名' name='user'/>
\t\t<textarea placeholder='留言' name='content'></textarea>
\t\t<input type='submit' value='提交'/>
\t</fieldset>
</form>
{% endblock %}
", "add.html", "E:\\wamp\\www\\imooc\\app\\view\\add.html");
    }
}
