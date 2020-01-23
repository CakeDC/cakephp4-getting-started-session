<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $email
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string $locale
 *
 * @property \App\Model\Entity\Log[] $logs
 * @property \App\Model\Entity\MailingList[] $mailing_lists
 */
class User extends Entity
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
        'email' => true,
        'created' => true,
        'modified' => true,
        'first_name' => true,
        'last_name' => true,
        'locale' => true,
        'logs' => true,
        'mailing_lists' => true,
    ];

    protected function _getDisplayName() : string
    {
        return \Cake\Utility\Text::insert(":firstName :lastName (:email)", [
            'firstName' => $this->first_name,
            'lastName' => $this->get('last_name'),
            'email' => $this['email'],
        ]);
    }
}
