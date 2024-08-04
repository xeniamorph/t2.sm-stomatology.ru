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

/* /src/block/common/certificates/certificates.html.twig */
class __TwigTemplate_b6f9c73e9626304a2fae17f1d0816bf5f20f3fd2e8b5ec438d657a8a74dc184c extends \Twig\Template
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
        echo "<div class=\"certificates\">
\t<div class=\"container\">
\t\t<div class=\"certificates__wrap white-base\">
\t\t\t<div class=\"certificates__slider\">
\t\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["certificates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["certificate"]) {
            // line 6
            echo "\t\t\t\t<div class=\"certificates__slide\">
\t\t\t\t\t<a class=\"certificates__card js-fancybox\" href=\"";
            // line 7
            echo $this->getAttribute($context["certificate"], "img", []);
            echo "\" data-fancybox=\"licenses\" rel=\"";
            echo ($context["galleryCode"] ?? null);
            echo "\">
\t\t\t\t\t\t<div class=\"certificates__image\">
\t\t\t\t\t\t\t<picture><img src=\"";
            // line 9
            echo $this->getAttribute($context["certificate"], "imgResize", []);
            echo "\"></picture>
\t\t\t\t\t\t\t<div class=\"certificates__lupe\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certificate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t\t</div>
\t\t\t<div class=\"certificates__prev\"></div>
\t\t\t<div class=\"certificates__next\"></div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/src/block/common/certificates/certificates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  50 => 9,  43 => 7,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/src/block/common/certificates/certificates.html.twig", "/var/www/site/local/templates/sm-new/frontend/src/block/common/certificates/certificates.html.twig");
    }
}
