<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XCart\Bus\Rebuild\Executor\Step;

use XCart\Bus\Exception\Rebuild\HoldException;
use XCart\Bus\Exception\RebuildException;
use XCart\Bus\Rebuild\Executor\StepState;

abstract class AUpgradeNote extends ANote
{
    /**
     * @param array $transition
     *
     * @return array
     */
    protected function getNotesListByTransition($transition): array
    {
        $type = $this->getType();

        if (in_array($transition['id'], ['CDev-Core', 'XC-Service'], true)) {
            $notesDir = version_compare($transition['version_after'], '5.5', '<')
                ? 'upgrade/'
                : 'docs/version_info/';
        } else {
            [$author, $name] = explode('-', $transition['id']);

            $notesDir = version_compare($transition['version_after'], '5.5', '<')
                ? "classes/XLite/Module/{$author}/{$name}/hooks/upgrade/"
                : "modules/{$author}/{$name}/docs/version_info/";
        }

        $languageCode = $this->context->languageCode;

        $noteFiles = array_filter($transition['new_files'], static function ($file) use ($type, $transition, $notesDir, $languageCode) {
            if (!preg_match('/^' . preg_quote($notesDir, '/') . '.*' . $type . '(\.' . $languageCode . ')?' . '\.txt$/', $file)) {
                return false;
            }

            $relativePath = dirname(str_replace($notesDir, '', $file));
            $version      = str_replace(['/', '\\'], '.', $relativePath);

            return version_compare($version, $transition['version_after'], '<=')
                && version_compare($version, $transition['version_before'], '>');
        });

        return array_filter($noteFiles, static function ($file) use ($type, $notesDir, $languageCode, $noteFiles) {
            return !(
                preg_match('/^' . preg_quote($notesDir, '/') . '.*' . $type . '\.txt$/', $file)
                && in_array(str_replace($type . '.txt', $type . '.' . $languageCode . '.txt', $file), $noteFiles)
            );
        });
    }

    /**
     * @param StepState $state
     *
     * @throws RebuildException
     */
    protected function reportNotes($state): void
    {
        if (!empty($state->data)) {
            throw HoldException::fromAUpgradeNoteStepNote($this->getType(), $state);
        }
    }
}
