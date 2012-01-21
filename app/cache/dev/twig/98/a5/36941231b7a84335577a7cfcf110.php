<?php

/* PoivreUserBundle:User:index.html.twig */
class __TwigTemplate_98a536941231b7a84335577a7cfcf110 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue sur ma première page avec le Site du Zéro !</title>
    </head>
    <body>
        <h1>Hello World !</h1>

        <p>
            Le Hello World est un grand classique en programmation.
            Il signifie énormément, car cela veut dire que vous avez
            réussi à exécuter le programme pour accomplir une tâche simple :
            afficher ce hello world ! Et voici mon super <h1>";
        // line 13
        echo twig_escape_filter($this->env, $this->getContext($context, "var"), "html", null, true);
        echo "</h1>
        </p>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "PoivreUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
