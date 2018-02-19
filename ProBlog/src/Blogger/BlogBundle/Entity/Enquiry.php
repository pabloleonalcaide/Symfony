<?php
namespace Blogger\BlogBundle\Entity;
//mapping ClassMetadata es para la validación en php
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;
//nambe no blanco, mail tipo mail, body al menos 2 no blanco, subject no blanco entre 2 y 50

class Enquiry{
  /**
  * @Assert\NotBlank()
  */
  protected $name;
  /**
  * @Assert\NotBlank()
  * @Assert\Email(
  *   message = "El email no es valido",
  *   checkMX = true
  * )
  */
  protected $email;
  /**
  * @Assert\NotBlank()
  * @Assert\Length(
  *      min = 2,
  *      max = 50,
  *      minMessage = "El mínimo es {{ limit }} letras",
  *      maxMessage = "No puedes escribir mas de {{ limit }} letras"
  * )
  */
  protected $subject;
  /**
  * @Assert\NotBlank()
  * @Assert\Length(
  *      min = 2,
  *      minMessage = "El mínimo es {{ limit }} letras",
  * )
  */
  protected $body;
  public function getName(){return $this->name;}
  public function setName($name){$this->name = $name;}
  public function getEmail(){return $this->email;}
  public function setEmail($email){$this->email = $email;}
  public function getSubject(){return $this->subject;}
  public function setSubject($subject){$this->subject = $subject;}
  public function getBody(){return $this->body;}
  public function setBody($body){$this->body = $body;}
}

?>
