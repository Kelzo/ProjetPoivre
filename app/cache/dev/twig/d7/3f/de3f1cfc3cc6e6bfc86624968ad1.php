<?php

/* PoivrePrincipalBundle:Admin:index.html.twig */
class __TwigTemplate_d73fde3f1cfc3cc6e6bfc86624968ad1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'principal_content' => array($this, 'block_principal_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PoivrePrincipalBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_principal_content($context, array $blocks = array())
    {
        // line 5
        echo "
        <div>
\t\tOn placera les trois blocs ici
        </div>

";
    }

    public function getTemplateName()
    {
        return "PoivrePrincipalBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
