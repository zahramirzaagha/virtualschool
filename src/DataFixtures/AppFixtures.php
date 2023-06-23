<?php

namespace App\DataFixtures;

use App\Entity\Role;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $parentRole = new Role();
        $parentRole->setName("parent");
        $manager->persist($parentRole);

        $teacherRole = new Role();
        $teacherRole->setName("teacher");
        $manager->persist($teacherRole);

        $studentRole = new Role();
        $studentRole->setName("student");
        $manager->persist($studentRole);

        $manager->flush();
    }
}
