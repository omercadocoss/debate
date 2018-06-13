<?php


class Debate
{
    /**
     * Pejenomics|AMLO|DonMafiaDelPoder
     */
    private $peje;
    /**
     * RickyRickinCanallin
     */
    private $anaya;
    /*
    * Bronco
    */
    private $bronco;
    /*
    * Meade|Leono
    */
    private $meade;

    /**
     * @param Questions $questions
     */
    public function pejeAnswers(Questions $questions)
    {
        $timer->on();
        foreach ($questions->getAll() as $question) {
            if($timer->doesntTakeForever()) {
                $this->peje->throwResponse('La corrupcion');
            }
        }

        $this->peje->enableMagicBudget(true);
    }

    public function anayaAnswers(Questions $questions)
    {
        foreach ($questions->getAll() as $question) {
            $this->anaya->throwResponse('El presidente a la carcel');
        }

        $ardido = true;
    }

    public function meadeAnswers(Questions $questions)
    {
        foreach ($questions->getAll() as $question) {
            $position = $this->meade->getRandomPosition(new Randomizer());
            $this->meade->throwResponse('Cuando fui..' . $position);
        }

        $apoyoALaSeleccionYEscorts = true;
    }

    public function broncoAnswers(Questions $questions)
    {
        foreach ($questions->getAll() as $question) {
            continue; // ignore
        }
        $mochaManos = true;

    }
}
