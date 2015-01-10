<?php namespace Anomaly\Streams\Platform\Ui\Table\Component\Button\Command\Handler;

use Anomaly\Streams\Platform\Ui\Table\Component\Button\ButtonBuilder;

/**
 * Class BuildButtonsCommandHandler
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Platform\Ui\Table\Component\Button\Listener\Command
 */
class BuildButtonsCommandHandler
{

    /**
     * The button builder.
     *
     * @var \Anomaly\Streams\Platform\Ui\Table\Component\Button\ButtonBuilder
     */
    protected $builder;

    /**
     * Create a new BuildButtonsCommandHandler instance.
     *
     * @param ButtonBuilder $builder
     */
    public function __construct(ButtonBuilder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * Build buttons and load them to the table.
     *
     * @param BuildButtonsCommand $command
     */
    public function handle(BuildButtonsCommand $command)
    {
        $this->builder->build($command->getBuilder());
    }
}