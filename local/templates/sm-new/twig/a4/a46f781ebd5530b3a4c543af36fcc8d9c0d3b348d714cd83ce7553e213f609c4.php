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

/* /src/block/action/action-offers/action-offers.html.twig */
class __TwigTemplate_954397cabb5251b549fd5a57771e2917816d683c7798a364613a0d226ad9f81c extends \Twig\Template
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
        echo "<div class=\"action-offers\">
\t<div class=\"container\">
\t\t<div class=\"action-offers__title\">Где можно оформить кредит на лечение зубов:</div>
\t\t<div class=\"action-offers__items\">
\t\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "\t\t\t\t<div class=\"action-offers__item\">
\t\t\t\t\t<div class=\"action-offers__top\">
\t\t\t\t\t\t<div class=\"action-offers__header\">
\t\t\t\t\t\t\t<div class=\"action-offers__subtitle\">";
            // line 9
            echo $this->getAttribute($context["item"], "title", [], "method");
            echo "</div>
\t\t\t\t\t\t\t<div class=\"action-offers__metro\">";
            // line 10
            echo $this->getAttribute($this->getAttribute($context["item"], "metroData", [], "array"), "title", [], "method");
            echo "</div>
\t\t\t\t\t\t\t<div class=\"action-offers__address\">";
            // line 11
            echo $this->getAttribute($context["item"], "address", [], "array");
            echo "</div>
\t\t\t\t\t\t\t<div class=\"action-offers__label-wrapp\">
\t\t\t\t\t\t\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "creditData", [], "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["credit"]) {
                // line 14
                echo "\t\t\t\t\t\t\t\t\t<div class=\"action-offers__label-item\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 15
                echo $this->getAttribute($context["credit"], "previewPicture", [], "method");
                echo "\" alt=\"";
                echo $this->getAttribute($context["credit"], "title", [], "method");
                echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/src/block/action/action-offers/action-offers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  76 => 18,  65 => 15,  62 => 14,  58 => 13,  53 => 11,  49 => 10,  45 => 9,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/src/block/action/action-offers/action-offers.html.twig", "/var/www/site/local/templates/sm-new/frontend/src/block/action/action-offers/action-offers.html.twig");
    }
}
