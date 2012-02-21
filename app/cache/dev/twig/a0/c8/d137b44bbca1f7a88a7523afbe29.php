<?php

/* PoivrePrincipalBundle::layout.html.twig */
class __TwigTemplate_a0c8d137b44bbca1f7a88a7523afbe29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'principal_content' => array($this, 'block_principal_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_principal_content($context, array $blocks = array())
    {
        // line 8
        echo "            ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t\t<h2>Espace principal</h2>
        <div>
            ";
        // line 7
        $this->displayBlock('principal_content', $context, $blocks);
        // line 9
        echo "        </div>

";
    }

    public function getTemplateName()
    {
        return "PoivrePrincipalBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
