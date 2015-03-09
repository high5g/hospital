<?php

/* High5HospitalDoctorBundle:Default:patients.list.html.twig */
class __TwigTemplate_889e6b53cad6ecbd496682f61265e20c5796016bd0fab0d1eb728d36f1a66e20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'table' => array($this, 'block_table'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>
    function showPatientDetails(patientId) {
";
        // line 4
        echo "        patientFirstName = \$(\"#firstName\" + patientId).text();
        patientLastName = \$(\"#lastName\" + patientId).text();
        \$.post('";
        // line 6
        echo $this->env->getExtension('routing')->getPath("high5_hospital_doctor_find_patient_appointment");
        echo "',
            {id: patientId},
            function (response) {
                if (response.success === true) {
                    \$(\"#patient-id\").html(patientId);
                    \$(\"#patient-name\").html(patientFirstName + ' ' + patientLastName);    
                    \$(\"#desc\").html(response.result.description);
                    \$(\"#rdvDate\").html(response.result.fkRdv.dateVisite.date);
                    \$('#myModal').modal('show');
                } else {
                    alert(response.result);
                }
            }, \"json\");
    }

    function savePatientAppointmentInfo() {
        patientId = \$(\"#patient-id\").text();
        description = \$(\"#desc\").val();
        \$.post('";
        // line 24
        echo $this->env->getExtension('routing')->getPath("high5_hospital_doctor_save_patient_appointment_info");
        echo "',
            {id: patientId, desc: description},
            function (response) {
                alert(response.result);
                \$('#myModal').modal('hide');
            }, \"json\");
    }
</script>
";
        // line 32
        $this->displayBlock('table', $context, $blocks);
    }

    public function block_table($context, array $blocks = array())
    {
        // line 33
        echo "    <div>
        List of patients in ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["hospitalName"]) ? $context["hospitalName"] : $this->getContext($context, "hospitalName")), "html", null, true);
        echo ":
    </div>
    <table class=\"table\">
        <tr>
            <th>Id</th>
            <th>First name</th>
            <th>Last name</th>
        </tr>
        ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["patients"]) ? $context["patients"] : $this->getContext($context, "patients")));
        foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
            // line 43
            echo "            <tr>
                <td id=\"id";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "id", array()), "html", null, true);
            echo "</td>
                <td id=\"firstName";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["patient"], "fkPersonne", array()), "prenom", array()), "html", null, true);
            echo "</td>
                <td id=\"lastName";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["patient"], "fkPersonne", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td><button onclick=\"showPatientDetails(";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "id", array()), "html", null, true);
            echo ")\" class=\"btn btn-default\">View</button></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </table>
    <!-- Modal -->
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            <h4 class=\"modal-title\" id=\"myModalLabel\">Patient details</h4>
          </div>
            <div class=\"modal-body\">
                <div>
                    <span>Patient Id: </span><span id=\"patient-id\"></span>
                </div>
                <div>
                    <span>Patient full name: </span><span id=\"patient-name\"></span>
                </div>
                <div id=\"visite-date\"></div>
                <div>Last Rendez-vous date: <span id=\"rdvDate\"></span></div>
                <div>Description</div>
                <textarea id=\"desc\"></textarea>
            </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            <button type=\"button\" class=\"btn btn-primary\" onclick=\"savePatientAppointmentInfo()\">Save changes</button>
          </div>
        </div>
      </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "High5HospitalDoctorBundle:Default:patients.list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 50,  105 => 47,  99 => 46,  93 => 45,  87 => 44,  84 => 43,  80 => 42,  69 => 34,  66 => 33,  60 => 32,  49 => 24,  28 => 6,  24 => 4,  20 => 1,);
    }
}
