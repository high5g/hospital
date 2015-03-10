<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // high5_hospital_index_homepage
        if (rtrim($pathinfo, '/') === '/index') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'high5_hospital_index_homepage');
            }

            return array (  '_controller' => 'High5\\Hospital\\IndexBundle\\Controller\\IndexController::indexAction',  '_route' => 'high5_hospital_index_homepage',);
        }

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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
