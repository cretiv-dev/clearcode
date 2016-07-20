<?php
/**
 * @Entity @Table(name="user")
 **/
class User 
{
    /**
     * @Id
     * @Column(type="integer") 
     * @GeneratedValue
     */
    protected $id;
    /**
     * @Assert\NotEmpty
     * @Column(type="string")
     */
    protected $name;
    /**
     * @Assert\NotEmpty
     * @Assert\Email
     * @Column(type="string")
     */
    protected $email;
    
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}

