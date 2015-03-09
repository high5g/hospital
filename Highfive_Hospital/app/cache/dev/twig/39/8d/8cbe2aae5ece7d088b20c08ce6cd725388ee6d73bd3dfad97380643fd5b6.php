<?php

/* High5HospitalDoctorBundle:Default:rendezvous.planning.html.twig */
class __TwigTemplate_398d8cbe2aae5ece7d088b20c08ce6cd725388ee6d73bd3dfad97380643fd5b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("High5HospitalDoctorBundle:Default:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "High5HospitalDoctorBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"center-block\">
        <div>
            Rendezvous Planning of Doctor ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["doctorName"]) ? $context["doctorName"] : $this->getContext($context, "doctorName")), "html", null, true);
        echo ":
        </div>
        <table class=\"table\">
            <tr>
                <th>Id</th>
                <th>Visit date</th>
                <th>Patient full name</th>
            </tr>
            ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rdvs"]) ? $context["rdvs"] : $this->getContext($context, "rdvs")));
        foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
            // line 15
            echo "                <tr>
                    <td id=\"rdvId";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "id", array()), "html", null, true);
            echo "</td>
                    <td id=\"rdvDate";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rdv"], "dateVisite", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                    <td id=\"patientFullName";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rdv"], "fkPatient", array()), "fkPersonne", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rdv"], "fkPatient", array()), "fkPersonne", array()), "nom", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rdv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "High5HospitalDoctorBundle:Default:rendezvous.planning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 21,  65 => 18,  59 => 17,  53 => 16,  50 => 15,  46 => 14,  35 => 6,  31 => 4,  28 => 3,);
    }
}
