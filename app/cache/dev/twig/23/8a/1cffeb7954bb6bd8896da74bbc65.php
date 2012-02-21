<?php

/* PoivreNoteBundle:Default:index.html.twig */
class __TwigTemplate_238a1cffeb7954bb6bd8896da74bbc65 extends Twig_Template
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
        return "PoivreNoteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
