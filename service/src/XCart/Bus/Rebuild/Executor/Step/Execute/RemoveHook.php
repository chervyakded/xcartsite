<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XCart\Bus\Rebuild\Executor\Step\Execute;

use XCart\Bus\Core\Annotations\RebuildStep;
use XCart\Bus\Rebuild\Executor\ScriptState;
use XCart\Bus\Rebuild\Executor\Step\AEventHook;
use XCart\Bus\Rebuild\Scenario\ChangeUnitProcessor;
use XCart\SilexAnnotations\Annotations\Service;

/**
 * @Service\Service(arguments={"logger"="XCart\Bus\Core\Logger\Rebuild"})
 * @RebuildStep(script = "redeploy", weight = "6000")
 * @RebuildStep(script = "major-upgrade", weight = "6000")
 */
class RemoveHook extends AEventHook
{
    /**
     * @return string
     */
    protected function getType(): string
    {
        return 'remove';
    }

    /**
     * @param ScriptState $scriptState
     *
     * @return string|null
     */
    protected function getCacheId(ScriptState $scriptState): ?string
    {
        $parentStepState = $scriptState->getCompletedStepState(UpdateModulesList::class);

        return $parentStepState ? $parentStepState->data['cacheId'] : null;
    }

    /**
     * @param array[] $transitions
     *
     * @return array[]
     */
    protected function filterScriptTransitions(array $transitions): array
    {
        return array_filter($transitions, static function ($transition) {
            return $transition['transition'] === ChangeUnitProcessor::TRANSITION_REMOVE
                && $transition['stateBeforeTransition']['integrated'] === true;
        });
    }
}
