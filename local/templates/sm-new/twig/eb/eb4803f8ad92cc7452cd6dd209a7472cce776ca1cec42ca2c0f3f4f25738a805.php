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

/* /src/block/article/article-similar/article-similar.html.twig */
class __TwigTemplate_5dffb1d0488c4079167497e37b218e2a3fadabc25c4515a3dd28deee17d4ab4a extends \Twig\Template
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
        echo "<div class=\"article-similar ";
        echo ($context["class"] ?? null);
        echo "\">
\t<div class=\"article-similar__wrap\">
\t\t<div class=\"article-similar__slider\">
\t\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 5
            echo "\t\t\t\t<div class=\"article-similar__slide\">
\t\t\t\t\t<div class=\"article-similar__item\">
\t\t\t\t\t\t<div class=\"article-similar__top\">
\t\t\t\t\t\t\t<a class=\"article-similar__image js-fancybox\" href=\"";
            // line 8
            echo (($this->getAttribute($context["img"], "max", [])) ? ($this->getAttribute($context["img"], "max", [])) : ($context["img"]));
            echo "\" data-fancybox=\"gallery\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 9
            echo (($this->getAttribute($context["img"], "resized", [])) ? ($this->getAttribute($context["img"], "resized", [])) : ($context["img"]));
            echo "\" loading=\"lazy\" alt=\"";
            echo ($context["alt"] ?? null);
            echo $this->getAttribute($context["loop"], "index", []);
            echo "\" title=\"";
            echo ($context["title"] ?? null);
            echo "\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t</div>
\t\t<div class=\"article-similar__nav\">
\t\t\t<div class=\"article-similar__prev\"></div>
\t\t\t<div class=\"article-similar__next\"></div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/src/block/article/article-similar/article-similar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 15,  63 => 9,  59 => 8,  54 => 5,  37 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/src/block/article/article-similar/article-similar.html.twig", "/var/www/site/local/templates/sm-new/frontend/src/block/article/article-similar/article-similar.html.twig");
    }
}
