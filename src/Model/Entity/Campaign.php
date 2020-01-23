<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Campaign Entity
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string $status
 * @property int $template_id
 *
 * @property \App\Model\Entity\Template $template
 * @property \App\Model\Entity\Log[] $logs
 * @property \App\Model\Entity\MailingList[] $mailing_lists
 */
class Campaign extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'created' => true,
        'modified' => true,
        'status' => true,
        'template_id' => true,
        'template' => true,
        'logs' => true,
        'mailing_lists' => true,
    ];
}
