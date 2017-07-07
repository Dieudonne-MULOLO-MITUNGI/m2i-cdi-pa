<?php
/**
 * Created by PhpStorm.
 * User: deketelaere
 * Date: 07/07/2017
 * Time: 14:47
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Annonce;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class AnnonceFixtures extends AbstractFixture
    implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
       $Annonce = new Annonce();
       $Annonce->setTitre("maison avendre")
                ->setPrix(10200)
                ->setCodepostal(59500);
        $manager->persist($Annonce);
       $manager->flush();

    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 2;
    }
}