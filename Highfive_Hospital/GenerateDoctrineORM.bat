rem Générer des informations sur les tables à partir de la base de données
php app/console doctrine:mapping:convert xml ./src/High5/Hospital/DataAccessLayerBundle/Resources/config/doctrine/metadata/orm --from-database --force

rem Générer les classes PHP (Symfony Entities)
php app/console doctrine:mapping:import High5HospitalDataAccessLayerBundle annotation

rem Générer les setters et getters
php app/console doctrine:generate:entities High5HospitalDataAccessLayerBundle

pause