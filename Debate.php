<?php

namespace App\INE;

/**
 * Class Debate
 */
class Debate
{
    /**
     * @var int
     */
    private $solidProposals = 0;
    /**
     * Pejenomics|AMLO|DonMafiaDelPoder
     */
    private $peje;
    /**
     * Anaya|RickyRickinCanallin
     *
     */
    private $anaya;
    /**
     * Bronco
     */
    private $bronco;
    /**
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
            if ($timer->doesntTakeForever()) {
                $this->peje->throwResponse('Combatiendo la corrupción...');
            }
        }

        $this->peje->enableMagicBudget(true);
    }

    /**
     * @param Questions $questions
     */
    public function anayaAnswers(Questions $questions)
    {
        foreach ($questions->getAll() as $question) {
            $this->anaya->throwResponse('El presidente a la cárcel...');
            $this->anaya->throwAttack(
                new Randomizer(
                    [
                        $this->peje,
                        $this->meade,
                    ]
                )
            );
        }

        $ardido = true;
    }

    /**
     * @param Questions $questions
     */
    public function meadeAnswers(Questions $questions)
    {
        foreach ($questions->getAll() as $question) {
            $position = $this->meade->getRandomPosition(new Randomizer());
            $this->meade->throwResponse('Cuando fui... ' . $position);
        }

        $apoyoALaSeleccionYEscorts = true;
    }

    /**
     * @param Questions $questions
     */
    public function broncoAnswers(Questions $questions)
    {
        foreach ($questions->getAll() as $question) {
            continue; // ignore
        }

        $mochaManos = true;
    }
}
