<?php

/* @ProfessionalServices/promoBelowEvents.twig */
class __TwigTemplate_ed8ad1f366ec1381f8a5a72f23334e5cc3dda37bc41a049f3df227ff2c6ebc6e extends Twig_Template
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
        echo "<p style=\"margin-top:3em\" class=\" alert-info alert\">Did you know?
    <br/>Using Events you can measure any user interaction and gain amazing insights into your audience. <a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=https://matomo.org/docs/event-tracking/\">Learn more</a>.
    <br/> To measure blocks of content such as image galleries, listings or ads: use <a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=https://developer.matomo.org/guides/content-tracking\">Content Tracking</a> and see exactly which content is viewed and clicked.
    ";
        // line 4
        if (($context["displayMediaAnalyticsAd"] ?? $this->getContext($context, "displayMediaAnalyticsAd"))) {
            // line 5
            echo "        <br/>When you publish videos or audios, <a target=\"_blank\" rel=\"noreferrer\" href=\"https://matomo.org/recommends/media-analytics-website\">Media Analytics gives deep insights into your audience</a> and how they watch your videos or listens to your music.
    ";
        }
        // line 7
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "@ProfessionalServices/promoBelowEvents.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p style=\"margin-top:3em\" class=\" alert-info alert\">Did you know?
    <br/>Using Events you can measure any user interaction and gain amazing insights into your audience. <a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=https://matomo.org/docs/event-tracking/\">Learn more</a>.
    <br/> To measure blocks of content such as image galleries, listings or ads: use <a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=https://developer.matomo.org/guides/content-tracking\">Content Tracking</a> and see exactly which content is viewed and clicked.
    {% if displayMediaAnalyticsAd %}
        <br/>When you publish videos or audios, <a target=\"_blank\" rel=\"noreferrer\" href=\"https://matomo.org/recommends/media-analytics-website\">Media Analytics gives deep insights into your audience</a> and how they watch your videos or listens to your music.
    {% endif %}
</p>", "@ProfessionalServices/promoBelowEvents.twig", "/var/www/html/piwik/plugins/ProfessionalServices/templates/promoBelowEvents.twig");
    }
}
