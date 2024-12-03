<?php

class Host
{
    public function publishPrice(Participant $buyer, float $price)
    {
        $id = $buyer->getParticipantId();
        echo "Participant {$id}, price: {$price}\n ";
    }
}