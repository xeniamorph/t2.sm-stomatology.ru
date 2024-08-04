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

/* /src/block/common/heading-btn/heading-btn.html.twig */
class __TwigTemplate_58d62ba413a9852a1826787913eea0b1712b5f38cdd6edd5478846a72b119a0e extends \Twig\Template
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
        echo "<div class=\"heading-btn\">
\t<div class=\"container\">
\t\t<div class=\"heading-btn__wrap\">
\t\t\t<div class=\"heading-btn__title\">
\t\t\t\t<h1>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</h1>
\t\t\t</div>
\t\t\t<div class=\"heading-btn__btn-wrapp\">
\t\t\t\t<div><a class=\"btn-appointment js-open-popup\" data-toggle=\"modal\" data-target=\".modal-ask-question\" href=\"\">Задать вопрос</a></div>
\t\t\t\t<div><a class=\"btn-appointment question js-open-popup\" href=\"\" data-target=\".popup-form-feedback\" data-analytics=\"OrderDoctor\">Записаться на прием</a></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/src/block/common/heading-btn/heading-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/src/block/common/heading-btn/heading-btn.html.twig", "/var/www/site/local/templates/sm-new/frontend/src/block/common/heading-btn/heading-btn.html.twig");
    }
}
