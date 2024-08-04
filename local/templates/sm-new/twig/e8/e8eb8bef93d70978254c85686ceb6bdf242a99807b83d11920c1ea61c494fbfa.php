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

/* /src/block/price/price/price.html.twig */
class __TwigTemplate_301b7a0c4c6bce3c72556b729809b25cb4df7afef17ac23ce88538e4e555cf31 extends \Twig\Template
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
        echo "<div class=\"price\">
\t<div class=\"container\">
\t\t";
        // line 3
        if (($context["title"] ?? null)) {
            // line 4
            echo "\t\t\t<h2 class=\"page-title-2\">";
            echo ($context["title"] ?? null);
            echo "</h2>
\t\t";
        }
        // line 6
        echo "\t\t";
        if (($context["text"] ?? null)) {
            // line 7
            echo "\t\t\t<div class=\"b-text text\">
\t\t\t\t<div class=\"b-text__wrapper\">
\t\t\t\t\t";
            // line 9
            echo ($context["text"] ?? null);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 13
        echo "\t\t<div class=\"page-title__bg\">
\t\t\t<div class=\"price__headers\">
\t\t\t\t<div class=\"price__row\">
\t\t\t\t\t<div class=\"price__header\">
\t\t\t\t\t\t<div class=\"price__toggles\">
\t\t\t\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typeName"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 19
            echo "\t\t\t\t\t\t\t\t";
            if ($this->getAttribute(($context["priceList"] ?? null), $context["key"], [], "array", true, true)) {
                // line 20
                echo "\t\t\t\t\t\t\t\t\t";
                $context["k"] = (($context["k"] ?? null) + 1);
                // line 21
                echo "\t\t\t\t\t\t\t\t\t<div class=\"price__toggle ";
                echo (((($context["k"] ?? null) == 1)) ? ("active") : (""));
                echo "\">";
                echo $context["tab"];
                echo "</div>
\t\t\t\t\t\t\t\t";
            }
            // line 23
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"price__header price-label\">Цены</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"price__tabs\">
\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["priceList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["priceTab"]) {
            // line 31
            echo "\t\t\t\t\t";
            $context["j"] = (($context["j"] ?? null) + 1);
            // line 32
            echo "\t\t\t\t\t<div class=\"price__tab ";
            echo (((($context["j"] ?? null) == 1)) ? ("active") : (""));
            echo "\">
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["priceTab"]);
            foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
                // line 35
                echo "\t\t\t\t\t\t\t\t";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 36
                echo "\t\t\t\t\t\t\t\t<tr class=\"";
                echo (($this->getAttribute($this->getAttribute($context["price"], "property", [0 => "special_offer"], "method"), "value", [], "method")) ? ("price__promo") : (""));
                echo " ";
                echo (((($context["i"] ?? null) > 5)) ? ("hide additional") : (""));
                echo "\">
\t\t\t\t\t\t\t\t\t<td><div>";
                // line 37
                echo $this->getAttribute($context["price"], "title", [], "method");
                echo " </div></td>
\t\t\t\t\t\t\t\t\t<td><span>";
                // line 38
                echo $this->getAttribute($this->getAttribute($context["price"], "property", [0 => "sum"], "method"), "value", [], "method");
                echo "</span> руб.</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<script type=\"application/ld+json\">
\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\"@context\": \"http://schema.org\",
\t\t\t\t\t\t\t\t\t\t\"@type\": \"Offer\",
\t\t\t\t\t\t\t\t\t\t\"availability\": \"http://schema.org/InStock\",
\t\t\t\t\t\t\t\t\t\t\"itemOffered\": \"Service\",
\t\t\t\t\t\t\t\t\t\t\"name\": \"";
                // line 46
                echo $this->getAttribute($context["price"], "title", [], "method");
                echo "\",
\t\t\t\t\t\t\t\t\t\t\"url\": \"";
                // line 47
                echo ($context["url"] ?? null);
                echo "\",
\t\t\t\t\t\t\t\t\t\t\"priceCurrency\": \"RUB\",
\t\t\t\t\t\t\t\t\t\t\"price\": \"";
                // line 49
                echo $this->getAttribute($this->getAttribute($context["price"], "property", [0 => "sum"], "method"), "value", [], "method");
                echo "\"
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t\t\t\t\t</table>
\t\t\t\t\t\t";
            // line 54
            if ((twig_length_filter($this->env, $context["priceTab"]) > 5)) {
                // line 55
                echo "\t\t\t\t\t\t<div class=\"price__btn-wrapp\">
\t\t\t\t\t\t\t<div class=\"price-btn\">
\t\t\t\t\t\t\t\t<span class=\"show\">Показать весь список</span>
\t\t\t\t\t\t\t\t<span class=\"hide\">Скрыть весь список</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 62
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priceTab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t\t\t</div>

\t\t\t<div class=\"price__footnote\">
\t\t\t\t<p>С полным прайс-листом можно ознакомиться в регистратуре
\t\t\t\t\tили задать вопрос по телефону <a href=\"tel:+74962638687\">+7 (4962) 63-86-87</a></p>
\t\t\t\t<p>* Администрация клиники принимает все меры по своевременному обновлению
\t\t\t\t\tразмещенного на сайте прайс-листа, однако во избежание возможных недоразумений,
\t\t\t\t\tсоветуем уточнять стоимость услуг в регистратуре
\t\t\t\t\tили в контакт-центре по телефону <a href=\"tel:+74962638687\">+7 (4962) 63-86-87</a>.
\t\t\t\t</p>
\t\t\t\t<p>Размещенный прайс не является офертой.
\t\t\t\t\tМедицинские услуги оказываются на основании договора.</p>
\t\t\t</div>

\t\t\t<div class=\"price__pay-wrapp\">
\t\t\t\t<div class=\"price__pay-item\">
\t\t\t\t\t<img src=\"/local/templates/sm-new/svg/visa.svg\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"price__pay-item\">
\t\t\t\t\t<img src=\"/local/templates/sm-new/svg/visa_e.svg\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"price__pay-item\">
\t\t\t\t\t<img src=\"/local/templates/sm-new/svg/maestro.svg\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"price__pay-item\">
\t\t\t\t\t<img src=\"/local/templates/sm-new/svg/master.svg\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/src/block/price/price/price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 64,  170 => 62,  161 => 55,  159 => 54,  156 => 53,  146 => 49,  141 => 47,  137 => 46,  126 => 38,  122 => 37,  115 => 36,  112 => 35,  108 => 34,  102 => 32,  99 => 31,  95 => 30,  87 => 24,  81 => 23,  73 => 21,  70 => 20,  67 => 19,  63 => 18,  56 => 13,  49 => 9,  45 => 7,  42 => 6,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/src/block/price/price/price.html.twig", "/var/www/site/local/templates/sm-new/frontend/src/block/price/price/price.html.twig");
    }
}
