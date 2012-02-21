<?php

/* PoivrePlanningBundle:Default:index.html.twig */
class __TwigTemplate_71ca7af4ee584ca6d190f612cddf592c extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "PoivrePlanningBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
