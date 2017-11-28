<?php
/**
 * Created by PhpStorm.
 * User: pierrebaumes
 * Date: 28/11/2017
 * Time: 11:30
 */

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\DateTime;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class)
            ->add('lastname',TextType::class)
            ->add('phone',TextType::class)
            ->add('address',TextType::class)
            ->add('email',TextType::class)
            ->add('brithday',DateTime::class);
    }
}