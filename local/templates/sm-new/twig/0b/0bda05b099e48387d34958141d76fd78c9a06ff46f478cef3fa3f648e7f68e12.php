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

/* /src/block/common/order-receipt/order-receipt.html.twig */
class __TwigTemplate_dac59429de8204ccf926a99be53025dca1b3953c3446a2793d8554d5383fa8be extends \Twig\Template
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
        echo "<div class=\"order-receipt\">
\t<div class=\"container\">
\t\t<div class=\"order-receipt__wrapper\">
\t\t\t<div class=\"order-receipt__title\">";
        // line 4
        echo ($context["title"] ?? null);
        echo "</div>
\t\t\t<div class=\"order-receipt__items\">
\t\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "\t\t\t\t\t<div class=\"order-receipt__item\">
\t\t\t\t\t\t<div class=\"order-receipt__img-wrapp\">
\t\t\t\t\t\t\t<img src=\"";
            // line 9
            echo $this->getAttribute($context["item"], "previewPicture", [], "method");
            echo "\" alt=\"";
            echo $this->getAttribute($context["item"], "title", [], "method");
            echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"order-receipt__text\">
\t\t\t\t\t\t\t";
            // line 12
            echo $this->getAttribute($context["item"], "PREVIEW_TEXT", [], "array");
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/src/block/common/order-receipt/order-receipt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  56 => 12,  48 => 9,  44 => 7,  40 => 6,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/src/block/common/order-receipt/order-receipt.html.twig", "/var/www/site/local/templates/sm-new/frontend/src/block/common/order-receipt/order-receipt.html.twig");
    }
}
