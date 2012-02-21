<?php

/* PoivreAbsenceBundle:Default:index.html.twig */
class __TwigTemplate_b4bc0039b803c9b96bddf78059fd23a9 extends Twig_Template
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
        return "PoivreAbsenceBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
