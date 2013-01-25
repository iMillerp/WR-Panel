<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Usuarios {

  /**
   * @var integer
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @var string
   *
   * @ORM\Column(name="usuario", type="string", length=255)
   */
  private $usuario;

  /**
   * @var string
   *
   * @ORM\Column(name="senha", type="string", length=255)
   */
  private $senha;

  /**
   * @var string
   *
   * @ORM\Column(name="email", type="string", length=255)
   */
  private $email;

  /**
   * @var string
   *
   * @ORM\Column(name="cargo", type="string", length=10)
   */
  private $cargo;

  /**
   * @var string
   *
   * @ORM\Column(name="status", type="string", length=2)
   */
  private $status;

  /**
   * Get id
   *
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Set usuario
   *
   * @param string $usuario
   * @return Usuarios
   */
  public function setUsuario($usuario) {
    $this->usuario = $usuario;

    return $this;
  }

  /**
   * Get usuario
   *
   * @return string
   */
  public function getUsuario() {
    return $this->usuario;
  }

  /**
   * Set senha
   *
   * @param string $senha
   * @return Usuarios
   */
  public function setSenha($senha) {
    $this->senha = $senha;

    return $this;
  }

  /**
   * Get senha
   *
   * @return string
   */
  public function getSenha() {
    return $this->senha;
  }

  /**
   * Set email
   *
   * @param string $email
   * @return Usuarios
   */
  public function setEmail($email) {
    $this->email = $email;

    return $this;
  }

  /**
   * Get email
   *
   * @return string
   */
  public function getEmail() {
    return $this->email;
  }

  /**
   * Set cargo
   *
   * @param string $cargo
   * @return Usuarios
   */
  public function setCargo($cargo) {
    $this->cargo = $cargo;

    return $this;
  }

  /**
   * Get cargo
   *
   * @return string
   */
  public function getCargo() {
    return $this->cargo;
  }

  /**
   * Set status
   *
   * @param string $status
   * @return Usuarios
   */
  public function setStatus($status) {
    $this->status = $status;

    return $this;
  }

  /**
   * Get status
   *
   * @return string
   */
  public function getStatus() {
    return $this->status;
  }

}
