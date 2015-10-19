<?php

/* navbar.twig */
class __TwigTemplate_cbedf68f1bcc9d9ebae1575ad1e7af850c2e841986f7dcb3d281c81ec7da0da5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<ul>
    <li>
        <a href=\"#\">Get Slim w Slim</a>
    </li>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["docs"]) ? $context["docs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 7
            echo "        <li>
            <!--this refers to name for path docs-->
            <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("docs", array("slug" => $this->getAttribute($context["doc"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["doc"], "fname", array()), "html", null, true);
            echo "</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
</ul>";
    }

    public function getTemplateName()
    {
        return "navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  33 => 9,  29 => 7,  25 => 6,  19 => 2,);
    }
}
/* {# NavBar Twig template #}*/
/* <ul>*/
/*     <li>*/
/*         <a href="#">Get Slim w Slim</a>*/
/*     </li>*/
/*     {% for doc in docs %}*/
/*         <li>*/
/*             <!--this refers to name for path docs-->*/
/*             <a href="{{ path_for('docs', {slug : doc.slug}) }}">{{ doc.fname }}</a>*/
/*         </li>*/
/*     {% endfor %}*/
/* */
/* </ul>*/
