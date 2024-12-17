<?php

class ApplicationFormHandler
{
    private $name;
    private $email;
    private $phone;

    public function validate($name, $email, $phone): bool
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;

        // do smth
        return true;
    }

    public function showApplicantData(): void
    {
        echo "Name: " . $this->name . PHP_EOL;
        echo "Email: " . $this->email . PHP_EOL;
        echo "Phone: " . $this->phone . PHP_EOL;
    }
    
    public function save(): ApplicationFormMemento
    {
        $formData = ['name' => $this->name, 'email' => $this->email, 'phone' => $this->phone];
        return new ApplicationFormMemento(json_encode($formData));
    }
        
    public function restore(ApplicationFormMemento $memento): void
    {
        $savedData = json_decode($memento->getStorage());
        $this->name = $savedData->name;
        $this->email = $savedData->email;
        $this->phone = $savedData->phone;
    }

}