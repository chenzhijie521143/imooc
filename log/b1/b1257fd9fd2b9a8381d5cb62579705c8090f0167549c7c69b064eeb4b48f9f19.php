<?php

/* index.html */
class __TwigTemplate_5b24ea65161d97a25ae63015f8c616b67949065e62270e84c5198161728e25a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
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
        echo "<ul>
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "\t<li>
\t\t<h1>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "user", array()), "html", null, true);
            echo "</h1>
\t\t<p>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true);
            echo "</p>
\t\t<span>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "lastdate", array()), "html", null, true);
            echo "</span>
\t\t<a href='/index/del/id/";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "Id", array()), "html", null, true);
            echo "'>删除留言</a>
\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  53 => 9,  49 => 8,  45 => 7,  41 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
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
<ul>
\t{% for item in data %}
\t<li>
\t\t<h1>{{item.user}}</h1>
\t\t<p>{{item.content}}</p>
\t\t<span>{{item.lastdate}}</span>
\t\t<a href='/index/del/id/{{item.Id}}'>删除留言</a>
\t</li>
\t{% endfor %}
</ul>
{% endblock %}
", "index.html", "E:\\wamp\\www\\imooc\\app\\view\\index.html");
    }
}
