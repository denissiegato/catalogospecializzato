<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
         $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
         $User = new User();
         $User->setEmail('denis.siegato@gmail.com');
         $User->setPassword($this->passwordEncoder->encodePassword(
             $User,
            'Password.1'
         ));
         $User->setRoles(['ROLE_ADMIN']);
         $manager->persist($User);

        $manager->flush();
    }
}
