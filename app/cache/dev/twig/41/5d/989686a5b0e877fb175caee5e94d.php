<?php

/* ::layout.html.twig */
class __TwigTemplate_415d989686a5b0e877fb175caee5e94d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>

    <head>
\t
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
\t\t
    </head> 
\t
\t
    <body>
\t
\t\t<div id=\"head\">
\t\tProjet Poivre
\t\t</div>
\t \t
\t\t<div id=\"auth\">
";
        // line 20
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 21
            echo "    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo " - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">Déconnexion</a>
";
        } else {
            // line 23
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">Connexion</a>
";
        }
        // line 25
        echo "\t\t</div>
\t\t
\t\t
\t\t<div id=\"menu\">
\t\t\t<ul>
\t\t\t\t
\t\t\t</ul>
\t\t</div>
\t\t
\t\t<div id=\"main\">
\t\t\t";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "\t\t<div>
\t\t
    </body>
\t
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Projet Poivre";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
