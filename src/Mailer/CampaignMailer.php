<?php
declare(strict_types=1);

namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * Campaign mailer.
 */
class CampaignMailer extends Mailer
{
    /**
     * Mailer's name.
     *
     * @var string
     */
    public static $name = 'Campaign';

    public function merge($user, $subjectTemplate, $bodyTemplate) : void
    {
        $variables = \Cake\Utility\Hash::flatten(['user' => $user->toArray()]);
        $options = [
            'before' => '{{',
            'after' => '}}'
        ];
        $subject = \Cake\Utility\Text::insert($subjectTemplate, $variables, $options);
        $this
            ->setTo($user['email'])
            ->setEmailFormat('both')
            ->setSubject($subject)
            ->setViewVars(compact('variables', 'bodyTemplate', 'options'))
            ->viewBuilder()
                ->setTemplate('campaign');
    }
}
