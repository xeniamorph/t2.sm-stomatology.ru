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

/* /src/block/news/news-card/news-card.html.twig */
class __TwigTemplate_ff58c1657a38cd6e1d3235060b22dc59d7ad94a802e903607c7b1164b22961ae extends \Twig\Template
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
        echo "<a href=\"";
        echo ($context["url"] ?? null);
        echo " \" class=\"news-card\">
\t<div class=\"news-card__cell\">
\t\t<div class=\"news-card__left\" itemscope itemtype=\"http://schema.org/ImageObject\">
\t\t\t<img class=\"news-card__image\" src=\"";
        // line 4
        echo ($context["img"] ?? null);
        echo "\" itemprop=\"contentUrl\" alt=\"";
        echo ($context["title"] ?? null);
        echo " фото\" title=\"";
        echo ($context["title"] ?? null);
        echo "\">
\t\t\t<meta itemprop=\"name\" content=\"";
        // line 5
        echo ($context["title"] ?? null);
        echo "\">
\t\t</div>
\t\t<div class=\"news-card__date-label\">
\t\t\t";
        // line 8
        echo ($context["date"] ?? null);
        echo "
\t\t</div>
\t</div>
\t<div class=\"news-card__cell-text\">
\t\t<div class=\"news-card__title\">
\t\t\t";
        // line 13
        echo ($context["title"] ?? null);
        echo "
\t\t</div>
\t\t<div class=\"news-card__desc\">
\t\t\t";
        // line 16
        echo ($context["desc"] ?? null);
        echo "
\t\t</div>
\t</div>
</a>";
    }

    public function getTemplateName()
    {
        return "/src/block/news/news-card/news-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  59 => 13,  51 => 8,  45 => 5,  37 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/src/block/news/news-card/news-card.html.twig", "/var/www/site/local/templates/sm-new/frontend/src/block/news/news-card/news-card.html.twig");
    }
}
