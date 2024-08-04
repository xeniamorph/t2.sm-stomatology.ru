<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /src/block/common/img-links/img-links.html.twig */
class __TwigTemplate_7281e55b7280a95c07e479dd7b4056b91134bf54712b4772eb6a408dc56f8c85 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"img-links\">
\t<div class=\"container\">
\t\t<div class=\"img-links__items\">
\t\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "\t\t\t\t<a class=\"img-links__item\" href=\"";
            echo $this->getAttribute($context["item"], "link", [], "array");
            echo "\">
\t\t\t\t\t<div class=\"img-links__text\">";
            // line 6
            echo $this->getAttribute($context["item"], "name", [], "array");
            echo "</div>
\t\t\t\t\t<div class=\"img-links__image\">
\t\t\t\t\t\t<img src=\"";
            // line 8
            echo $this->getAttribute($context["item"], "img", [], "array");
            echo "\">
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/src/block/common/img-links/img-links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  49 => 8,  44 => 6,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/src/block/common/img-links/img-links.html.twig", "/var/www/site/local/templates/sm-new/frontend/src/block/common/img-links/img-links.html.twig");
    }
}
