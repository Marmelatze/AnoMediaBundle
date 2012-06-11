<?php
namespace Ano\Bundle\MediaBundle\Form;

use Symfony\Component\Form\FormBuilder;

use Ano\Bundle\MediaBundle\Model\MediaContext;

use Symfony\Component\Form\AbstractType;

class MediaUploadType extends AbstractType
{
    protected $context;
    
    public function __construct(MediaContext $context)
    {
        $this->context = $context;
    }
    
    public function buildForm(FormBuilder $builder, array $options)
    {
        
    }
    
    public function getName()
    {
        return "ano_media_fileupload";
    }
}
