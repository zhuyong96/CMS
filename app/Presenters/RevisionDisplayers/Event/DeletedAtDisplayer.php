<?php

/*
 * This file is part of Bootstrap CMS.
 *
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\BootstrapCMS\Presenters\RevisionDisplayers\Event;

/**
 * This is the deleted at displayer class.
 *
 * @author Graham Campbell <graham@mineuk.com>
 */
class DeletedAtDisplayer extends AbstractDisplayer
{
    /**
     * Get the change title.
     *
     * @return string
     */
    public function title()
    {
        return 'Deleted Event';
    }

    /**
     * Get the change description from the context of
     * the change being made by the current user.
     *
     * @return string
     */
    protected function current()
    {
        return 'You deleted the event called'.$this->name();
    }

    /**
     * Get the change description from the context of
     * the change not being made by the current user.
     *
     * @return string
     */
    protected function external()
    {
        return 'This user deleted the event called'.$this->name();
    }
}
