<?php

namespace High5\Hospital\DataAccessLayerBundle\Utils;

use High5\Hospital\DataAccessLayerBundle\Entity\Personne;

class UserUtils
{
    public static function findUser($doctrine, $username, $password, $hospitalId, $userClass)
    {
        $dataAccessObject = $doctrine->getRepository('High5HospitalDataAccessLayerBundle:Personne');
        $queryData = array('username' => $username, 'mdp' => $password, 'fkHopital' => $hospitalId,
            'classe' => $userClass);
        return $dataAccessObject->findBy($queryData);
    }

    public static function findDoctor($doctrine, Personne $person)
    {
        $dataAccessObject = $doctrine->getRepository('High5HospitalDataAccessLayerBundle:Medecin');
        $queryData = array("fkPersonne" => $person);
        $result = $dataAccessObject->findBy($queryData);
        if ($result == null)
        {
            return null;
        }
        return $result[0];
    }

    public static function findPatient($doctrine, Personne $person)
    {
        $dataAccessObject = $doctrine->getRepository('High5HospitalDataAccessLayerBundle:Patient');
        $queryData = array("fkPersonne" => $person);
        $result = $dataAccessObject->findBy($queryData);
        if ($result == null)
        {
            return null;
        }
        return $result[0];
    }

}
