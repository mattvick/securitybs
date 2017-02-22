<?php
/**
 * Created by PhpStorm.
 * User: matthew
 * Date: 22/02/2017
 * Time: 2:35 PM
 *
 * Roles not updated on each request
 * https://github.com/symfony/symfony/issues/12025
 * https://knpuniversity.com/screencast/symfony-security/dynamic-roles#post-3092038439
 */

namespace AppBundle\Security;


use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\RoleVoter;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Security\Core\User\UserInterface;

class UserVoter extends RoleVoter
{
    protected function extractRoles(TokenInterface $token)
    {
        /** @var User $user */
        $user = $token->getUser();

        return $user instanceof UserInterface ? array_map(
            function(string $role) {
                return new Role($role);
            },
            $user->getRoles()
        ) : [];
    }
}