<?php

/* High5HospitalPatientBundle:Default:doctors.list.html.twig */
class __TwigTemplate_c64fd0c2427c5dd0d79135bc3762228aa0b563c3e259aacc46fe35185dcfaa3e extends Twig_Template
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
        echo "    <div class=\"center-block\">
        <div>
            <h2>List of doctors in ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["hospitalName"]) ? $context["hospitalName"] : $this->getContext($context, "hospitalName")), "html", null, true);
        echo ":</h2>
        </div>
        <table class=\"table\">
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Speciality</th>
                <th>Hourly rate</th>
            </tr>
            ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["doctors"]) ? $context["doctors"] : $this->getContext($context, "doctors")));
        foreach ($context['_seq'] as $context["_key"] => $context["doctor"]) {
            // line 16
            echo "                <tr>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["doctor"], "fkPersonne", array()), "prenom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["doctor"], "fkPersonne", array()), "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["doctor"], "specialite", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["doctor"], "tarifParConsultation", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doctor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "High5HospitalPatientBundle:Default:doctors.list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  66 => 20,  62 => 19,  58 => 18,  54 => 17,  51 => 16,  47 => 15,  35 => 6,  31 => 4,  28 => 3,);
    }
}
