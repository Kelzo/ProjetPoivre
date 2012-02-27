<?php

/* PoivrePrincipalBundle:Etudiant:index.html.twig */
class __TwigTemplate_a933c20ad0de5ba5fe12846dd2fc9042 extends Twig_Template
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
        return "PoivrePrincipalBundle:Etudiant:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
