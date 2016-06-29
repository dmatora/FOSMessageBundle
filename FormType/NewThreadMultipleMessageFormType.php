<?php
namespace FOS\MessageBundle\FormType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use FOS\MessageBundle\FormType\RecipientsType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;

/**
 * Message form type for starting a new conversation with multiple recipients
 *
 * @author Łukasz Pospiech <zocimek@gmail.com>
 */
class NewThreadMultipleMessageFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('recipients', RecipientsType::class, array('label' => 'recipients', 'translation_domain' => 'FOSMessageBundle'))
            ->add('subject', TextType::class, array('label' => 'subject', 'translation_domain' => 'FOSMessageBundle'))
            ->add('body', TextareaType::class, array('label' => 'body', 'translation_domain' => 'FOSMessageBundle'));
    }

    public function getName()
    {
        return 'fos_message_new_multiperson_thread';
    }
}
