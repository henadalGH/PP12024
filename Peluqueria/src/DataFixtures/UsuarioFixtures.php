<?php

namespace App\DataFixtures;

use App\Entity\Usuario;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UsuarioFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        for($i=1;$i<=4;$i++)
        {
            $usuario = new Usuario();
            $usuario->setNombre('Nombre'. $i);
            $usuario->setApellido('Apellido' .$i);
            $usuario->setFechaNacimiento(new \DateTime('2025-01-19'));
            $usuario->setEmail('Usuario'.$i.'@gmail.com');
            $usuario->setPassword('$2y$13$.cZ2yMSsQxVnnEHXgpl3ketgbin/HG0/8Ne6A/SxroaeNntdgJT.q');
            $manager->persist($usuario);
        }
        $manager->flush();
    }
}
