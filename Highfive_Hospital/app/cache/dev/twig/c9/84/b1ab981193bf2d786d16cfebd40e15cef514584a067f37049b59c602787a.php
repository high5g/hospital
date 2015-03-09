<?php

/* High5HospitalDoctorBundle:Default:edit.patient.file.html.twig */
class __TwigTemplate_c984b1ab981193bf2d786d16cfebd40e15cef514584a067f37049b59c602787a extends Twig_Template
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
        echo "    <script language=\"javascript\">
    function findPatient(patientName) {
        \$.post('";
        // line 6
        echo $this->env->getExtension('routing')->getPath("high5_hospital_doctor_find_patient_file");
        echo "', {name: patientName},
            function (response) {
                if (response.success === true) {
                    \$(\"#patientInfo\").html(response.result);

                } else {
                    \$(\"#patientInfo\").html(response.result);
                }
            }, \"json\");
        }

        \$(document).ready(function () {
            \$('button').on('click', function () {
                findPatient(\$('input').val());
            });
        });
    </script>
    <div class=\"container\">
        <div>Search patient:</div>
        <div><input type=\"text\"/>
        <button class=\"btn btn-default\">Search</button></div>
        <div id=\"patientInfo\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "High5HospitalDoctorBundle:Default:edit.patient.file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,);
    }
}
