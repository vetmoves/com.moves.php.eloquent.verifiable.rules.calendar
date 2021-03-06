<?php

namespace Moves\Eloquent\Verifiable\Rules\Calendar\Contracts\Rules;

use Moves\Eloquent\Verifiable\Contracts\IRule;
use Moves\Eloquent\Verifiable\Rules\Calendar\Contracts\Verifiables\IVerifiableEvent;
use Moves\Eloquent\Verifiable\Rules\Calendar\Enums\CutoffPeriod;
use Moves\Eloquent\Verifiable\Rules\Calendar\Enums\CutoffType;

interface IRuleCutoff extends IRule
{
    public function getCutoffType(?IVerifiableEvent $event = null): CutoffType;

    public function getCutoffPeriod(?IVerifiableEvent $event = null): CutoffPeriod;

    public function getCutoffOffsetMinutes(?IVerifiableEvent $event = null): int;
}
