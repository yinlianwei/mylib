<?php
namespace Mylibber\BackendBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('categoryName');
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Mylibber\BackendBundle\Entity\Category',
        );
    }

    public function getName()
    {
        return 'category';
    }
}

?>