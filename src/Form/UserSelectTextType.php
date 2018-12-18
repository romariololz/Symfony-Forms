<?php
/**
 * Created by PhpStorm.
 * User: romariololz
 * Date: 19/12/18
 * Time: 00:13
 */

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserSelectTextType extends AbstractType
{
    public function getParent()
    {
        return TextType::class;
    }
}
