<?php

/* High5HospitalPatientBundle:Default:medical.file.html.twig */
class __TwigTemplate_db99de7d6978a6f6fb7113662d8ef04e320185a8641ef792d78b91049be1e747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("High5HospitalPatientBundle:Default:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "High5HospitalPatientBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container info\">
        <div><h2>First name:</h2> ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "fkPersonne", array()), "prenom", array()), "html", null, true);
        echo "</div>
        <div><h2>Last name:</h2> ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "fkPersonne", array()), "nom", array()), "html", null, true);
        echo "</div>
        <div><h2>Social coverage number:</h2> ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "idCouvertureSociale", array()), "html", null, true);
        echo "</div>
        <div><h2>Date of arrival:</h2> ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "dateEntree", array()), "Y-m-d"), "html", null, true);
        echo "</div>
        <div><h2>Date of departure:</h2> ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["patient"]) ? $context["patient"] : $this->getContext($context, "patient")), "dateSortie", array()), "Y-m-d"), "html", null, true);
        echo "</div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "High5HospitalPatientBundle:Default:medical.file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
