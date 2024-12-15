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

/* @TagManager/manageContainers.twig */
class __TwigTemplate_0a68d88e44fe0832a2bae1e664ad87a8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'topcontrols' => [$this, 'block_topcontrols'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@TagManager/tagmanager.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["title"] = $this->env->getFilter('translate')->getCallable()("TagManager_ManageX", $this->env->getFilter('translate')->getCallable()("TagManager_Containers"));
        // line 1
        $this->parent = $this->loadTemplate("@TagManager/tagmanager.twig", "@TagManager/manageContainers.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_topcontrols($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "
    <div class=\"top_bar_sites_selector piwikTopControl\">
        <div
            vue-entry=\"CoreHome.SiteSelector\"
            show-selected-site=\"true\"
            show-all-sites-item=\"false\"
            class=\"sites_autocomplete\"
        ></div>
    </div>

    <div class=\"piwikTopControl\">
        <div
            vue-entry=\"TagManager.ContainerSelector\"
            ";
        // line 19
        if ((array_key_exists("container", $context) &&  !Matomo\Dependencies\Twig\Extension\CoreExtension::testEmpty((isset($context["container"]) || array_key_exists("container", $context) ? $context["container"] : (function () { throw new RuntimeError('Variable "container" does not exist.', 19, $this->source); })())))) {
            yield "container-name=\"";
            yield \Piwik\piwik_escape_filter($this->env, json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["container"]) || array_key_exists("container", $context) ? $context["container"] : (function () { throw new RuntimeError('Variable "container" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19)), "html", null, true);
            yield "\"";
        }
        // line 20
        yield "        ></div>
    </div>

";
        return; yield '';
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <div vue-entry=\"TagManager.ContainerManage\"></div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@TagManager/manageContainers.twig";
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
        return array (  84 => 25,  76 => 20,  70 => 19,  55 => 6,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@TagManager/tagmanager.twig' %}

{% set title = 'TagManager_ManageX'|translate('TagManager_Containers'|translate) %}

{% block topcontrols %}

    <div class=\"top_bar_sites_selector piwikTopControl\">
        <div
            vue-entry=\"CoreHome.SiteSelector\"
            show-selected-site=\"true\"
            show-all-sites-item=\"false\"
            class=\"sites_autocomplete\"
        ></div>
    </div>

    <div class=\"piwikTopControl\">
        <div
            vue-entry=\"TagManager.ContainerSelector\"
            {% if container is defined and container is not empty %}container-name=\"{{ container.name|json_encode }}\"{% endif %}
        ></div>
    </div>

{% endblock %}

{% block content %}
    <div vue-entry=\"TagManager.ContainerManage\"></div>
{% endblock %}", "@TagManager/manageContainers.twig", "/home/empo8897/public_html/archedeninie/wp-content/plugins/matomo/app/plugins/TagManager/templates/manageContainers.twig");
    }
}
