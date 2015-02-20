<?php

namespace High5\Hospital\DataAccessLayerBundle\Utils;

class UserUtils
{
    public static function findUser($doctrine, $username, $password, $hospitalId, $userClass)
    {
        $dataAccessObject = $doctrine->getRepository('High5HospitalDataAccessLayerBundle:Personne');
        $queryData = array('username' => $username, 'mdp' => $password, 'fkHopital' => $hospitalId,
            'classe' => $userClass);

        return $dataAccessObject->findBy($queryData);
    }
}
