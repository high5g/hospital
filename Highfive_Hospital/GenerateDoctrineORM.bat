rem G�n�rer des informations sur les tables � partir de la base de donn�es
php app/console doctrine:mapping:convert xml ./src/High5/Hospital/AdminBundle/Resources/config/doctrine/metadata/orm --from-database --force

rem G�n�rer les classes PHP (Symfony Entities)
php app/console doctrine:mapping:import High5HospitalAdminBundle annotation

rem G�n�rer les setters et getters
php app/console doctrine:generate:entities High5HospitalAdminBundle

pause