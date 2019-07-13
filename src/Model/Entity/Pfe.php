<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pfe Entity
 *
 * @property int $Pfe_ID
 * @property int $user_id
 * @property string $intitule
 * @property string $societe
 * @property int $filiere_id
 * @property int $encadrant_interne_id
 * @property string $encadrant_externe
 * @property \Cake\I18n\Time $date_debut
 * @property \Cake\I18n\Time $date_fin
 * @property string $type
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Filiere $filiere
 */
class Pfe extends Entity
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
        '*' => true,
        'Pfe_ID' => false
    ];
}
