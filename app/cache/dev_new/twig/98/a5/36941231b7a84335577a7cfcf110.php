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
        <title>Bienvenue sur ma premi�re page avec le Site du Z�ro !</title>
    </head>
    <body>
        <h1>Hello World !</h1>

        <p>
            Le Hello World est un grand classique en programmation.
            Il signifie �norm�ment, car cela veut dire que vous avez
            r�ussi � ex�cuter le programme pour accomplir une t�che simple :
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
