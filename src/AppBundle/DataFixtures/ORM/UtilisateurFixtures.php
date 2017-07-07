<?php
/**
 * Created by PhpStorm.
 * User: deketelaere
 * Date: 07/07/2017
 * Time: 14:49
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Utilisateur;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class UtilisateurFixtures extends AbstractFixture
        implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        {

            $Utilisateur = new Utilisateur();

            $Utilisateur->setNom("Dido")
                ->setEmail("dido@hotmail.fr")
                ->setPassword(1234);
            $manager->persist($Utilisateur);

            $manager->flush();



        }
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 1;
    }

}