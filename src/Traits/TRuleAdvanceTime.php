<?php

namespace Moves\Eloquent\Verifiable\Rules\Calendar\Traits;

use Carbon\Carbon;
use Moves\Eloquent\Verifiable\Contracts\IVerifiable;
use Moves\Eloquent\Verifiable\Rules\Calendar\Contracts\Verifiables\IVerifiableEvent;

trait TRuleAdvanceTime
{
    /**
     * @param IVerifiableEvent $verifiable
     * @return bool
     * @throws \Exception
     */
    public function verify(IVerifiable $verifiable): bool
    {
        $configuredAdvanceMinutes = $this->getAdvanceMinutes();
        $now = Carbon::now();
        $actualAdvanceMinutes = $now->diffInMilliseconds($verifiable->getStartTime(), false) / 60000.0;

        if (
            $configuredAdvanceMinutes < 0
            ? $actualAdvanceMinutes > abs($configuredAdvanceMinutes)
            : $actualAdvanceMinutes < $configuredAdvanceMinutes
        )
        {
            throw new \Exception('');
        }

        return true;
    }
}