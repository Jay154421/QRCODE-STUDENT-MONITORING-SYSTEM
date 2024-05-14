<?php

namespace Vonage\Verify2\Request;

use Vonage\Verify2\VerifyObjects\VerificationLocale;
use Vonage\Verify2\VerifyObjects\VerificationWorkflow;

class VoiceRequest extends BaseVerifyRequest
{
    public function __construct(
        protected string $to,
        protected string $brand,
        protected ?VerificationLocale $locale = null,
    ) {
        if (!$this->locale) {
            $this->locale = new VerificationLocale();
        }

        $workflow = new VerificationWorkflow(VerificationWorkflow::WORKFLOW_VOICE, $to);

        if ($this->code) {
            $workflow->setCode($this->code);
        }

        $this->addWorkflow($workflow);
    }

    public function toArray(): array
    {
        return $this->getBaseVerifyUniversalOutputArray();
    }
}