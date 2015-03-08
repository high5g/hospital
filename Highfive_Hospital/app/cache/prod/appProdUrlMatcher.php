<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // high5_hospital_data_access_layer_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'high5_hospital_data_access_layer_homepage')), array (  '_controller' => 'High5\\Hospital\\DataAccessLayerBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // high5_hospital_admin_homepage
            if (0 === strpos($pathinfo, '/admin/hello') && preg_match('#^/admin/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'high5_hospital_admin_homepage')), array (  '_controller' => 'High5\\Hospital\\AdminBundle\\Controller\\DefaultController::indexAction',));
            }

            // high5_hospital_admin_login
            if ($pathinfo === '/admin/login') {
                return array (  '_controller' => 'High5\\Hospital\\AdminBundle\\Controller\\LoginController::loginAction',  '_route' => 'high5_hospital_admin_login',);
            }

            // high5_hospital_admin_create_hospital
            if ($pathinfo === '/admin/hospital/create') {
                return array (  '_controller' => 'High5\\Hospital\\AdminBundle\\Controller\\DefaultController::createHospitalAction',  '_route' => 'high5_hospital_admin_create_hospital',);
            }

            if (0 === strpos($pathinfo, '/admin_hospital')) {
                // high5_hospital_adminhospital_homepage
                if ($pathinfo === '/admin_hospital/homepage') {
                    return array (  '_controller' => 'High5\\Hospital\\AdminHospitalBundle\\Controller\\DefaultController::indexAction',  '_route' => 'high5_hospital_adminhospital_homepage',);
                }

                // high5_hospital_adminhospital_login
                if ($pathinfo === '/admin_hospital/login') {
                    return array (  '_controller' => 'High5\\Hospital\\AdminHospitalBundle\\Controller\\DefaultController::loginAction',  '_route' => 'high5_hospital_adminhospital_login',);
                }

                if (0 === strpos($pathinfo, '/admin_hospital/add')) {
                    // high5_hospital_adminhospital_add_patient
                    if ($pathinfo === '/admin_hospital/add/patient') {
                        return array (  '_controller' => 'High5\\Hospital\\AdminHospitalBundle\\Controller\\DefaultController::addPatientAction',  '_route' => 'high5_hospital_adminhospital_add_patient',);
                    }

                    // high5_hospital_adminhospital_add_doctor
                    if ($pathinfo === '/admin_hospital/add/doctor') {
                        return array (  '_controller' => 'High5\\Hospital\\AdminHospitalBundle\\Controller\\DefaultController::addDoctorAction',  '_route' => 'high5_hospital_adminhospital_add_doctor',);
                    }

                }

                // high5_hospital_adminhospital_logout
                if ($pathinfo === '/admin_hospital/logout') {
                    return array (  '_controller' => 'High5\\Hospital\\AdminHospitalBundle\\Controller\\DefaultController::logOutAction',  '_route' => 'high5_hospital_adminhospital_logout',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/doctor')) {
            // high5_hospital_doctor_homepage
            if ($pathinfo === '/doctor/homepage') {
                return array (  '_controller' => 'High5\\Hospital\\DoctorBundle\\Controller\\DefaultController::indexAction',  '_route' => 'high5_hospital_doctor_homepage',);
            }

            if (0 === strpos($pathinfo, '/doctor/log')) {
                // high5_hospital_doctor_login
                if ($pathinfo === '/doctor/login') {
                    return array (  '_controller' => 'High5\\Hospital\\DoctorBundle\\Controller\\DefaultController::loginAction',  '_route' => 'high5_hospital_doctor_login',);
                }

                // high5_hospital_doctor_logout
                if ($pathinfo === '/doctor/logout') {
                    return array (  '_controller' => 'High5\\Hospital\\DoctorBundle\\Controller\\DefaultController::logOutAction',  '_route' => 'high5_hospital_doctor_logout',);
                }

            }

            // high5_hospital_doctor_plan_rdv
            if ($pathinfo === '/doctor/planrdv') {
                return array (  '_controller' => 'High5\\Hospital\\DoctorBundle\\Controller\\DefaultController::planRendezvousAction',  '_route' => 'high5_hospital_doctor_plan_rdv',);
            }

            // high5_hospital_doctor_view_rdv_planning
            if ($pathinfo === '/doctor/view/rdvplanning') {
                return array (  '_controller' => 'High5\\Hospital\\DoctorBundle\\Controller\\DefaultController::viewRendezvousPlanningAction',  '_route' => 'high5_hospital_doctor_view_rdv_planning',);
            }

            // high5_hospital_doctor_edit_patient_file
            if ($pathinfo === '/doctor/edit/patientfile') {
                return array (  '_controller' => 'High5\\Hospital\\DoctorBundle\\Controller\\DefaultController::editPatientFileAction',  '_route' => 'high5_hospital_doctor_edit_patient_file',);
            }

            if (0 === strpos($pathinfo, '/doctor/find/patient')) {
                // high5_hospital_doctor_find_patient_file
                if ($pathinfo === '/doctor/find/patientfile') {
                    return array (  '_controller' => 'High5\\Hospital\\DoctorBundle\\Controller\\DefaultController::findPatientFileAction',  '_route' => 'high5_hospital_doctor_find_patient_file',);
                }

                // high5_hospital_doctor_find_patient_appointment
                if ($pathinfo === '/doctor/find/patientappointment') {
                    return array (  '_controller' => 'High5\\Hospital\\DoctorBundle\\Controller\\DefaultController::findPatientAppointmentAction',  '_route' => 'high5_hospital_doctor_find_patient_appointment',);
                }

            }

            // high5_hospital_doctor_save_patient_appointment_info
            if ($pathinfo === '/doctor/save/patientappointmentinfo') {
                return array (  '_controller' => 'High5\\Hospital\\DoctorBundle\\Controller\\DefaultController::savePatientAppointmentInfoAction',  '_route' => 'high5_hospital_doctor_save_patient_appointment_info',);
            }

        }

        if (0 === strpos($pathinfo, '/patient')) {
            // high5_hospital_patient_homepage
            if ($pathinfo === '/patient/homepage') {
                return array (  '_controller' => 'High5\\Hospital\\PatientBundle\\Controller\\DefaultController::indexAction',  '_route' => 'high5_hospital_patient_homepage',);
            }

            if (0 === strpos($pathinfo, '/patient/l')) {
                if (0 === strpos($pathinfo, '/patient/log')) {
                    // high5_hospital_patient_login
                    if ($pathinfo === '/patient/login') {
                        return array (  '_controller' => 'High5\\Hospital\\PatientBundle\\Controller\\DefaultController::loginAction',  '_route' => 'high5_hospital_patient_login',);
                    }

                    // high5_hospital_patient_logout
                    if ($pathinfo === '/patient/logout') {
                        return array (  '_controller' => 'High5\\Hospital\\PatientBundle\\Controller\\DefaultController::logOutAction',  '_route' => 'high5_hospital_patient_logout',);
                    }

                }

                // high5_hospital_patient_list_doctors
                if ($pathinfo === '/patient/list/doctors') {
                    return array (  '_controller' => 'High5\\Hospital\\PatientBundle\\Controller\\DefaultController::listAvailableDoctorsAction',  '_route' => 'high5_hospital_patient_list_doctors',);
                }

            }

            // high5_hospital_patient_view_medical_file
            if ($pathinfo === '/patient/view/medicalfile') {
                return array (  '_controller' => 'High5\\Hospital\\PatientBundle\\Controller\\DefaultController::viewMedicalFileAction',  '_route' => 'high5_hospital_patient_view_medical_file',);
            }

            // high5_hospital_patient_make_appointment
            if ($pathinfo === '/patient/create/rdv') {
                return array (  '_controller' => 'High5\\Hospital\\PatientBundle\\Controller\\DefaultController::createRendezvousAction',  '_route' => 'high5_hospital_patient_make_appointment',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
