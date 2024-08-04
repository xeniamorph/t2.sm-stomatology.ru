<?php

/* /src/block/custom/footer-menu/footer-menu.html.twig */
class __TwigTemplate_0ce1a9bc351c2293de9beb85eb5f09c7d3b9dbaa52f1bd50d6c266c68b303931 extends Twig_Template
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
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 2
            echo "\t<a class=\"b-footer-menu-group__link\" ";
            if (($context["target_blank"] ?? null)) {
                echo " target=\"_blank\" ";
            }
            echo " href=\"";
            echo $this->getAttribute($context["link"], "url", array());
            echo "\">
\t\t";
            // line 3
            echo $this->getAttribute($context["link"], "title", array());
            echo "
\t</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/src/block/custom/footer-menu/footer-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/src/block/custom/footer-menu/footer-menu.html.twig", "/var/www/sm-stomatology/data/www/sm-stomatology.ru/local/templates/sm-stomatology/frontend/src/block/custom/footer-menu/footer-menu.html.twig");
    }
}
