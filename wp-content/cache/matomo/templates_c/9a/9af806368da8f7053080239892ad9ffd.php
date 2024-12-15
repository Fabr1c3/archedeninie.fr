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

/* @CoreHome/_topScreen.twig */
class __TwigTemplate_4c41728111cba618969b2be69e002869 extends Template
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
        yield "<nav>
    <div class=\"nav-wrapper\">
        <a href=\"#main\" tabindex=\"1\" class=\"accessibility-skip-to-content\">";
        // line 3
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_SkipToContent"), "html", null, true);
        yield "</a>
        ";
        // line 4
        yield from         $this->loadTemplate("@CoreHome/_logo.twig", "@CoreHome/_topScreen.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "        ";
        yield from         $this->loadTemplate("@CoreHome/_topBar.twig", "@CoreHome/_topScreen.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "    </div>
</nav>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_topScreen.twig";
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
        return array (  51 => 6,  48 => 5,  46 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav>
    <div class=\"nav-wrapper\">
        <a href=\"#main\" tabindex=\"1\" class=\"accessibility-skip-to-content\">{{'CoreHome_SkipToContent'|translate}}</a>
        {% include \"@CoreHome/_logo.twig\" %}
        {% include \"@CoreHome/_topBar.twig\" %}
    </div>
</nav>", "@CoreHome/_topScreen.twig", "/home/empo8897/public_html/archedeninie/wp-content/plugins/matomo/app/plugins/CoreHome/templates/_topScreen.twig");
    }
}
