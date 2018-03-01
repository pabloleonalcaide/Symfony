<?php
//Utilizamos este nombre de fichero porque a nuestra clase en Entity la hemos llamado Enquiry
namespace Blogger\BlogBundle\Form;
//Estructura
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//Tipos de datos del formulario que vamos a utilizar
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class EnquiryType extends AbstractType{
  public function buildForm(FormBuilderInterface $builder, array $options){
    $builder->add('name')
            ->add('email',EmailType::class)
            ->add('subject',TextType::class)
            ->add('body',TextareaType::class)
            ->add('save',SubmitType::class);
  }
}
?>
