<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Product;
use AppBundle\Entity\Feature;

/**
 *
 * @author valérian Girard <valerian.girard@educagri.fr>
 */
class DataFixture implements FixtureInterface
{

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        for($x = 0; $x < 50; $x++) {
            $feature1 = new Feature();
            $feature1->setName("Name 1");

            $feature2 = new Feature();
            $feature2->setName("Name 2");

            $product = new Product();
            $product->setDescription("Description " . $x)
                    ->setName("Name " . $x)
                    ->setPrice($x)
                    ->setFeatures(array($feature1, $feature2));

            $manager->persist($product);
        }

        $manager->flush();
    }
    
}
