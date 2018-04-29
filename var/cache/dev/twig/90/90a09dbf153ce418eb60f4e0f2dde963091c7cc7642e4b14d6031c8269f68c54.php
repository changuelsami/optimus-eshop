<?php

/* eshop/admin/category/index.html.twig */
class __TwigTemplate_cb5c1cd6cb148f69e98ede35f4493a38dd43151a07da450355e2706b223bb40a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("eshop/admin/base.html.twig", "eshop/admin/category/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'title_link' => array($this, 'block_title_link'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "eshop/admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "eshop/admin/category/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "eshop/admin/category/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List of Categories ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_title_link($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_link"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_link"));

        echo " 
\t<small> 
\t\t<a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_new");
        echo "\">Add new</a> 
\t</small>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<table class=\"table table-striped table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<th>ID</th>
\t\t\t<th>Image</th>
\t\t\t<th>Label</th>
\t\t\t<th>Details</th>
\t\t\t<th>Action</th>
\t\t</tr>
\t</thead>
\t<tbody>

\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new Twig_Error_Runtime('Variable "items" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 22
            echo "\t\t<tr>
\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t<td> 
\t\t\t\t";
            // line 25
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["line"], "image", array()))) {
                // line 26
                echo "\t\t\t\t<img src=\"/uploads/categories/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "image", array()), "html", null, true);
                echo "\" style=\"width: 50px;\" /> 
\t\t\t\t";
            }
            // line 28
            echo "\t\t\t</td>
\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "label", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 30
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "details", array()), 0, 100);
            echo "</td>
\t\t\t<td>
\t\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_update", array("id" => twig_get_attribute($this->env, $this->source, $context["line"], "id", array()))), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-pencil\"></a>
\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_remove", array("id" => twig_get_attribute($this->env, $this->source, $context["line"], "id", array()))), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-remove-circle remove-item\"></a>
\t\t\t</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "

\t</tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "eshop/admin/category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 37,  148 => 33,  144 => 32,  139 => 30,  135 => 29,  132 => 28,  126 => 26,  124 => 25,  119 => 23,  116 => 22,  112 => 21,  98 => 9,  89 => 8,  76 => 5,  64 => 3,  46 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'eshop/admin/base.html.twig' %}
{% block title %}List of Categories {% endblock %}
{% block title_link %} 
\t<small> 
\t\t<a href=\"{{path('admin_category_new')}}\">Add new</a> 
\t</small>
{% endblock %}\t
{% block body %}
<table class=\"table table-striped table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<th>ID</th>
\t\t\t<th>Image</th>
\t\t\t<th>Label</th>
\t\t\t<th>Details</th>
\t\t\t<th>Action</th>
\t\t</tr>
\t</thead>
\t<tbody>

\t{% for line in items %}
\t\t<tr>
\t\t\t<td>{{ line.id }}</td>
\t\t\t<td> 
\t\t\t\t{% if line.image is not null %}
\t\t\t\t<img src=\"/uploads/categories/{{ line.image }}\" style=\"width: 50px;\" /> 
\t\t\t\t{% endif %}
\t\t\t</td>
\t\t\t<td>{{ line.label }}</td>
\t\t\t<td>{{ line.details | slice(0,100) | raw }}</td>
\t\t\t<td>
\t\t\t\t<a href=\"{{ path('admin_category_update', {'id' : line.id}) }}\" class=\"glyphicon glyphicon-pencil\"></a>
\t\t\t\t<a href=\"{{ path('admin_category_remove', {'id' : line.id}) }}\" class=\"glyphicon glyphicon-remove-circle remove-item\"></a>
\t\t\t</td>
\t\t</tr>
\t{% endfor %}


\t</tbody>
</table>
{% endblock %}", "eshop/admin/category/index.html.twig", "/home/sami/www/lmd/symfony/optimus/optimus-eshop/app/Resources/views/eshop/admin/category/index.html.twig");
    }
}
