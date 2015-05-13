<?php

namespace Games\Model;

use Games\Model\Game\ApiKey as ApiKey;

/**
 * @property $id
 * @property $title
 * @property $code
 * @property $status
 * @property $description
 * @property $url
 * @method ApiKey getApiKey
 */
class Game extends AbstractModel
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $url;

    public function initialize() {
        $this->hasOne('id', 'Games\Model\ApiKey', 'games_id', [
            'alias' => 'apiKey',
        ]);
    }

    public function getPermissionsCompiled() {
        // TODO: get all permissions, compile permissions groups and return simple array
        return [
            ['my'],
        ];
    }

    public function getSource() {
        return 'games';
    }

}
