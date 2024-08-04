<?php

/* /src/block/custom/main-features/main-features.html.twig */
class __TwigTemplate_7a56a9a758019ec1015c2adf1d051f7c319dff902a4998ae7ce2f4b39734d6e7 extends Twig_Template
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
        echo "<div class=\"b-features-list owl-carousel\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slides"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 3
            echo "\t\t<div class=\"b-features-list__item b-feature\">
\t\t\t<div class=\"row row-eq-height\">
\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t<div class=\"b-feature__image\"
\t\t\t\t\t\t style=\"background-image: url(";
            // line 7
            echo $this->getAttribute($context["slide"], "image", array(), "method");
            echo ");\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t<div class=\"b-feature__title\">
\t\t\t\t\t\t";
            // line 11
            echo $this->getAttribute($context["slide"], "title", array());
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"b-feature__text\">
\t\t\t\t\t\t";
            // line 14
            echo $this->getAttribute($context["slide"], "text", array(), "method");
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"b-feature__links\">
\t\t\t\t\t\t<a href=\"/reviews-site/\" class=\"b-feature__link b-link b-link--with-arrow\">
\t\t\t\t\t\t\tотзывы
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"/about/\" class=\"b-feature__link b-link b-link--with-arrow\">
\t\t\t\t\t\t\tподробнее
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/src/block/custom/main-features/main-features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 28,  45 => 14,  39 => 11,  32 => 7,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/src/block/custom/main-features/main-features.html.twig", "/var/www/sm-stomatology/data/www/sm-stomatology.ru/local/templates/sm-stomatology/frontend/src/block/custom/main-features/main-features.html.twig");
    }
}
