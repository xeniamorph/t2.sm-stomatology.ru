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

/* /src/block/common/licenses-block/licenses-block.html.twig */
class __TwigTemplate_1f224b8c6866c7d6f6c8bf889905c6d2346ac14791f3629babde5ed40cddaed3 extends \Twig\Template
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
        echo "<div class=\"licenses-block\">
\t<div class=\"container\">
\t\t<div class=\"licenses-block__title\">
\t\t\tЛицензии
\t\t</div>
\t\t<div class=\"licenses-block__wrap blue_back\">
\t\t\t<div class=\"licenses-block__slider\">
\t\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "\t\t\t\t\t<div class=\"licenses-block__slide\">
\t\t\t\t\t\t<a class=\"licenses-block__card js-fancybox\" href=\"";
            // line 10
            echo $this->getAttribute($context["item"], "img", []);
            echo "\" data-fancybox=\"licenses\" rel=\"";
            echo ($context["galleryCode"] ?? null);
            echo "\">
\t\t\t\t\t\t\t<div class=\"licenses-block__image\">
\t\t\t\t\t\t\t\t<picture><img src=\"";
            // line 12
            echo $this->getAttribute($context["item"], "imgResize", []);
            echo "\"></picture>
\t\t\t\t\t\t\t\t<div class=\"licenses-block__lupe\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t</div>
\t\t\t<div class=\"licenses-block__prev\"></div>
\t\t\t<div class=\"licenses-block__dots\"></div>
\t\t\t<div class=\"licenses-block__next\"></div>
\t\t</div>

\t\t<div class=\"licenses-block__buttons\">
\t\t\t";
        // line 28
        echo "\t\t\t<div class=\"licenses-block__button\">
\t\t\t\t<a href=\"/about/legal-info/\">Перейти в раздел «Правовая информация»</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/src/block/common/licenses-block/licenses-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  65 => 18,  53 => 12,  46 => 10,  43 => 9,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/src/block/common/licenses-block/licenses-block.html.twig", "/var/www/site/local/templates/sm-new/frontend/src/block/common/licenses-block/licenses-block.html.twig");
    }
}
