<?php


class User
{
    private $username;
    private $email;
    private $loyaltyCounts;

    public function __construct($username = null, $email = null, $loyaltyCounts = null)
    {
        if ($username !== null) {
            $this->username = $username;
        }
        if ($username !== null) {
            $this->email = $email;
        }
        if ($loyaltyCounts !== null) {
            $this->loyaltyCounts = $loyaltyCounts;
        }
    }

    function displayUserDetails()
    {
        echo "<br>";
        echo "Username : " . $this->getUsername()
            . "  Email : " . $this->getEmail()
            . " loyalty Counts :" . $this->getLoyaltyCounts();
    }


    public function getUsername()
    {
        return $this->username;
    }


    public function setUsername($username)
    {
        if (strpos($username, "admin") !== false) {
            $this->username = "ADMIN_" . $username;
        } else {
            $this->username = $username;
        }
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getLoyaltyCounts()
    {
        return $this->loyaltyCounts;
    }


    public function setLoyaltyCounts($loyaltyCounts)
    {
        if ($loyaltyCounts > 100) {
            $this->loyaltyCounts = $loyaltyCounts - 5;
        } else {
            $this->loyaltyCounts = $loyaltyCounts;
        }
    }


}


$user = new User("Scooby", "scby@gmail.com");
//$user->username = "Shagy";

$user->setUsername("pink panther");
$user->setEmail("pp@gmail.com");
$user->setLoyaltyCounts(99);


var_dump("user", $user);

$user->displayUserDetails();


$user2 = new User();

$user2->setUsername("admin Alibaba");
$user2->setEmail("alibaba@gmail.com");
$user2->setLoyaltyCounts(101);

var_dump("user2", $user2);

$user2->displayUserDetails();
