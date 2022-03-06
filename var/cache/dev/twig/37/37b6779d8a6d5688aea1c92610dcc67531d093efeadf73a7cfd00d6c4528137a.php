<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* draw_card/index.html.twig */
class __TwigTemplate_383da87c43a97051523bb25bcbf34b406f65826e0164796fdc6961b9011bd649 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "draw_card/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "draw_card/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "draw_card/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"text-center\">
\t\t<img id=\"logo\">
\t</div>

\t<!-- REGLE DU JEUX -->
\t<div class=\"container-fluid\">
\t\t<div class=\"alert alert-primary\" role=\"alert\">
\t\t\t<button type=\"button\" class=\"btn-close\" data-dismiss=\"alert\" aria-label=\"close\"></button>
\t\t\tREGLE DU JEUX :
\t\t\t<hr>
\t\t\t<h4>On souhaite développer un jeu de cartes.</h4>
\t\t\t<p>Dans ce jeu, un joueur tire une main de 10 cartes de manière aléatoire.</p>
\t\t\t<p>Chaque carte possède une couleur (\"Carreaux\", par exemple) et une valeur (\"10\", par exemple).</p>
\t\t\t<strong>On vous demande de:</strong>
\t\t\t<p>Construire un ordre aléatoire des couleurs. L'ordre des couleurs est, par exemple, l'un des suivants :
\t\t\t\t<strong>
\t\t\t\t\t<code>Carreaux, Coeur, Pique, Trèfle</code>
\t\t\t\t</strong>.</p>
\t\t\t<p>Construire un ordre aléatoire des valeurs. L'ordre des valeurs est, par exemple, l'un des suivants :
\t\t\t\t<strong>
\t\t\t\t\t<code>AS, 5, 10, 8, 6, 7, 4, 2, 3, 9, Dame, Roi, Valet</code>
\t\t\t\t</strong>
\t\t\t</p>
\t\t\t<p>Construire une main de 10 cartes de manière aléatoire.</p>
\t\t\t<p>Présenter la main \"non triée\" à l'écran puis la main triée selon n'importe quel ordre défini dans la 1ère et 2ème étape.\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tC'est-à-dire que vous devez classer les cartes par couleur et valeur.</p>
\t\t\t<hr>
\t\t\tBON JEUX !
\t\t</div>
\t</div>
\t<!-- FIN REGLE DU JEUX -->
\t
\t<div class=\"text-center\">
\t\t<img id=\"img\" onclick=\"window.location.reload();\">
\t\t<button type=\"button\" class=\"btn btn-outline-primary\" class=\"click\" onclick=\"window.location.reload();\">
\t\t\t⬆️⬆️ CRÉER UNE MAIN ⬆️⬆️</button>
\t</div>

\t<!-- TABLEAU -->
\t<table class=\"table table-striped table-hover \">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Triée par:</th>
\t\t\t\t<th>Carte</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<h6>Couleurs :</h6>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cards"]) || array_key_exists("cards", $context) ? $context["cards"] : (function () { throw new RuntimeError('Variable "cards" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["color_card"]) {
            // line 55
            echo "\t\t\t\t\t\t<a> [ ";
            echo twig_escape_filter($this->env, $context["color_card"], "html", null, true);
            echo " ] ;</a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color_card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<h6>Valeurs :</h6>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value_card"]) {
            // line 65
            echo "\t\t\t\t\t\t<a> [ ";
            echo twig_escape_filter($this->env, $context["value_card"], "html", null, true);
            echo "\t] ;</a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<h6>Cartes non triées :</h6>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notSorted"]) || array_key_exists("notSorted", $context) ? $context["notSorted"] : (function () { throw new RuntimeError('Variable "notSorted" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["unsortedCard"]) {
            // line 75
            echo "\t\t\t\t\t\t<a>[ ";
            echo twig_escape_filter($this->env, twig_join_filter($context["unsortedCard"], " de "), "html", null, true);
            echo " ] ;\t</a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unsortedCard'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<h6>Cartes triées par couleurs :</h6>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sortedByColor"]) || array_key_exists("sortedByColor", $context) ? $context["sortedByColor"] : (function () { throw new RuntimeError('Variable "sortedByColor" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sortedByline1"]) {
            // line 85
            echo "\t\t\t\t\t\t<a>[ ";
            echo twig_escape_filter($this->env, twig_join_filter($context["sortedByline1"], " de "), "html", null, true);
            echo " ] ; </a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sortedByline1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<h6>Cartes triées avec par valeurs :</h6>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sortedByValue"]) || array_key_exists("sortedByValue", $context) ? $context["sortedByValue"] : (function () { throw new RuntimeError('Variable "sortedByValue" does not exist.', 94, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sortedByline2"]) {
            // line 95
            echo "\t\t\t\t\t\t<a>[ ";
            echo twig_escape_filter($this->env, twig_join_filter($context["sortedByline2"], " de "), "html", null, true);
            echo " ] ;</a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sortedByline2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "draw_card/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 97,  213 => 95,  209 => 94,  200 => 87,  191 => 85,  187 => 84,  178 => 77,  169 => 75,  165 => 74,  156 => 67,  147 => 65,  143 => 64,  134 => 57,  125 => 55,  121 => 54,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
\t<div class=\"text-center\">
\t\t<img id=\"logo\">
\t</div>

\t<!-- REGLE DU JEUX -->
\t<div class=\"container-fluid\">
\t\t<div class=\"alert alert-primary\" role=\"alert\">
\t\t\t<button type=\"button\" class=\"btn-close\" data-dismiss=\"alert\" aria-label=\"close\"></button>
\t\t\tREGLE DU JEUX :
\t\t\t<hr>
\t\t\t<h4>On souhaite développer un jeu de cartes.</h4>
\t\t\t<p>Dans ce jeu, un joueur tire une main de 10 cartes de manière aléatoire.</p>
\t\t\t<p>Chaque carte possède une couleur (\"Carreaux\", par exemple) et une valeur (\"10\", par exemple).</p>
\t\t\t<strong>On vous demande de:</strong>
\t\t\t<p>Construire un ordre aléatoire des couleurs. L'ordre des couleurs est, par exemple, l'un des suivants :
\t\t\t\t<strong>
\t\t\t\t\t<code>Carreaux, Coeur, Pique, Trèfle</code>
\t\t\t\t</strong>.</p>
\t\t\t<p>Construire un ordre aléatoire des valeurs. L'ordre des valeurs est, par exemple, l'un des suivants :
\t\t\t\t<strong>
\t\t\t\t\t<code>AS, 5, 10, 8, 6, 7, 4, 2, 3, 9, Dame, Roi, Valet</code>
\t\t\t\t</strong>
\t\t\t</p>
\t\t\t<p>Construire une main de 10 cartes de manière aléatoire.</p>
\t\t\t<p>Présenter la main \"non triée\" à l'écran puis la main triée selon n'importe quel ordre défini dans la 1ère et 2ème étape.\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tC'est-à-dire que vous devez classer les cartes par couleur et valeur.</p>
\t\t\t<hr>
\t\t\tBON JEUX !
\t\t</div>
\t</div>
\t<!-- FIN REGLE DU JEUX -->
\t
\t<div class=\"text-center\">
\t\t<img id=\"img\" onclick=\"window.location.reload();\">
\t\t<button type=\"button\" class=\"btn btn-outline-primary\" class=\"click\" onclick=\"window.location.reload();\">
\t\t\t⬆️⬆️ CRÉER UNE MAIN ⬆️⬆️</button>
\t</div>

\t<!-- TABLEAU -->
\t<table class=\"table table-striped table-hover \">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Triée par:</th>
\t\t\t\t<th>Carte</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<h6>Couleurs :</h6>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t{% for color_card in cards %}
\t\t\t\t\t\t<a> [ {{ color_card }} ] ;</a>
\t\t\t\t\t{% endfor %}
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<h6>Valeurs :</h6>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t{% for value_card in values %}
\t\t\t\t\t\t<a> [ {{ value_card }}\t] ;</a>
\t\t\t\t\t{% endfor %}
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<h6>Cartes non triées :</h6>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t{% for unsortedCard in notSorted %}
\t\t\t\t\t\t<a>[ {{ unsortedCard | join (' de ') }} ] ;\t</a>
\t\t\t\t\t{% endfor %}
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<h6>Cartes triées par couleurs :</h6>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t{% for sortedByline1 in sortedByColor %}
\t\t\t\t\t\t<a>[ {{ sortedByline1 | join (' de ') }} ] ; </a>
\t\t\t\t\t{% endfor %}
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<h6>Cartes triées avec par valeurs :</h6>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t{% for sortedByline2 in sortedByValue %}
\t\t\t\t\t\t<a>[ {{ sortedByline2 | join (' de ') }} ] ;</a>
\t\t\t\t\t{% endfor %}
\t\t\t\t</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
{% endblock body %}
", "draw_card/index.html.twig", "/Users/adamhamza/Desktop/ATEXO GAME/ATEXO/templates/draw_card/index.html.twig");
    }
}
