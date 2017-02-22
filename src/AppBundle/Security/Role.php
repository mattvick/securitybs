<?php
/**
 * Created by PhpStorm.
 * User: matthew
 * Date: 22/02/2017
 * Time: 2:45 PM
 *
 * Roles not updated on each request
 * https://github.com/symfony/symfony/issues/12025
 * https://knpuniversity.com/screencast/symfony-security/dynamic-roles#post-3092038439
 */

namespace AppBundle\Security;

use Symfony\Component\Security\Core\Role\RoleInterface;

class Role implements RoleInterface
{
    /**
     * @inheritDoc
     */
    public function getRole()
    {
        // TODO: Implement getRole() method.
    }

}