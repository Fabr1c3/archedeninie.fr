<?php

use Matomo\Dependencies\Twig\Environment;
use Matomo\Dependencies\Twig\Error\LoaderError;
use Matomo\Dependencies\Twig\Error\RuntimeError;
use Matomo\Dependencies\Twig\Extension\CoreExtension;
use Matomo\Dependencies\Twig\Extension\SandboxExtension;
use Matomo\Dependencies\Twig\Markup;
use Matomo\Dependencies\Twig\Sandbox\SecurityError;
use Matomo\Dependencies\Twig\Sandbox\SecurityNotAllowedTagError;
use Matomo\Dependencies\Twig\Sandbox\SecurityNotAllowedFilterError;
use Matomo\Dependencies\Twig\Sandbox\SecurityNotAllowedFunctionError;
use Matomo\Dependencies\Twig\Source;
use Matomo\Dependencies\Twig\Template;

/* @CoreHome/_applePinnedTabIcon.twig */
class __TwigTemplate_0db5658821d6c498a93b08f39f28549d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((((isset($context["isCustomLogo"]) || array_key_exists("isCustomLogo", $context) ? $context["isCustomLogo"] : (function () { throw new RuntimeError('Variable "isCustomLogo" does not exist.', 1, $this->source); })()) && array_key_exists("customFavicon", $context)) && (isset($context["customFavicon"]) || array_key_exists("customFavicon", $context) ? $context["customFavicon"] : (function () { throw new RuntimeError('Variable "customFavicon" does not exist.', 1, $this->source); })()))) {
        } else {
            // line 3
            yield "\t<link rel=\"mask-icon\" href=\"plugins/CoreHome/images/applePinnedTab.svg\" color=\"#3450A3\">
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_applePinnedTabIcon.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  41 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if isCustomLogo and customFavicon is defined and customFavicon %}
{% else %}
\t<link rel=\"mask-icon\" href=\"plugins/CoreHome/images/applePinnedTab.svg\" color=\"#3450A3\">
{% endif %}
", "@CoreHome/_applePinnedTabIcon.twig", "/home/empo8897/public_html/archedeninie/wp-content/plugins/matomo/app/plugins/CoreHome/templates/_applePinnedTabIcon.twig");
    }
}
