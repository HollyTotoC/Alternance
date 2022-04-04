<?php

/* home.html.twig */
class __TwigTemplate_b63212fd374db0ef5396d393f21f6fd8 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<title>Théo 1</title>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f3"]) ? $context["f3"] : null), "path"), "html", null, true);
        echo "project/example/css/theo.css\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css\" integrity=\"sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn\" crossorigin=\"anonymous\">
\t</head>

\t<body>

\t\t<div>
\t\t\t<h1>Bac a sable IMI Framework</h1>
\t\t\t<p>
\t\t\t\tCette page est faite pour l'instant a tester les differents outils utilisés par IMI Creative et à les mettres en application pour être compétent
\t\t\t</p>
      <a href=\"C:\\Users\\Toto Certa\\Dropbox\\IMI Alternance\\Alternance\\project\\example\\views\\header.html.twig\">Exo 1 Nicolas</a>
    
\t\t</div>

\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-2\"></div>
\t\t\t\t<div class=\"col-1\"></div>
\t\t\t\t<div class=\"col-2\">URSAF</div>
\t\t\t\t<div class=\"col-2\">Impôt</div>
\t\t\t\t<div class=\"col-1\"></div>
\t\t\t\t<div class=\"col-1\"></div>
\t\t\t\t<div class=\"w-100 d-none d-md-block\"></div>
        <div class=\"col-1\">Mois</div>
        <div class=\"col-1\">Année</div>
        <div class=\"col-1\">CA</div>
        <div class=\"col-1\">Montant</div>
        <div class=\"col-1\">statut</div>
        <div class=\"col-1\">Montant</div>
        <div class=\"col-1\">statut</div>
        <div class=\"col-1\">NET</div>
        <div class=\"col-1\">DOC</div>

\t\t\t</body>
\t\t</html>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 5,  17 => 1,);
    }
}
